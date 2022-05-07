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
}
