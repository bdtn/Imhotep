<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_ce4a0fbeaae45733dd18d64c38861c8c9c795040c5eb96b30c1b98c4612a011c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username"), "%confirmationUrl%" => $this->getContext($context, "confirmationUrl")), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  20 => 1,  34 => 7,  65 => 25,  77 => 51,  113 => 54,  81 => 24,  53 => 11,  23 => 4,  104 => 37,  174 => 46,  167 => 10,  150 => 76,  146 => 75,  134 => 72,  126 => 70,  118 => 42,  114 => 41,  110 => 66,  84 => 31,  76 => 28,  100 => 27,  97 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 47,  169 => 60,  140 => 67,  132 => 51,  128 => 49,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 64,  71 => 26,  67 => 20,  63 => 24,  59 => 14,  28 => 5,  94 => 28,  89 => 34,  85 => 25,  75 => 26,  68 => 14,  56 => 9,  38 => 6,  26 => 12,  24 => 7,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 7,  156 => 66,  151 => 63,  142 => 74,  138 => 73,  136 => 56,  121 => 46,  117 => 50,  105 => 39,  91 => 27,  62 => 19,  49 => 12,  87 => 25,  31 => 6,  25 => 5,  21 => 2,  19 => 2,  93 => 29,  88 => 32,  78 => 44,  46 => 14,  44 => 11,  27 => 5,  79 => 53,  72 => 21,  69 => 26,  47 => 10,  40 => 11,  37 => 13,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 53,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 38,  98 => 36,  96 => 36,  83 => 29,  74 => 30,  66 => 24,  55 => 15,  52 => 25,  50 => 21,  43 => 12,  41 => 7,  35 => 8,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 9,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 69,  116 => 43,  112 => 52,  109 => 45,  106 => 50,  103 => 28,  99 => 31,  95 => 37,  92 => 35,  86 => 28,  82 => 46,  80 => 32,  73 => 30,  64 => 16,  60 => 22,  57 => 23,  54 => 16,  51 => 14,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 10,  33 => 4,  30 => 2,);
    }
}
