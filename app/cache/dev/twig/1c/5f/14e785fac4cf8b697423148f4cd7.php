<?php

/* LoginLoginBundle:Default:occupyeditf.html.twig */
class __TwigTemplate_1c5f14e785fac4cf8b697423148f4cd7 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_occupyeditf"), "html", null, true);
        echo "\" data-validate=\"parsley\">
        <h2>Change Room Accomodation</h2>
        <label>Student Number</label>
        <input type=\"text\" name=\"studentno\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "studno"), "html", null, true);
        echo "\" disabled>
        <label>Hall Name</label>
        <input type=\"text\" name=\"hallname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-equalto=\"#username\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "hallname"), "html", null, true);
        echo "\">
        <label>Room Number</label>
        <input type=\"text\" name=\"roomno\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" data-equalto=\"#username\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "roomno"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"indnum\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getContext($context, "indnum"), "html", null, true);
        echo "\">
        <variable name=\"inddnum\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getContext($context, "indnum"), "html", null, true);
        echo "\">
        <div>
            <button class=\"btn btn-primary\" type=\"submit\">Change</button>
        </div>

    </form>
</div>
      </div><!--/row-->
      
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
        return "LoginLoginBundle:Default:occupyeditf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 45,  105 => 44,  101 => 43,  87 => 32,  83 => 31,  78 => 28,  75 => 27,  61 => 16,  57 => 15,  53 => 14,  48 => 12,  43 => 10,  37 => 7,  32 => 4,  29 => 3,);
    }
}
