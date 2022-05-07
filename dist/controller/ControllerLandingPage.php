<?

class ControllerLandingPage extends Controller
{
    public function __construct()
    {
        $view = new View('ViewLandingPage');
        $this->output = $view->getHTML();
    }
}
