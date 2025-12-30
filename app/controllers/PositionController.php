<?php
session_start();

class PositionController
{
    private $requestMethod, $role;

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        session_start();
        $this->role = $_SESSION['user_role'] ?? false;
    }

    // public function StorePositions()
    // {
    //     $positionModel = new PositionModel();
    //     $Positions = $positionModel->getAllPositions();
    //     loadView("head");
    //     loadView("admin/positions", ['positions' => $Positions]);
    // }

    public function positions()
    {
        $data = [];
        $positionModel = new PositionModel();
        $positions = $positionModel->getAllPositions();
        $data['positions'] = $positions;
        loadView("head");
        loadView("admin/positions", $data);
    }

    public function addPosition()
    {
        if ($this->requestMethod === 'POST') {
            $varPosition = $_POST['varPosition'] ?? '';

            $positionModel = new PositionModel();
            $positionModel->addPosition($varPosition);

            header("Location: /admin/positions");
        }
    }


}