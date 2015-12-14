<?php

namespace View;

class View extends \Smarty
{
    /**
     * @var array
     */
    private $templates;

    /**
     * @param string $template
     */
    public function addTemplate($template)
    {
        $this->templates[] = $template;
    }

    /**
     * render templates
     */
    public function render()
    {
        foreach ($this->templates as $template)
        {
            $this->display(dirname(__DIR__) . '/Modules/' . $template . 'View.tpl');
        }
        return;
    }
}