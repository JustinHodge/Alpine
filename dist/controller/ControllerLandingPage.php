<?

class ControllerLandingPage extends Controller
{
    private $all_users;
    protected $user_access_level;

    public function __construct($user_access_level)
    {
        $data['is_admin'] = $user_access_level >= MIN_ADMIN_LEVEL;
        $model_alpine_users = new ModelAlpineUsers;
        $this->all_users = $model_alpine_users->getAllUsers();
        $view = new View('ViewLandingPage', $data);
        $this->output = $view->getHTML();
    }
}
