<?php

/* ::layout-login.html.twig */
class __TwigTemplate_572ee462c9543ac5634e2006a224ea3b4b53b87ab1f3aecb9ea67c7602d48e87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "      <style type=\"text/css\">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type=\"text\"],
      .form-signin input[type=\"password\"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

  </head>
  <body>

    <div class=\"container\">
    \t";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "      

    </div> <!-- /container -->


  </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Imhotep";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
      <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" >
    ";
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "          ";
    }

    public function getTemplateName()
    {
        return "::layout-login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  95 => 9,  87 => 34,  64 => 10,  23 => 1,  99 => 30,  91 => 29,  86 => 28,  42 => 6,  175 => 46,  168 => 10,  165 => 9,  159 => 7,  151 => 76,  139 => 73,  135 => 72,  123 => 69,  119 => 68,  103 => 11,  83 => 46,  79 => 53,  94 => 19,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 74,  138 => 44,  134 => 43,  131 => 71,  122 => 54,  117 => 37,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  48 => 7,  35 => 9,  29 => 2,  69 => 11,  54 => 19,  51 => 8,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 75,  127 => 70,  112 => 52,  96 => 25,  76 => 26,  71 => 26,  114 => 50,  109 => 51,  106 => 45,  101 => 19,  85 => 48,  77 => 51,  67 => 15,  28 => 3,  55 => 18,  43 => 10,  24 => 4,  57 => 11,  50 => 14,  47 => 14,  38 => 6,  25 => 3,  39 => 5,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 47,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 43,  120 => 40,  105 => 31,  75 => 24,  60 => 12,  53 => 5,  110 => 34,  100 => 27,  89 => 7,  65 => 14,  63 => 22,  58 => 23,  34 => 5,  26 => 6,  19 => 1,  98 => 10,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 11,  40 => 9,  36 => 6,  32 => 3,  27 => 3,  22 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 48,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 67,  111 => 66,  107 => 65,  104 => 28,  97 => 20,  93 => 18,  90 => 21,  81 => 27,  70 => 23,  66 => 16,  62 => 11,  59 => 6,  56 => 11,  52 => 25,  49 => 9,  45 => 8,  41 => 9,  37 => 13,  33 => 6,  30 => 7,);
    }
}
