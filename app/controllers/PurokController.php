<?php
session_start();

class PurokController
{
    private $requestMethod, $role, $PurokModel;

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];        
        $this->role = $_SESSION['user_role'] ?? false;
        $this->PurokModel = new PurokModel();
    }

    public function puroks()
    {        
        $puroks = $this->PurokModel->getAllPuroks();        
        loadView("head");
        loadView("admin/puroks", ['puroks' => $puroks]);
    }

    public function addPurok()
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

        $purok_zone = trim($_POST['purok_zone'] ?? '');

        if ($purok_zone === '') {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Purok/Zone is required.'
            ]);
            exit;
        }

        if ($this->PurokModel->isDuplicatePurok($purok_zone)) {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Purok/Zone already exists.'
            ]);
            exit;
        }

        $insertId = $this->PurokModel->createPurok([
            'purok_zone' => $purok_zone
        ]);

        if ($insertId) {
            echo json_encode([
                'success' => true,
                'type'    => 'success',
                'message' => 'Purok added successfully.'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'type'    => 'error',
                'message' => 'Failed to add Purok.'
            ]);
        }
        exit;
    }



    // Edit Purok
   public function editPurok()
    {
        header('Content-Type: application/json');

        $purok_id   = $_POST['purok_id'] ?? null;
        $purok_zone = strtoupper(trim($_POST['purok_zone'] ?? ''));

        if (!$purok_id || $purok_zone === '') {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Purok/Zone is required.'
            ]);
            exit;
        }

        // Prevent duplicate (exclude current ID)
        if ($this->PurokModel->isDuplicatePurok($purok_zone, $purok_id)) {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Purok/Zone already exists.'
            ]);
            exit;
        }

        $result = $this->PurokModel->editPurok($purok_id, $purok_zone);

        echo json_encode([
            'success' => (bool)$result,
            'type'    => $result ? 'success' : 'error',
            'message' => $result
                ? 'Purok/Zone updated successfully.'
                : 'Failed to update Purok/Zone.'
        ]);
        exit;
    }




    public function deletePurok()
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

        $purok_id = $_POST['purok_id'] ?? null;

        if (!$purok_id) {
            echo json_encode([
                'success' => false,
                'type'    => 'warning',
                'message' => 'Purok ID is required.'
            ]);
            exit;
        }

        $result = $this->PurokModel->deletePurok($purok_id);

        if ($result) {
            echo json_encode([
                'success' => true,
                'type'    => 'success',
                'message' => 'Purok deleted successfully.'
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'type'    => 'error',
                'message' => 'Failed to delete Purok.'
            ]);
        }

        exit;
    }
}