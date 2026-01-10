<?php

class ComplaintsModel extends BaseModel
{
    protected $table = 'tbl_complaints';

    public function get($complaints_id)
    {
        $query = "SELECT * FROM $this->table WHERE complaints_id = ?";
        return $this->queryBuilder($query, ['i', $complaints_id])->fetch_assoc();
    }

    public function getAll()
    {
        $query = "SELECT * FROM $this->table";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
}