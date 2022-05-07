<?

class ControllerLandingPage extends Controller
{
    private $all_users;
    protected $user_access_level;

    public function __construct($user_access_level)
    {
        $is_admin = $user_access_level >= MIN_ADMIN_LEVEL;
        $model_alpine_users = new ModelAlpineUsers;
        $this->all_users = $model_alpine_users->getAllUsers();
        $this->current_user = $model_alpine_users->getUser($_SESSION['email']);
        print_r($this->current_user);
        print_r($_SESSION);
        $data = [
            'is_admin' => $is_admin,
            'all_users' => $this->all_users,
            'current_user' => $this->current_user
        ];
        $view = new View('ViewLandingPage', $data);
        $this->output = $view->getHTML();
    }
}
