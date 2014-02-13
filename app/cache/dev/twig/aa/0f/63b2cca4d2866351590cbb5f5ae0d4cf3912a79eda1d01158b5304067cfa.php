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

  <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("bd_issue_new");
        echo "\" class=\"btn btn-primary btn-lg active\" role=\"button\">Primary link</a>
<br>

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
        return array (  174 => 46,  167 => 10,  150 => 76,  146 => 75,  134 => 72,  126 => 70,  118 => 68,  114 => 67,  110 => 66,  84 => 48,  76 => 43,  100 => 20,  97 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 47,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 64,  71 => 17,  67 => 15,  63 => 15,  59 => 21,  28 => 3,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  38 => 6,  26 => 6,  24 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 7,  156 => 66,  151 => 63,  142 => 74,  138 => 73,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  87 => 25,  31 => 5,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 44,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 9,  37 => 12,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 25,  50 => 10,  43 => 10,  41 => 5,  35 => 9,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 9,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 71,  125 => 44,  122 => 69,  116 => 41,  112 => 42,  109 => 34,  106 => 65,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 46,  80 => 19,  73 => 19,  64 => 14,  60 => 6,  57 => 27,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 9,  39 => 8,  36 => 5,  33 => 6,  30 => 7,);
    }
}
