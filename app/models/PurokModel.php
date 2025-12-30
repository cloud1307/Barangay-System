<?php

class PurokModel extends BaseModel
{
    protected $tbl_purok = 'tbl_purok_zone';

    public function getPurok($purok_id)
    {
        $query = "SELECT * FROM {$this->tbl_purok} WHERE purok_id = ?";
        return $this->queryBuilder($query, ['i', $purok_id])->fetch_assoc();
    }

    public function getAllPuroks()
    {
        $query = "SELECT * FROM {$this->tbl_purok}";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
}