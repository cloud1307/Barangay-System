<?php
class UserModel extends BaseModel
{
    protected $table = 'tbl_users';


    public function get($id)
    {
        $query = "SELECT * FROM $this->table WHERE user_id = ?";
        $result = $this->db->query($query);
        return $result->fetch_assoc();
    }

    public function getAll()
    {
        $query = "SELECT * FROM $this->table";
        $result = $this->db->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function check($user_email)
    {
        $query = "SELECT * FROM $this->table WHERE user_email = ?";
        $params = ["s", $user_email];
        $result = $this->queryBuilder($query, $params);
        return $result->fetch_assoc();
    }

    public function create($data)
    {
        extract($data);
        $user_password = password_hash($user_password, PASSWORD_DEFAULT);
        $query = "INSERT INTO $this->table (user_username, user_password, user_role) VALUES (?, ?, ?)";
        $params = ["sss", $user_username, $user_password, $user_role];
        $result = $this->queryBuilder($query, $params);
        return $result;
    }

    public function edit($data)
    {
        extract($data);
        if ($user_password != '') {
            $password = ", user_password = ?";
            $user_password = password_hash($user_password, PASSWORD_DEFAULT);
            $params = ["ssi", $user_email, $user_password, $user_id];
        } else {
            $password = "";
            $params = ["si", $user_email, $user_id];
        }
        $query = "UPDATE $this->table SET user_username = ?$password WHERE user_id = ?";
        $result = $this->queryBuilder($query, $params);
        return $result;
    }

    public function delete($user_id)
    {
        $query = "DELETE FROM $this->table WHERE user_id = ?";
        $params = ["i", $user_id];
        $result = $this->queryBuilder($query, $params);
        return $result;
    }
}