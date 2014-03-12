<?php

/* LoginLoginBundle:Default:halladd.html.twig */
class __TwigTemplate_573334f8ab5f505e1125fe8ec24c90ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:home.html.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
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
        return array (  36 => 7,  31 => 4,  28 => 3,);
    }
}
