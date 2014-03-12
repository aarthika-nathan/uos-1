<?php

/* LoginLoginBundle:Default:addstudent.html.twig */
class __TwigTemplate_908e1c4a809c7397ca1e22d4b684e6c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <title>Bootstrap, from Twitter</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Le styles -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <style type=\"text/css\">
                body {
                    padding-top: 60px;
                    padding-bottom: 40px;
                }
                .sidebar-nav {
                    padding: 9px 0;
                }

                @media (max-width: 980px) {
                    /* Enable use of floated navbar text */
                    .navbar-text.pull-right {
                        float: none;
                        padding-left: 5px;
                        padding-right: 5px;
                    }
                }
            </style>
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
            <!--[if lt IE 9]>
              <script src=\"../assets/js/html5shiv.js\"></script>
            <![endif]-->

            <!-- Fav and touch icons -->
            <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
            <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
            <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
            <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
            <link rel=\"shortcut icon\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/ico/favicon.png"), "html", null, true);
        echo "\">
        </head>

        <body>

            <div class=\"navbar navbar-inverse navbar-fixed-top\">
                <div class=\"navbar-inner\">
                    <div class=\"container-fluid\">
                        <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"brand\" href=\"#\">Project name</a>
                        <div class=\"nav-collapse collapse\">
                            <p class=\"navbar-text pull-right\">
                                Logged in as <a href=\"#\" class=\"navbar-link\">Username</a>
                            </p>
                            <ul class=\"nav\">
                                <li class=\"active\"><a href=\"#\">Home</a></li>
                                <li><a href=\"#about\">About</a></li>
                                <li><a href=\"#contact\">Contact</a></li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>

            <div class=\"container-fluid\">
                <div class=\"row-fluid\">
                    <div class=\"span2\">
                        <div class=\"well sidebar-nav\">
                            <ul class=\"nav nav-list\">
                                <li class=\"nav-header\"><b>Home</b></li>
                                <li><a href=\"#\">Welcome</a></li>
                                <li class=\"active\"><a href=\"#\">Add</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li class=\"nav-header\">Sidebar</li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li class=\"nav-header\">Sidebar</li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                                <li><a href=\"#\">Link</a></li>
                            </ul>
                        </div><!--/.well -->
                    </div><!--/span-->
                    <div class=\"span10\">

                        <div class=\"containerHome\" >
                            <form id=\"form\" class=\"well\" method=\"POST\" action=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_login_addstudent"), "html", null, true);
        echo "\" data-validate=\"parsley\">
                                <h2>Add New Student</h2>
                                <label>Student ID</label>
                                <input type=\"text\" id=\"studentno\" name=\"studentno\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" >
                                <label>First Name</label>
                                <input type=\"text\" id=\"firstname\" name=\"firstname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\" >
                                <label>Last Name</label>
                                <input type=\"text\" name=\"lastname\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
                                <label>Gender</label>
                                <select name=\"gender\">
                                    <option value=\"\" selected>(please select:)</option>
                                    <option value=\"Female\">Female</option>   
                                    <option value=\"Male\">Male</option>
                                </select>
                                <label>Department</label>
                                <input type=\"text\" name=\"dept\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
                                <label>Year</label>
                                <input type=\"text\" name=\"year\" class=\"input-xlarge\" data-trigger=\"change\" data-required=\"true\">
                                <div>
                                    <button class=\"btn btn-primary\" type=\"submit\" >Add Student</button>
                                </div>

                            </form>
                        </div>
                    </div><!--/row-->

                    <hr>

                    <footer>
                        <p>&copy; Augmented Software Solutions 2014</p>
                    </footer>

                </div><!--/.fluid-container-->

                <!-- Le javascript
                ================================================== -->
                <!-- Placed at the end of the document so the pages load faster -->
                <script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/jquery.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/loginlogin/js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>

        </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "LoginLoginBundle:Default:addstudent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 146,  222 => 145,  218 => 144,  214 => 143,  210 => 142,  206 => 141,  202 => 140,  198 => 139,  194 => 138,  190 => 137,  186 => 136,  182 => 135,  178 => 134,  138 => 97,  80 => 42,  76 => 41,  72 => 40,  68 => 39,  64 => 38,  53 => 30,  31 => 11,  19 => 1,);
    }
}
