<?php

/* default/view/index.html.twig */
class __TwigTemplate_bd8adca0cbc23a5da043b756f71a6a0d6ce0978d3047e49ab155b496e224dc01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 2
        echo "<h1>hello world!</h1>
";
    }

    public function getTemplateName()
    {
        return "default/view/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
