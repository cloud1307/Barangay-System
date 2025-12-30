<?php

class EmployeeModel extends BaseModel
{
    protected $tbl_employee = 'tbl_employee';
    protected $tbl_user = 'tbl_users';
    protected $tbl_position = 'tbl_position';

    public function getEmployee($employee_id)
    {
        $query = "SELECT a.*,b.*, c.* FROM {$this->tbl_employee} a INNER JOIN {$this->tbl_user} b ON a.user_id = b.user_id
         INNER JOIN {$this->tbl_position} c ON a.position_id = c.position_id
         WHERE a.intEmployeeID = ?";
        return $this->queryBuilder($query, ['i', $employee_id])->fetch_assoc();
    }

    public function getAllEmployee()
    {
        $query = "SELECT a.*,b.*, c.* FROM {$this->tbl_employee} a 
        INNER JOIN {$this->tbl_user} b ON a.user_id = b.user_id
        INNER JOIN {$this->tbl_position} c ON a.position_id = c.position_id";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
}