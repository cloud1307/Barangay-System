<?php

class PositionModel extends BaseModel
{
    protected $tbl_positions = 'tbl_position';

    public function getPositions($position_id)
    {
        $query = "SELECT * FROM {$this->tbl_positions} WHERE position_id = ?";
        return $this->queryBuilder($query, ['i', $position_id])->fetch_assoc();
    }

    public function getAllPositions()
    {
        $query = "SELECT * FROM {$this->tbl_positions}";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function createPosition($data)
    {
        extract($data);
        $query = "INSERT INTO {$this->tbl_positions} (varPosition) VALUES (?)";
        $params = ["s", $position_name];
        return $this->queryBuilder($query, $params);
    }

    public function editPosition($data)
    {
        extract($data);
        $query = "UPDATE {$this->tbl_positions} SET varPosition = ? WHERE position_id = ?";
        $params = ["si", $position_name, $position_id];
        return $this->queryBuilder($query, $params);
    }

    public function deletePosition($position_id)
    {
        $query = "DELETE FROM {$this->tbl_positions} WHERE position_id = ?";
        $params = ["i", $position_id];
        return $this->queryBuilder($query, $params);
    }
}