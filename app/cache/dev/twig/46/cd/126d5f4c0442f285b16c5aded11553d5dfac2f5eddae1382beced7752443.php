<?php

/* BdUserBundle:Group:edit.html.twig */
class __TwigTemplate_46cd126d5f4c0442f285b16c5aded11553d5dfac2f5eddae1382beced7752443 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BdImhotepBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Gestion des utilisateurs - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div style='height:40px'></div>
<h2>Modifier groupe</h2>
<div style='height:40px'></div>
<form action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => $this->getContext($context, "group_name"))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    


    <div class=\"control-group\">
    \t\t<div class=\"controls\">
      \t\t\t<button type=\"submit\" class=\"btn\">Envoyer</button>
    \t\t</div>
  \t\t</div>

    <!--<div>
        <input type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit"), "html", null, true);
        echo "\" />
    </div>-->
</form>
";
    }

    public function getTemplateName()
    {
        return "BdUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  77 => 51,  113 => 54,  81 => 29,  53 => 11,  23 => 1,  104 => 37,  174 => 46,  167 => 10,  150 => 76,  146 => 75,  134 => 72,  126 => 70,  118 => 42,  114 => 41,  110 => 66,  84 => 31,  76 => 28,  100 => 20,  97 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 47,  169 => 60,  140 => 67,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 64,  71 => 26,  67 => 22,  63 => 24,  59 => 14,  28 => 3,  94 => 28,  89 => 34,  85 => 25,  75 => 26,  68 => 14,  56 => 9,  38 => 6,  26 => 6,  24 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 7,  156 => 66,  151 => 63,  142 => 74,  138 => 73,  136 => 56,  121 => 46,  117 => 50,  105 => 39,  91 => 27,  62 => 23,  49 => 12,  87 => 25,  31 => 4,  25 => 5,  21 => 2,  19 => 1,  93 => 28,  88 => 32,  78 => 44,  46 => 14,  44 => 11,  27 => 4,  79 => 53,  72 => 27,  69 => 26,  47 => 10,  40 => 9,  37 => 13,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 53,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 38,  98 => 36,  96 => 36,  83 => 29,  74 => 30,  66 => 24,  55 => 15,  52 => 25,  50 => 21,  43 => 10,  41 => 7,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 9,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 69,  116 => 43,  112 => 52,  109 => 45,  106 => 50,  103 => 42,  99 => 31,  95 => 37,  92 => 35,  86 => 28,  82 => 46,  80 => 32,  73 => 30,  64 => 16,  60 => 22,  57 => 23,  54 => 11,  51 => 14,  48 => 11,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 6,  30 => 7,);
    }
}
