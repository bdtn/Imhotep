<?php

/* BdUserBundle:Default:login.html.twig */
class __TwigTemplate_1ce30060b0a7262942d966360d6cb5aef845de95a6fe684f7814f8be3342f00b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout-login.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout-login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  Login - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  ";
        // line 8
        echo "  ";
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 9
            echo "    <div class=\"alert alert-error\">";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_error_, "message"), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo "


  <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"form-signin\">
        <h2 class=\"form-signin-heading\">Please sign in</h2>
        <input type=\"text\" class=\"input-block-level\" placeholder=\"Email address\"  id=\"username\" name=\"_username\" value=\"";
        // line 16
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" >
        <input type=\"password\" class=\"input-block-level\" placeholder=\"Password\" id=\"password\" name=\"_password\" >
        <label class=\"checkbox\">
          <input type=\"checkbox\" value=\"remember-me\"> Remember me
        </label>
        <button class=\"btn btn-large btn-primary\" type=\"submit\">Sign in</button>
      </form>

";
    }

    public function getTemplateName()
    {
        return "BdUserBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  95 => 38,  87 => 34,  64 => 10,  23 => 1,  99 => 30,  91 => 29,  86 => 28,  42 => 6,  175 => 46,  168 => 10,  165 => 9,  159 => 7,  151 => 76,  139 => 73,  135 => 72,  123 => 69,  119 => 68,  103 => 64,  83 => 46,  79 => 30,  94 => 19,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 74,  138 => 44,  134 => 43,  131 => 71,  122 => 54,  117 => 37,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  48 => 7,  35 => 6,  29 => 2,  69 => 11,  54 => 19,  51 => 8,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 75,  127 => 70,  112 => 32,  96 => 25,  76 => 26,  71 => 26,  114 => 50,  109 => 31,  106 => 45,  101 => 19,  85 => 48,  77 => 43,  67 => 15,  28 => 3,  55 => 18,  43 => 10,  24 => 4,  57 => 11,  50 => 14,  47 => 14,  38 => 6,  25 => 3,  39 => 5,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 47,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 43,  120 => 40,  105 => 31,  75 => 24,  60 => 12,  53 => 5,  110 => 34,  100 => 27,  89 => 16,  65 => 14,  63 => 22,  58 => 23,  34 => 5,  26 => 6,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 11,  40 => 9,  36 => 6,  32 => 3,  27 => 3,  22 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 48,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 67,  111 => 66,  107 => 65,  104 => 28,  97 => 20,  93 => 18,  90 => 21,  81 => 27,  70 => 23,  66 => 16,  62 => 11,  59 => 6,  56 => 11,  52 => 25,  49 => 9,  45 => 8,  41 => 9,  37 => 12,  33 => 6,  30 => 7,);
    }
}
