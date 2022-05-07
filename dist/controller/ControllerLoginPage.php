<?

class ControllerLoginPage extends Controller
{
    public function __construct()
    {
        $view = new View('ViewLoginPage');
        $this->output = $view->getHTML();
    }
}
