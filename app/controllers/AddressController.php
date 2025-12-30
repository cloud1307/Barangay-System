<?php
session_start();

class AddressController
{
    private $requestMethod, $role;

    public function __construct()
    {
        $this->requestMethod = $_SERVER['REQUEST_METHOD'];
        session_start();
        $this->role = $_SESSION['user_role'] ?? false;
    }

    public function getCities($provCode)
    {
        $addressModel = new AddressModel();
        $cities = $addressModel->getCitiesByProvince($provCode);
        echo json_encode($cities);
    }

    public function getBarangays($cityMunCode)
    {
        $addressModel = new AddressModel();
        $barangays = $addressModel->getBarangaysByCity($cityMunCode);
        echo json_encode($barangays);
    }

    public function officials()
    {
        $addressModel = new AddressModel();
        $provinces = $addressModel->getAllProvince();
        loadView("head");
        loadView("admin/officials", ['provinces' => $provinces]);
    }

}