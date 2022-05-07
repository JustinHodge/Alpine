<?

abstract class Controller
{
    protected $db;
    protected $output;

    public function __construct()
    {
        $this->db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);

        if ($this->db->connect_error) {
            die($this->db->connect_error);
        }
    }

    public function getOutput()
    {
        return $this->output;
    }
}
