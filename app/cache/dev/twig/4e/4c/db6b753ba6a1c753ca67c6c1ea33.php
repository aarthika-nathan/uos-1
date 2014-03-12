<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e4cdb6b753ba6a1c753ca67c6c1ea33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute($this->getContext($context, "collector"), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute($this->getContext($context, "collector"), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute($this->getContext($context, "collector"), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  83 => 28,  77 => 24,  75 => 23,  71 => 21,  68 => 20,  62 => 16,  58 => 14,  56 => 13,  50 => 10,  44 => 8,  38 => 5,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  254 => 101,  252 => 100,  247 => 97,  245 => 96,  240 => 93,  234 => 89,  231 => 88,  228 => 87,  226 => 86,  221 => 83,  215 => 79,  212 => 78,  209 => 77,  207 => 76,  202 => 73,  196 => 69,  193 => 68,  190 => 67,  188 => 66,  183 => 63,  177 => 59,  174 => 58,  171 => 57,  169 => 56,  165 => 54,  162 => 53,  154 => 48,  151 => 47,  148 => 46,  143 => 43,  140 => 42,  130 => 39,  123 => 35,  116 => 31,  107 => 27,  103 => 25,  100 => 24,  97 => 23,  92 => 21,  88 => 20,  82 => 19,  79 => 18,  76 => 17,  73 => 16,  67 => 14,  61 => 12,  55 => 9,  47 => 9,  36 => 5,  30 => 3,  70 => 15,  63 => 9,  60 => 8,  54 => 6,  48 => 15,  46 => 14,  42 => 7,  39 => 6,  37 => 8,  33 => 4,  29 => 6,  22 => 1,);
    }
}
