<?php

/* LoginLoginBundle:Default:halladd.html.twig */
class __TwigTemplate_7877b55236f6ecfc69052c2c71ec6e62 extends Twig_Template
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
            <div class=\"containerHome\" >
    <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halladd"), "html", null, true);
        echo "\" data-validate=\"parsley\">
         <h2>Add hall details</h2>
        <label>Hall name</label>
        <input type=\"text\" id=\"username\" name=\"hallname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
         <label>Capacity </label>
        <input type=\"text\" id=\"usernameRe\" name=\"capacity\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\" data-equalto=\"#username\">
        <label>Gender</label>
        <input type=\"text\" name=\"gender\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
        
        <div>
            <button class=\"btn btn-primary\" type=\"submit\" >Add details</button>
        </div>
        
        ";
    }

    // line 22
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 23
        echo "
<ul class=\"nav nav-list\">
                <li class=\"nav-header\"><b>Home</b></li>
              <li class=\"active\"><a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_home"), "html", null, true);
        echo "\">Welcome</a></li>
              <li><a href=\"";
        // line 27
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
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halladd"), "html", null, true);
        echo "\">Add Hall</a></li>
              <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halledit"), "html", null, true);
        echo "\">Edit Hall</a></li>
              <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halldelete"), "html", null, true);
        echo "\">Delete Hall</a></li>              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:halladd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 40,  85 => 39,  81 => 38,  67 => 27,  63 => 26,  58 => 23,  55 => 22,  37 => 7,  32 => 4,  29 => 3,);
    }
}
