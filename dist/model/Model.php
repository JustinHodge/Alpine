<?

abstract class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

        if ($this->db->connect_error) {
            die($this->db->connect_error);
        }
    }
}
