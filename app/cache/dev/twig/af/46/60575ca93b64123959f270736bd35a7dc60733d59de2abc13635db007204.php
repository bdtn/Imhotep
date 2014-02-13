<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_af4660575ca93b64123959f270736bd35a7dc60733d59de2abc13635db007204 extends Twig_Template
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
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  20 => 1,  34 => 7,  77 => 51,  113 => 54,  81 => 24,  53 => 18,  23 => 3,  104 => 37,  174 => 46,  167 => 10,  150 => 76,  146 => 75,  134 => 72,  126 => 70,  118 => 68,  114 => 67,  110 => 66,  84 => 48,  76 => 43,  100 => 27,  97 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 47,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 64,  71 => 29,  67 => 20,  63 => 24,  59 => 14,  28 => 3,  94 => 28,  89 => 7,  85 => 25,  75 => 30,  68 => 28,  56 => 9,  38 => 6,  26 => 12,  24 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 7,  156 => 66,  151 => 63,  142 => 74,  138 => 73,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 14,  87 => 25,  31 => 4,  25 => 5,  21 => 2,  19 => 1,  93 => 29,  88 => 38,  78 => 44,  46 => 11,  44 => 11,  27 => 4,  79 => 31,  72 => 22,  69 => 11,  47 => 12,  40 => 11,  37 => 13,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 48,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 10,  96 => 31,  83 => 32,  74 => 30,  66 => 24,  55 => 14,  52 => 25,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 9,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 71,  125 => 44,  122 => 69,  116 => 43,  112 => 52,  109 => 51,  106 => 50,  103 => 28,  99 => 31,  95 => 9,  92 => 21,  86 => 28,  82 => 46,  80 => 19,  73 => 19,  64 => 27,  60 => 16,  57 => 23,  54 => 16,  51 => 13,  48 => 12,  45 => 8,  42 => 10,  39 => 9,  36 => 7,  33 => 6,  30 => 2,);
    }
}
