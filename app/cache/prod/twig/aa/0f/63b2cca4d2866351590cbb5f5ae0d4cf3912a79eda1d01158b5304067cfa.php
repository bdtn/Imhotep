<?php

/* BdImhotepBundle:Imhotep:index.html.twig */
class __TwigTemplate_aa0f63b2cca4d2866351590cbb5f5ae0d4cf3912a79eda1d01158b5304067cfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BdImhotepBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bdimhotep_body' => array($this, 'block_bdimhotep_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BdImhotepBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_bdimhotep_body($context, array $blocks = array())
    {
        // line 9
        echo "
  <h2>Liste des articles</h2>
\tHello888888 !!!  


<!-- Standard button -->
<button type=\"button\" class=\"btn btn-default\">Default</button>

<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type=\"button\" class=\"btn btn-primary\">Primary</button>

<!-- Indicates a successful or positive action -->
<button type=\"button\" class=\"btn btn-success\">Success</button>

<!-- Contextual button for informational alert messages -->
<button type=\"button\" class=\"btn btn-info\">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type=\"button\" class=\"btn btn-warning\">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type=\"button\" class=\"btn btn-danger\">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type=\"button\" class=\"btn btn-link\">Link</button>

<p>
  <button type=\"button\" class=\"btn btn-primary btn-lg\">Large button</button>
  <button type=\"button\" class=\"btn btn-default btn-lg\">Large button</button>
</p>
<p>
  <button type=\"button\" class=\"btn btn-primary\">Default button</button>
  <button type=\"button\" class=\"btn btn-default\">Default button</button>
</p>
<p>
  <button type=\"button\" class=\"btn btn-primary btn-sm\">Small button</button>
  <button type=\"button\" class=\"btn btn-default btn-sm\">Small button</button>
</p>
<p>
  <button type=\"button\" class=\"btn btn-primary btn-xs\">Extra small button</button>
  <button type=\"button\" class=\"btn btn-default btn-xs\">Extra small button</button>
</p>



<button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Block level button</button>
<button type=\"button\" class=\"btn btn-default btn-lg btn-block\">Block level button</button>


";
    }

    public function getTemplateName()
    {
        return "BdImhotepBundle:Imhotep:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  175 => 46,  168 => 10,  165 => 9,  159 => 7,  151 => 76,  139 => 73,  135 => 72,  123 => 69,  119 => 68,  103 => 64,  83 => 46,  79 => 44,  94 => 19,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 74,  138 => 44,  134 => 43,  131 => 71,  122 => 37,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  48 => 7,  35 => 9,  29 => 4,  69 => 14,  54 => 19,  51 => 8,  31 => 7,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 75,  127 => 70,  112 => 32,  96 => 25,  76 => 17,  71 => 17,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 48,  77 => 43,  67 => 15,  28 => 4,  55 => 15,  43 => 10,  24 => 4,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  25 => 3,  39 => 8,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 47,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  60 => 12,  53 => 19,  110 => 20,  100 => 27,  89 => 16,  65 => 14,  63 => 13,  58 => 27,  34 => 5,  26 => 6,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 9,  40 => 9,  36 => 6,  32 => 5,  27 => 3,  22 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 67,  111 => 66,  107 => 65,  104 => 28,  97 => 20,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 21,  52 => 25,  49 => 9,  45 => 6,  41 => 9,  37 => 12,  33 => 6,  30 => 7,);
    }
}
