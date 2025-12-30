<?php
session_start();

class AdminController
{
    private $requestMethod, $role, $userModel, $rateLimitModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->rateLimitModel = new RateLimitModel();
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->rateLimitModel->checkRateLimit($_SERVER['REMOTE_ADDR']);
        $this->role = $_SESSION['user_role'];

        if($this->role !== 'admin') {
            header("Location: /logout");
        }
    }

    public function index()
    {
        loadView("head");
        loadView("admin/home");
    }

    public function accounts()
    {
        loadView("head");
        loadView("admin/accounts");
    }

    public function officials()
    {
        loadView("head");
        loadView("admin/officials");
    }


    public function positions()
    {
        $data = [];
        $positionModel = new PositionModel();
        $positions = $positionModel->getAllPositions();
        $data['positions'] = $positions;
        loadView("head");
        loadView("admin/positions", $data);
    }

    public function puroks()
    {
        $data = [];
        $purokModel = new PurokModel();
        $puroks = $purokModel->getAllPuroks();
        $data['Puroks'] = $puroks;
        loadView("head");
        loadView("admin/purok", $data);
    }

    public function residents()
    {
        loadView("head");
        loadView("admin/residents");
    }
    

    public function households()
    {
        loadView("head");
        loadView("admin/households");
    }

    public function permits()
    {
        loadView("head");
        loadView("admin/permits");
    }

    public function clearances()
    {
        loadView("head");
        loadView("admin/clearances");
    }

    public function blotters()
    {
        loadView("head");
        loadView("admin/blotters");
    }

    public function records()
    {
        loadView("head");
        loadView("admin/records");
    }

    public function archives()
    {
        loadView("head");
        loadView("admin/archives");
    }

    public function reports()
    {
        loadView("head");
        loadView("admin/reports");
    }
    public function settings()
    {
        loadView("head");
        loadView("admin/settings");
    }

    public function violations()
    {
        loadView("head");
        loadView("admin/blotters/violations");
    }


}
