<?php

/* LoginLoginBundle:Default:roomeditf.html.twig */
class __TwigTemplate_fd44d529541eb5a75f58657d10c20450 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_roomeditf"), "html", null, true);
        echo "\" data-validate=\"parsley\">
            <h2>Edit Room details</h2>
            <label>Room number</label>
            <input type=\"text\" name=\"roomnum\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "roomno"), "html", null, true);
        echo ">
            <label>Hall name</label>
            <input type=\"text\" name=\"hallname\" class=\"input-xlarge\" data-trigger=\"chamge\" data-required=\"true\" value=";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "hallname"), "html", null, true);
        echo ">
            <label>Type</label>
            <select name=\"type\">
                <option value=";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo " selected></option>
                <option value=\"Double\">Double</option>

                <option value=\"Single\">Single</option>   

            </select>
            <label>cost</label>
            <input type=\"text\" name=\"cost\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" value=";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "cost"), "html", null, true);
        echo ">
            <input type=\"hidden\" name=\"indnum\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "indnum"), "html", null, true);
        echo "\">
            <variable name=\"inddnum\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "indnum"), "html", null, true);
        echo "\">
                <div>
                    <button class=\"btn btn-primary\" type=\"submit\" >Update details</button>
                </div>

        </form>
    </div>
</div><!--/row-->

      ";
    }

    // line 35
    public function block_sideMenu($context, array $blocks = array())
    {
        // line 36
        echo "
<ul class=\"nav nav-list\">
    <li class=\"nav-header\"><b>Home</b></li>
    <li class=\"active\"><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_home"), "html", null, true);
        echo "\">Welcome</a></li>
    <li><a href=\"";
        // line 40
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
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halladd"), "html", null, true);
        echo "\">Add Hall</a></li>
    <li><a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halledit"), "html", null, true);
        echo "\">Edit Hall</a></li>
    <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_halldelete"), "html", null, true);
        echo "\">Delete Hall</a></li>   
    <li class=\"nav-header\">Room </li>
    <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_roomadd"), "html", null, true);
        echo "\">Add Room</a></li>
    <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_roomedit"), "html", null, true);
        echo "\">Edit Room</a></li>
    <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_roomdelete"), "html", null, true);
        echo "\">Delete Room</a></li>                
</ul>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:roomeditf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 57,  129 => 56,  125 => 55,  120 => 53,  116 => 52,  112 => 51,  98 => 40,  94 => 39,  89 => 36,  86 => 35,  72 => 24,  68 => 23,  64 => 22,  54 => 15,  48 => 12,  43 => 10,  37 => 7,  32 => 4,  29 => 3,);
    }
}
