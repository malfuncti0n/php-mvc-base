<?php

/* user/home.html */
class __TwigTemplate_82af51d6de907aa149a1aa85c37643f14eb0922dda5496cc5b98cc5a5ff77f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("templates/base.html", "user/home.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " Home ";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        // line 6
        $this->loadTemplate("templates/partials/navigation.html", "user/home.html", 6)->display($context);
    }

    // line 9
    public function block_container($context, array $blocks = array())
    {
        // line 10
        echo "<h1>home</h1>
test
";
    }

    public function getTemplateName()
    {
        return "user/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  43 => 9,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "templates/base.html" %}*/
/* */
/* {% block title %} Home {% endblock %}*/
/* */
/* {% block header %}*/
/* {% include 'templates/partials/navigation.html' %}*/
/* {% endblock %}*/
/* */
/* {% block container %}*/
/* <h1>home</h1>*/
/* test*/
/* {% endblock %}*/
