<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_8343853a852a31903995bf8592d42e696bf503d6aa7a563f7306a4e5439c7812 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            if (isset($context["invalid_username"])) { $_invalid_username_ = $context["invalid_username"]; } else { $_invalid_username_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => $_invalid_username_), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  95 => 9,  87 => 34,  64 => 10,  23 => 1,  99 => 30,  91 => 29,  86 => 28,  42 => 6,  175 => 46,  168 => 10,  165 => 9,  159 => 7,  151 => 76,  139 => 73,  135 => 72,  123 => 69,  119 => 68,  103 => 11,  83 => 46,  79 => 53,  94 => 19,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 74,  138 => 44,  134 => 43,  131 => 71,  122 => 54,  117 => 37,  108 => 31,  102 => 28,  92 => 25,  84 => 21,  72 => 15,  48 => 7,  35 => 9,  29 => 6,  69 => 11,  54 => 19,  51 => 8,  31 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 54,  147 => 75,  127 => 70,  112 => 52,  96 => 25,  76 => 26,  71 => 26,  114 => 50,  109 => 51,  106 => 45,  101 => 19,  85 => 48,  77 => 51,  67 => 15,  28 => 3,  55 => 18,  43 => 10,  24 => 4,  57 => 11,  50 => 14,  47 => 14,  38 => 6,  25 => 3,  39 => 5,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 47,  173 => 58,  162 => 58,  158 => 56,  155 => 55,  152 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 43,  120 => 40,  105 => 31,  75 => 24,  60 => 12,  53 => 5,  110 => 34,  100 => 27,  89 => 7,  65 => 14,  63 => 22,  58 => 23,  34 => 5,  26 => 6,  19 => 2,  98 => 10,  88 => 17,  80 => 15,  78 => 25,  46 => 12,  44 => 12,  40 => 9,  36 => 8,  32 => 3,  27 => 5,  22 => 3,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 48,  129 => 36,  124 => 35,  121 => 24,  118 => 36,  115 => 67,  111 => 66,  107 => 65,  104 => 28,  97 => 20,  93 => 18,  90 => 21,  81 => 27,  70 => 23,  66 => 16,  62 => 11,  59 => 6,  56 => 11,  52 => 25,  49 => 9,  45 => 8,  41 => 9,  37 => 13,  33 => 6,  30 => 7,);
    }
}
