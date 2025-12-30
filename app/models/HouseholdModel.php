<?php

class HouseholdModel extends BaseModel
{
    protected $tbl_household = 'tbl_resident_household';
    protected $tbl_resident = 'tbl_resident_information';
    protected $tbl_purok = 'tbl_purok_zone';

    public function getHousehold($household_id)
    {
        $query = "SELECT * FROM $this->tbl_household WHERE household_id = ?";
        return $this->queryBuilder($query, ['i', $household_id])->fetch_assoc();
    }
    
    public function getAllHouseholds(){

        $query = "SELECT a.*, b.*, c.* FROM {$this->tbl_household} a 
        INNER JOIN {$this->tbl_resident} b ON a.head_of_family = b.resident_id
        INNER JOIN {$this->tbl_purok} c ON a.purok_id = c.purok_id";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);     
    }

    public function getResidents($residents_id)
    {
        $query = "SELECT * FROM $this->tbl_resident WHERE residents_id = ?";
        return $this->queryBuilder($query, ['i', $residents_id])->fetch_assoc();
    }

    public function getAllResidents()
    {
        $query = "SELECT * FROM {$this->tbl_resident}";
        // INNER JOIN {$this->tbl_purok} b ON a.purok_id = b.purok_id";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
        
    }

    
}