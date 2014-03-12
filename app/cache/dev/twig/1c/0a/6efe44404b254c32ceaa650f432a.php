<?php

/* LoginLoginBundle:Default:home.html.twig */
class __TwigTemplate_1c0a6efe44404b254c32ceaa650f432a extends Twig_Template
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
        
        
        ";
    }

    // line 9
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 10
        echo "
<ul class=\"nav nav-list\">
                <li class=\"nav-header\"><b>Home</b></li>
              <li class=\"active\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_home"), "html", null, true);
        echo "\">Home</a></li>
              <li><a href=\"";
        // line 14
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
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halladd"), "html", null, true);
        echo "\">Add Hall</a></li>
              <li><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halledit"), "html", null, true);
        echo "\">Edit Hall</a></li>
              <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halldelete"), "html", null, true);
        echo "\">Delete Hall</a></li>              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 27,  69 => 26,  65 => 25,  51 => 14,  47 => 13,  42 => 10,  39 => 9,  83 => 34,  79 => 33,  75 => 32,  61 => 21,  57 => 20,  52 => 17,  49 => 16,  37 => 7,  32 => 4,  29 => 3,);
    }
}
