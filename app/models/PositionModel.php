<?php

class PositionModel extends BaseModel
{
    protected $tbl_positions = 'tbl_position';

    // public function getPositions($position_id)
    // {
    //     $query = "SELECT * FROM {$this->tbl_positions} WHERE position_id = ?";
    //     return $this->queryBuilder($query, ['i', $position_id])->fetch_assoc();
    // }

    public function getAllPositions()
    {
        $query = "SELECT * FROM {$this->tbl_positions} order by varPosition ASC";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function createPosition($data)
    {
        $position_name = mb_strtoupper(trim($data['position_name'] ?? ''), 'UTF-8');
        if ($position_name === '') return false;

        $query = "INSERT INTO {$this->tbl_positions} (varPosition) VALUES (?)";
        $params = ["s", $position_name];
        $result = $this->queryBuilder($query, $params);

        return $result ? $this->db->insert_id : false;
    }

    public function isDuplicatePosition($position_name)
    {
        $query = "SELECT COUNT(*) as count FROM {$this->tbl_positions} WHERE varPosition = ? LIMIT 1";
        $params = ["s", $position_name];
        $result = $this->queryBuilder($query, $params)->fetch_assoc();
        return $result['count'] > 0;
    }

    public function editPosition($position_id, $position_name)
    {       
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