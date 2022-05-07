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
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $this->user['firstname'] . ' ' . $this->user['lastname'];
            $_SESSION['id'] = $this->user['user_id'];
            $_SESSION['access_level'] = $this->user['user_access_level'];

            header('Location: /');
        }
    }

    public function register()
    {
        if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['firstname']) || empty($_POST['lastname'])) {
            return;
        }

        $_POST['password'] = password_hash($_POST['password'], null);
        $model_alpine_users = new ModelAlpineUsers;
        $userWasAdded = $model_alpine_users->addUser($_POST);

        if (!empty($userWasAdded)) {
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['name'] = $_POST['firstname'] . ' ' . $_POST['lastname'];
            $_SESSION['id'] = $_POST['user_id'];
            $_SESSION['access_level'] = 1;

            header('Location: /');
        }
    }
}
