<?php

class PurokModel extends BaseModel
{
    protected $tbl_purok = 'tbl_purok_zone';
    
    public function getAllPuroks()
    {
        $query = "SELECT * FROM {$this->tbl_purok}";
        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }

    public function createPurok($data)
    {
        $purok_zone = trim($data['purok_zone'] ?? '');
        if ($purok_zone === '') return false;

        $query = "INSERT INTO {$this->tbl_purok} (purok_zone, intBrgyID) VALUES (?, '10468')";
        $params = ["s", $purok_zone];
        $result = $this->queryBuilder($query, $params);

        return $result ? $this->db->insert_id : false;
    }

    public function isDuplicatePurok($purok_zone)
    {
        $query = "SELECT COUNT(*) as count FROM {$this->tbl_purok} WHERE purok_zone = ? LIMIT 1";
        $params = ["s", $purok_zone];
        $result = $this->queryBuilder($query, $params)->fetch_assoc();
        return $result['count'] > 0;
    }

    public function editPurok($purok_id, $purok_zone)
    {       
        $query = "UPDATE {$this->tbl_purok} SET purok_zone = ? WHERE purok_id = ?";
        $params = ["si", $purok_zone, $purok_id];
        return $this->queryBuilder($query, $params);
    }

    public function deletePurok($purok_id)
    {
        $query = "DELETE FROM {$this->tbl_purok} WHERE purok_id = ?";
        $params = ["i", $purok_id];
        return $this->queryBuilder($query, $params);
    }

}