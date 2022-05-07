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

    public function addUser($user_data)
    {
        $sql = "
        INSERT INTO `alpine_users` (
            `user_firstname`,
            `user_lastname`,
            `user_email`,
            `user_password`,
            `user_access_level`
        ) VALUES (
            '{$user_data['firstname']}',
            '{$user_data['lastname']}',
            '{$user_data['email']}',
            '{$user_data['password']}',
            1
        )";

        $query = $this->db->query($sql);

        return $query;
    }
}
