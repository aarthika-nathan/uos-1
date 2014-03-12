<?php

/* LoginLoginBundle:Default:occupyAdd.html.twig */
class __TwigTemplate_d6f34a6bc84296130c2934fe93cc637a extends Twig_Template
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
        echo "                    <div class=\"span10\">
                        <div class=\"containerHome\" >
                            <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_occupyAdd"), "html", null, true);
        echo "\" data-validate=\"parsley\">
                                <h2>Student Room Accomodation </h2>
                                <label>Hall Name</label>
                                <input type=\"text\" id=\"hallnamee\" name=\"hallname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
                                <label>Room Number</label>
                                <select name=\"type\">
                                <input type=\"text\" id=\"roomno\" name=\"roomno\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
                                </select>
                                <label>Date</label>
                                <input type=\"datetime-local\" name=\"date\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
                                <div>
                                    <button class=\"btn btn-primary\" type=\"submit\" >Add New Room</button>
                                </div>

                            </form>
                        </div>
                    </div><!--/row-->
<!-- Commit aakita lol-->
 
        ";
    }

    // line 27
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 28
        echo "
<ul class=\"nav nav-list\">
                <li class=\"nav-header\"><b>Home</b></li>
              <li class=\"active\"><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_home"), "html", null, true);
        echo "\">Welcome</a></li>
              <li><a href=\"";
        // line 32
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
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halladd"), "html", null, true);
        echo "\">Add Hall</a></li>
              <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halledit"), "html", null, true);
        echo "\">Edit Hall</a></li>
              <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halldelete"), "html", null, true);
        echo "\">Delete Hall</a></li>              
            </ul>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:occupyAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 45,  90 => 44,  86 => 43,  72 => 32,  68 => 31,  63 => 28,  60 => 27,  36 => 6,  32 => 4,  29 => 3,);
    }
}
