<?php

/* LoginLoginBundle:Default:login.html.twig */
class __TwigTemplate_51255e4df6854a01d6df9bf23ed88d4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LoginLoginBundle:Default:index.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LoginLoginBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<style type=\"text/css\">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type=\"text\"],
        .form-signin input[type=\"password\"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }

    </style>
";
    }

    // line 37
    public function block_container($context, array $blocks = array())
    {
        // line 38
        echo "    <div class=\"container\">

        <form class=\"form-signin\" method =\"POST\" action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_homepage"), "html", null, true);
        echo "\" data-validate=\"parsley\">
            <h2 class=\"form-signin-heading\">Please sign in</h2>
            <input type=\"text\" id=\"username\" class=\"input-block-level\" name=\"username\" placeholder=\"Email address\" data-trigger=\"change\" data-required=\"true\" data-type=\"email\">
            <input type=\"password\" class=\"input-block-level\" name=\"password\" placeholder=\"Password\" data-trigger=\"change\" data-required=\"true\">
            <label class=\"checkbox\">
                <input type=\"checkbox\" name=\"remember\" value=\"remember-me\"> Remember me
            </label>
            <button class=\"btn btn-large btn-primary\" type=\"submit\">Sign in</button>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_signup"), "html", null, true);
        echo "\" >Sign Up</a>
        </form>

    </div> 
    ";
        // line 52
        if (array_key_exists("name", $context)) {
            // line 53
            echo "    <div class=\"alert-info fade in\">
        <strong>";
            // line 54
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "</strong>
    </div>
    ";
        }
        // line 57
        echo "    ";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 57,  99 => 54,  96 => 53,  94 => 52,  87 => 48,  76 => 40,  72 => 38,  69 => 37,  32 => 3,  29 => 2,);
    }
}
