<?php

class StaffModel extends BaseModel
{
    protected $table = 'tbl_staffs';

    public function get($staff_id)
    {
        $query = "SELECT * FROM $this->table WHERE staff_id = ?";
        return $this->queryBuilder($query, ['i', $staff_id])->fetch_assoc();
    }

    public function getAll()
    {
        $query = "SELECT * FROM $this->table";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
}