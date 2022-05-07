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

        return $query->fetch_all(MYSQLI_ASSOC);
    }

    public function getUser($email)
    {
        $sql = "
            SELECT * FROM `alpine_users`
            WHERE `user_email`='{$email}'
        ";

        $query = $this->db->query($sql);

        if ($query) {
            return $query->fetch_all(MYSQLI_ASSOC)[0];
        }
    }
}
