<?php
session_start();

class ViolationController
{
    private $requestMethod, $role, $ViolationModel;

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->role = $_SESSION['user_role'] ?? false;
        $this->ViolationModel = new ViolationModel();
    }

    public function violations()
    {        
        $violations = $this->ViolationModel->getAllViolations();
        loadView("head");
        //require_once APP_ROOT . '/app/views/admin/blotters/violations.php';
        loadView("admin/blotters/violations", ['violations' => $violations]);
    }
 
    public function addViolation()
    {
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo json_encode([
                'success' => false,
                'type'    => 'error',
                'message' => 'Invalid request method.'
            ]);
            exit;
        }

        $violation_name = trim($_POST['violation_name'] ?? '');

        if ($violation_name === '') {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Violation name is required.'
            ]);
            exit;
        }

        if ($this->ViolationModel->isDuplicateViolation($violation_name)) {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Violation already exists.'
            ]);
            exit;
        }

        $insertId = $this->ViolationModel->createViolation([
            'violation_name' => $violation_name
        ]);

        if ($insertId) {
            echo json_encode([
                'success' => true,
                'type'    => 'success',
                'message' => 'Violation added successfully.'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'type'    => 'error',
                'message' => 'Failed to add violation.'
            ]);
        }
        exit;
    }



    // Edit violation
   public function editViolation()
    {
        header('Content-Type: application/json');

        $violation_id   = $_POST['violation_id'] ?? null;
        $violation_name = trim($_POST['violation_name'] ?? '');

        if (!$violation_id || $violation_name === '') {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Violation name is required.'
            ]);
            exit;
        }

        // Prevent duplicate (exclude current ID)
        if ($this->ViolationModel->isDuplicateViolation($violation_name, $violation_id)) {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Violation already exists.'
            ]);
            exit;
        }

        $result = $this->ViolationModel->editViolation($violation_id, $violation_name);

        if ($result) {
            echo json_encode([
                'success' => true,
                'type'    => 'success',
                'message' => 'Violation updated successfully.'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'type'    => 'error',
                'message' => 'Failed to update violation.'
            ]);
        }

        exit;
    }



    public function deleteViolation()
    {
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            echo json_encode([
                'success' => false,
                'type'    => 'error',
                'message' => 'Invalid request method.'
            ]);
            exit;
        }

        $violation_id = $_POST['violation_id'] ?? null;

        if (!$violation_id) {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Violation ID is required.'
            ]);
            exit;
        }

        $result = $this->ViolationModel->deleteViolation($violation_id);

        if ($result) {
            echo json_encode([
                'success' => true,
                'type'    => 'success',
                'message' => 'Violation deleted successfully.'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'type'    => 'error',
                'message' => 'Failed to delete violation.'
            ]);
        }

        exit;
    }
}