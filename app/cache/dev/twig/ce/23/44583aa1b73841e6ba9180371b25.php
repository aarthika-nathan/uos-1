<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ce2344583aa1b73841e6ba9180371b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => $this->getContext($context, "token")), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  51 => 13,  34 => 5,  31 => 4,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  184 => 88,  181 => 87,  173 => 85,  166 => 82,  163 => 81,  161 => 80,  156 => 77,  150 => 75,  144 => 73,  139 => 71,  126 => 61,  112 => 52,  109 => 51,  101 => 45,  93 => 42,  41 => 8,  28 => 3,  205 => 71,  198 => 69,  182 => 64,  178 => 86,  176 => 61,  170 => 60,  160 => 59,  145 => 57,  132 => 47,  119 => 57,  115 => 44,  102 => 34,  98 => 32,  90 => 41,  81 => 24,  74 => 21,  204 => 94,  191 => 70,  185 => 68,  167 => 64,  164 => 63,  153 => 62,  147 => 58,  138 => 55,  134 => 54,  127 => 52,  122 => 51,  120 => 50,  110 => 42,  108 => 41,  104 => 35,  95 => 43,  91 => 35,  87 => 40,  84 => 25,  80 => 32,  52 => 14,  49 => 13,  35 => 6,  32 => 6,  27 => 3,  86 => 29,  83 => 28,  77 => 24,  75 => 23,  71 => 20,  68 => 30,  62 => 27,  58 => 25,  56 => 13,  50 => 22,  44 => 10,  38 => 7,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  245 => 96,  240 => 93,  234 => 89,  231 => 88,  228 => 87,  226 => 86,  221 => 83,  215 => 79,  212 => 78,  209 => 73,  207 => 95,  202 => 73,  196 => 92,  193 => 68,  190 => 89,  188 => 67,  183 => 63,  177 => 59,  174 => 67,  171 => 84,  169 => 56,  165 => 54,  162 => 53,  154 => 48,  151 => 47,  148 => 74,  143 => 56,  140 => 42,  130 => 53,  123 => 35,  116 => 31,  107 => 27,  103 => 25,  100 => 24,  97 => 23,  92 => 21,  88 => 20,  82 => 19,  79 => 35,  76 => 34,  73 => 33,  67 => 23,  61 => 12,  55 => 24,  47 => 11,  36 => 5,  30 => 3,  70 => 24,  63 => 16,  60 => 15,  54 => 12,  48 => 15,  46 => 12,  42 => 7,  39 => 6,  37 => 8,  33 => 4,  29 => 6,  22 => 1,);
    }
}
