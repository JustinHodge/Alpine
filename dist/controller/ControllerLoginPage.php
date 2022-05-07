<?

class ControllerLoginPage extends Controller
{
    protected $error;
    protected $user;

    public function __construct()
    {
        $view = new View('ViewLoginPage');
        $this->output = $view->getHTML();
    }

    public function login()
    {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            return;
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $model_alpine_users = new ModelAlpineUsers;
        $this->user = $model_alpine_users->getUser($email);
        if (!empty($this->user) && password_verify($password, $this->user['user_password'])) {
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['name'] = $this->user['firstname'] . ' ' . $this->user['lastname'];
            $_SESSION['id'] = $this->user['user_id'];
            $_SESSION['access_level'] = $this->user['user_access_level'];
        }
    }

    public function register()
    {
        echo "register";
    }
}
