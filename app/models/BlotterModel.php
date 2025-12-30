<?php

class BlotterModel extends BaseModel
{
    protected $tbl_blotter = 'tbl_blotter';

    public function getBlotter($blotter_id)
    {
        $query = "SELECT * FROM $this->tbl_blotter WHERE blotter_id = ?";
        return $this->queryBuilder($query, ['i', $blotter_id])->fetch_assoc();
    }

    public function getAllBlotters()
    {
        $query = "SELECT * FROM $this->tbl_blotter";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }
}