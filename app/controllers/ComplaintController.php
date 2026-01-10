<?php
session_start();

class ComplaintController
{
    private $requestMethod, $role, $ComplaintModel;

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        $this->role = $_SESSION['user_role'] ?? false;
        $this->ComplaintModel = new ComplaintModel();
    }

    
}