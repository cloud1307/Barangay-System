<?php

class AddressModel extends BaseModel
{
    protected $tbl_barangay = 'tbl_refbarangay';
    protected $tbl_city = 'tbl_refcitymun';
    protected $tbl_province = 'tbl_refprovince';

 public function getAllProvince(){
        $provinces = []; // ✅ Initialize
        $query = "SELECT varProvCode, txtProvDesc FROM $this->tbl_province ORDER BY txtProvDesc ASC";
        $result = $this->db->query($query);
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $provinces[] = $row; // ✅ Collect results
            }
                return $provinces;
        }
        return $provinces;
    }

    public function getCitiesByProvince($provCode)
    {
        $query = "SELECT citymunCode, txtCityMunDesc FROM $this->tbl_city WHERE varProvCode = ? ORDER BY txtCityMunDesc ASC";
        return $this->queryBuilder($query, ['s', $provCode])->fetch_all(MYSQLI_ASSOC);
    }
    public function getBarangaysByCity($cityMunCode)
    {
        $query = "SELECT intBrgyID, txtBrgyDesc FROM $this->tbl_barangay WHERE varCitymunCode = ? ORDER BY txtBrgyDesc ASC";
        return $this->queryBuilder($query, ['s', $cityMunCode])->fetch_all(MYSQLI_ASSOC);
    }

}