<?php

/* LoginLoginBundle:Default:roomedit.html.twig */
class __TwigTemplate_a34fcb2a5367c4c50652514ec1e62e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:welcome.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'sideMenu' => array($this, 'block_sideMenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle:Default:welcome.html.twig";
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
    <h2>Edit room details </h2>
    <form class=\"form-search\" method=\"POST\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_roomedit"), "html", null, true);
        echo "\" data-validate=\"parsley\">
        <input type=\"text\" name = 'roomno' class=\"input-medium search-query\" placeholder=\"Enter room number\"><br><br>
        <input type=\"text\" name ='hallname' class=\"input-medium search-query\" placeholder=\"Enter hall name\"><br><br>
        <button type=\"submit\" class=\"btn\">Search</button>
    </form>
</div><!--/row-->
      ";
    }

    // line 15
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 16
        echo "
<ul class=\"nav nav-list\">
    <li class=\"nav-header\"><b>Home</b></li>
    <li class=\"active\"><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_home"), "html", null, true);
        echo "\">Welcome</a></li>
    <li><a href=\"";
        // line 20
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
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halladd"), "html", null, true);
        echo "\">Add Hall</a></li>
    <li><a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halledit"), "html", null, true);
        echo "\">Edit Hall</a></li>
    <li><a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halldelete"), "html", null, true);
        echo "\">Delete Hall</a></li>              
</ul>

";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:roomedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 33,  78 => 32,  74 => 31,  60 => 20,  56 => 19,  51 => 16,  48 => 15,  37 => 7,  32 => 4,  29 => 3,);
    }
}
