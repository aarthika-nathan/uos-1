<?php

/* SecurityBundle:Collector:security.html.twig */
class __TwigTemplate_54466fcf639c2c8a1ea798eb639f6548 extends Twig_Template
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
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "collector"), "user")) {
            // line 5
            echo "        ";
            $context["color_code"] = ((($this->getAttribute($this->getContext($context, "collector"), "enabled") && $this->getAttribute($this->getContext($context, "collector"), "authenticated"))) ? ("green") : ("yellow"));
            // line 6
            echo "        ";
            $context["authentication_color_code"] = ((($this->getAttribute($this->getContext($context, "collector"), "enabled") && $this->getAttribute($this->getContext($context, "collector"), "authenticated"))) ? ("green") : ("red"));
            // line 7
            echo "        ";
            $context["authentication_color_text"] = ((($this->getAttribute($this->getContext($context, "collector"), "enabled") && $this->getAttribute($this->getContext($context, "collector"), "authenticated"))) ? ("Yes") : ("No"));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["color_code"] = (($this->getAttribute($this->getContext($context, "collector"), "enabled")) ? ("red") : ("black"));
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        ";
        if ($this->getAttribute($this->getContext($context, "collector"), "user")) {
            // line 13
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Logged in as</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "color_code"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "user"), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Authenticated</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "authentication_color_code"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "authentication_color_text"), "html", null, true);
            echo "</span>
            </div>
        ";
        } elseif ($this->getAttribute($this->getContext($context, "collector"), "enabled")) {
            // line 22
            echo "            You are not authenticated.
        ";
        } else {
            // line 24
            echo "            The security is disabled.
        ";
        }
        // line 26
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <img width=\"24\" height=\"28\" alt=\"Security\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAcCAYAAAB75n/uAAAC70lEQVR42u2V3UtTYRzHu+mFwCwK+gO6CEryPlg7yiYx50vDqUwjFIZDSYUk2ZTmCysHvg9ZVggOQZiRScsR4VwXTjEwdKZWk8o6gd5UOt0mbev7g/PAkLONIOkiBx+25/v89vuc85zn2Q5Fo9F95UDwnwhS5HK5TyqVRv8m1JN6k+AiC+fn54cwbgFNIrTQ/J9IqDcJJDGBHsgDgYBSq9W6ysvLPf39/SSUUU7zsQ1yc3MjmN90OBzfRkZG1umzQqGIxPSTkIBjgdDkaGNjoza2kcFgUCE/QvMsq6io2PV6vQu1tbV8Xl7etkql2qqvr/+MbDE/Pz8s9OP2Cjhwwmw29+4R3Kec1WZnZ4fn5uamc3Jyttra2qbH8ero6JgdHh5+CvFHq9X6JZHgzODgoCVW0NPTY0N+ltU2Nzdv4GqXsYSrPp+vDw80aLFYxru6uhyQ/rDb7a8TCVJDodB1jUazTVlxcXGQ5/mbyE+z2u7u7veY38BVT3Z2djopm5qa6isrK/tQWVn5qb29fSGR4DC4PDAwMEsZHuArjGnyGKutq6v7ajQaF6urq9/MzMz0QuSemJiwQDwGkR0POhhXgILjNTU1TaWlpTxlOp1uyWQyaUjMajMzM8Nut/tJQUHBOpZppbCwkM/KytrBznuL9xDVxBMo8KXHYnu6qKjIivmrbIy67x6Px4Yd58W672ApfzY0NCyNjo7OZmRkiAv8fr+O47iwmABXtoXaG3uykF6vX7bZbF6cgZWqqiqezYkKcNtmjO+CF2AyhufgjsvlMiU7vXEF+4C4ALf9CwdrlVAqlcFkTdRqdQSHLUDgBEeSCrArAsiGwENs0XfJBE6ncxm1D8Aj/B6tigkkJSUlmxSwLYhMDeRsyyUCd+lHrWxtbe2aTCbbZTn1ZD92F0Cr8GBfgnsgDZwDt8EzMBmHMXBLqD0PDMAh9Gql3iRIESQSIAXp4CRIBZeEjIvDFZAm1J4C6UK9ROiZcvCn/+8FvwHtDdJEaRY+oQAAAABJRU5ErkJggg==\" />
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "color_code"), "html", null, true);
        echo "\"></span>
        ";
        // line 30
        if ($this->getAttribute($this->getContext($context, "collector"), "user")) {
            echo "<div class=\"sf-toolbar-status sf-toolbar-info-piece-additional\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "user"), "html", null, true);
            echo "</div>";
        }
        // line 31
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 32
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => $this->getContext($context, "profiler_url"))));
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
        // line 36
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/security.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Security</strong>
</span>
";
    }

    // line 42
    public function block_panel($context, array $blocks = array())
    {
        // line 43
        echo "    <h2>Security</h2>
    ";
        // line 44
        if ($this->getAttribute($this->getContext($context, "collector"), "user")) {
            // line 45
            echo "        <table>
            <tr>
                <th>Username</th>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "user"), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Authenticated?</th>
                <td>
                    ";
            // line 53
            if ($this->getAttribute($this->getContext($context, "collector"), "authenticated")) {
                // line 54
                echo "                        yes
                    ";
            } else {
                // line 56
                echo "                        no ";
                if ((!twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "collector"), "roles")))) {
                    echo "<em>(probably because the user has no roles)</em>";
                }
                // line 57
                echo "                    ";
            }
            // line 58
            echo "                </td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->encode($this->getAttribute($this->getContext($context, "collector"), "roles")), "html", null, true);
            echo "</td>
            </tr>
        </table>
    ";
        } elseif ($this->getAttribute($this->getContext($context, "collector"), "enabled")) {
            // line 66
            echo "        <p>
            <em>No token</em>
        </p>
    ";
        } else {
            // line 70
            echo "        <p>
            <em>The security component is disabled</em>
        </p>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SecurityBundle:Collector:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 56,  136 => 44,  133 => 43,  111 => 32,  89 => 26,  85 => 24,  64 => 15,  45 => 8,  57 => 12,  51 => 10,  34 => 5,  31 => 4,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  184 => 70,  181 => 87,  173 => 85,  166 => 82,  163 => 81,  161 => 80,  156 => 77,  150 => 75,  144 => 73,  139 => 71,  126 => 61,  112 => 52,  109 => 51,  101 => 45,  93 => 42,  41 => 8,  28 => 3,  205 => 71,  198 => 69,  182 => 64,  178 => 66,  176 => 61,  170 => 60,  160 => 59,  145 => 57,  132 => 47,  119 => 36,  115 => 44,  102 => 30,  98 => 29,  90 => 41,  81 => 22,  74 => 21,  204 => 94,  191 => 70,  185 => 68,  167 => 64,  164 => 63,  153 => 54,  147 => 58,  138 => 45,  134 => 54,  127 => 52,  122 => 37,  120 => 50,  110 => 42,  108 => 31,  104 => 35,  95 => 28,  91 => 35,  87 => 40,  84 => 25,  80 => 32,  52 => 14,  49 => 13,  35 => 6,  32 => 6,  27 => 3,  86 => 29,  83 => 28,  77 => 24,  75 => 23,  71 => 20,  68 => 30,  62 => 27,  58 => 25,  56 => 13,  50 => 22,  44 => 10,  38 => 7,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  280 => 114,  275 => 111,  273 => 110,  268 => 107,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  245 => 96,  240 => 93,  234 => 89,  231 => 88,  228 => 87,  226 => 86,  221 => 83,  215 => 79,  212 => 78,  209 => 73,  207 => 95,  202 => 73,  196 => 92,  193 => 68,  190 => 89,  188 => 67,  183 => 63,  177 => 59,  174 => 67,  171 => 62,  169 => 56,  165 => 58,  162 => 57,  154 => 48,  151 => 53,  148 => 74,  143 => 48,  140 => 42,  130 => 42,  123 => 35,  116 => 35,  107 => 27,  103 => 25,  100 => 24,  97 => 23,  92 => 27,  88 => 20,  82 => 19,  79 => 35,  76 => 34,  73 => 19,  67 => 23,  61 => 12,  55 => 24,  47 => 11,  36 => 5,  30 => 3,  70 => 24,  63 => 16,  60 => 13,  54 => 11,  48 => 9,  46 => 12,  42 => 7,  39 => 6,  37 => 8,  33 => 4,  29 => 6,  22 => 1,);
    }
}
