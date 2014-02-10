<?php

/* BdImhotepBundle:Issue:edit.html.twig */
class __TwigTemplate_6594212abdf6c187ebe371e913d0ba68d0a193e64aec51258c8790fc67ccd1d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Issue edit</h1>

    ";
        // line 6
        if (isset($context["edit_form"])) { $_edit_form_ = $context["edit_form"]; } else { $_edit_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_edit_form_, 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("issue");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        if (isset($context["delete_form"])) { $_delete_form_ = $context["delete_form"]; } else { $_delete_form_ = null; }
        echo         $this->env->getExtension('form')->renderer->renderBlock($_delete_form_, 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "BdImhotepBundle:Issue:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  23 => 1,  99 => 30,  91 => 29,  86 => 28,  42 => 10,  175 => 46,  168 => 10,  165 => 9,  159 => 7,  151 => 76,  139 => 73,  135 => 72,  123 => 69,  119 => 68,  103 => 64,  83 => 46,  79 => 44,  94 => 19,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 74,  138 => 44,  134 => 43,  131 => 71,  122 => 37,  117 => 37,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  48 => 7,  35 => 6,  29 => 5,  69 => 11,  54 => 19,  51 => 8,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 75,  127 => 70,  112 => 32,  96 => 25,  76 => 26,  71 => 25,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 48,  77 => 43,  67 => 15,  28 => 3,  55 => 22,  43 => 10,  24 => 4,  57 => 11,  50 => 14,  47 => 12,  38 => 6,  25 => 3,  39 => 8,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 47,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 43,  120 => 40,  105 => 31,  75 => 24,  60 => 12,  53 => 5,  110 => 34,  100 => 27,  89 => 16,  65 => 14,  63 => 13,  58 => 23,  34 => 5,  26 => 6,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 11,  40 => 9,  36 => 6,  32 => 5,  27 => 3,  22 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 48,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 67,  111 => 66,  107 => 65,  104 => 28,  97 => 20,  93 => 18,  90 => 21,  81 => 27,  70 => 23,  66 => 24,  62 => 11,  59 => 6,  56 => 21,  52 => 25,  49 => 9,  45 => 6,  41 => 9,  37 => 12,  33 => 6,  30 => 7,);
    }
}
