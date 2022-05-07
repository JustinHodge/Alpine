<?

class ModelAlpineUsers extends Model
{
    public function getAllUsers()
    {
        $sql = "
            SELECT *
            FROM `alpine_users`
            WHERE 1
        ";

        $query = $this->db->query($sql);

        return $query->fetch_all();
    }

    public function getUser($email, $hashed_password)
    {
        $sql = "
            SELECT * FROM `alpine_users`
            WHERE email={$email}
            AND password={$hashed_password}
        ";

        $query = $this->db->query($sql);

        return $query->fetch_all();
    }
}
