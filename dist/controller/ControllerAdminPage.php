<?

class ControllerAdminPage extends Controller
{
    private $all_users;

    public function __construct($user_access_level)
    {
        if ($user_access_level < MIN_ADMIN_LEVEL) {
            $this->output = 'ERROR: Permission denied';
            return;
        }

        $model_alpine_users = new ModelAlpineUsers;
        $this->all_users = $model_alpine_users->getAllUsers();
        $view = new View('ViewAdminPage');
        $this->output = $view->getHTML();
    }
}
