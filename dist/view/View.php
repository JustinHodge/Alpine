<?

class View
{
    protected $view;
    protected $data;

    public function __construct($template_name, $data = [])
    {
        $this->data = $data;
        $this->view = file_get_contents(__DIR__ . '/SharedHeader.tpl');

        $template_path = __DIR__ . '/' . $template_name . '.tpl';
        if (file_exists($template_path)) {
            $this->view .= file_get_contents($template_path);
        } else {
            $this->view .= "Page Not Found {$template_path}";
        }

        $this->view .= file_get_contents(__DIR__ . '/SharedFooter.tpl');
    }

    public function getHTML()
    {
        return $this->view;
    }
}
