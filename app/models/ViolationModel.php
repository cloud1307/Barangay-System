<?php

class ViolationModel extends BaseModel
{
    protected $tbl_violation = 'tbl_refviolation';

    public function getAllViolations()
    {
        $query = "SELECT * FROM {$this->tbl_violation}";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);

    }

    public function createViolation($data)
    {
        $violation_name = mb_strtoupper(trim($data['violation_name'] ?? ''), 'UTF-8');
        if ($violation_name === '') return false;

        $query = "INSERT INTO {$this->tbl_violation} (varViolation) VALUES (?)";
        $params = ["s", $violation_name];
        $result = $this->queryBuilder($query, $params);

        return $result ? $this->db->insert_id : false;
    }

    public function isDuplicateViolation($violation_name)
    {
        $query = "SELECT COUNT(*) as count FROM {$this->tbl_violation} WHERE varViolation = ? LIMIT 1";
        $params = ["s", $violation_name];
        $result = $this->queryBuilder($query, $params)->fetch_assoc();
        return $result['count'] > 0;
    }

    public function editViolation($violation_id, $violation_name)
    {       
        $query = "UPDATE {$this->tbl_violation} SET varViolation = ? WHERE violation_id = ?";
        $params = ["si", $violation_name, $violation_id];
        return $this->queryBuilder($query, $params);
    }

    public function deleteViolation($violation_id)
    {
        $query = "DELETE FROM {$this->tbl_violation} WHERE violation_id = ?";
        $params = ["i", $violation_id];
        return $this->queryBuilder($query, $params);
    }
}