<?php


namespace Template;


class View
{
    /**
     * @var string Template to render
     */
    private $template;

    /**
     * @var array Data that is available for use within the template
     */
    private $data;

    private $templateDirectory = '';

    /**
     * View constructor.
     *
     * @param string $template
     * @param array $data
     */
    public function __construct($template, array $data = [])
    {

        $this->template = $template;
        $this->data = $data;

        $this->templateDirectory = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR;
    }

    private function templatePath()
    {
        return $this->templateDirectory . $this->template . '.php';
    }

    private function templateExists()
    {
        return file_exists($this->templatePath());
    }

    public function render()
    {
        if (!$this->templateExists()) {
            throw new \Exception('Template ' . $this->template . ' not found');
        }

        $template = file_get_contents($this->templatePath());

        require_once $this->templatePath();

    }
}
