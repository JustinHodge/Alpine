<?

class View
{
    protected $view;
    protected $data;

    public function __construct($template_name, $data = [])
    {
        $this->data = extract($data);
        $template_path = __DIR__ . '/' . $template_name . '.tpl';

        ob_start();
        include __DIR__ . '/SharedHeader.tpl';
        include $template_path;
        include __DIR__ . '/SharedFooter.tpl';

        $this->view = ob_get_clean();
    }

    public function getHTML()
    {
        return $this->view;
    }
}
