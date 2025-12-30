<?php

class ViolationModel extends BaseModel
{
    protected $tbl_violation = 'tbl_refviolation';

    public function getViolations($violation_id)
    {
        $query = "SELECT * FROM {$this->tbl_violation} WHERE violation_id = ?";
        return $this->queryBuilder($query, ['i', $violation_id])->fetch_assoc();
    }

    public function getAllViolations()
    {
        $query = "SELECT * FROM {$this->tbl_violation}";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
}