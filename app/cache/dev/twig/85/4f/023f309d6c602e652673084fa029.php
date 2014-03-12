<?php

/* LoginLoginBundle:Default:occupyedit.html.twig */
class __TwigTemplate_854f023f309d6c602e652673084fa029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:home.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'sideMenu' => array($this, 'block_sideMenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle:Default:home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "
<div class=\"span10\">
    <h2>Edit Occupy Details </h2>
    <form class=\"form-search\" method=\"POST\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_occupyedit"), "html", null, true);
        echo "\" data-validate=\"parsley\">
        <input type=\"text\" name=\"studno\" class=\"input-medium search-query\" placeholder=\"Enter Student Number\">
        <button type=\"submit\" class=\"btn\">Search</button>
    </form>
</div><!--/row-->


      ";
    }

    // line 16
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 17
        echo "
<ul class=\"nav nav-list\">
    <li class=\"nav-header\"><b>Home</b></li>
    <li class=\"active\"><a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_home"), "html", null, true);
        echo "\">Welcome</a></li>
    <li><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_addstudent"), "html", null, true);
        echo "\">Add</a></li>
    <li><a href=\"#\">Link</a></li>
    <li><a href=\"#\">Link</a></li>
    <li class=\"nav-header\">Sidebar</li>
    <li><a href=\"#\">Link</a></li>
    <li><a href=\"#\">Link</a></li>
    <li><a href=\"#\">Link</a></li>
    <li><a href=\"#\">Link</a></li>
    <li><a href=\"#\">Link</a></li>
    <li><a href=\"#\">Link</a></li>
    <li class=\"nav-header\">Hall Hall Hall</li>
    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halladd"), "html", null, true);
        echo "\">Add Hall</a></li>
    <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halledit"), "html", null, true);
        echo "\">Edit Hall</a></li>
    <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halldelete"), "html", null, true);
        echo "\">Delete Hall</a></li>              
</ul>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:occupyedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  79 => 33,  75 => 32,  61 => 21,  57 => 20,  52 => 17,  49 => 16,  37 => 7,  32 => 4,  29 => 3,);
    }
}
