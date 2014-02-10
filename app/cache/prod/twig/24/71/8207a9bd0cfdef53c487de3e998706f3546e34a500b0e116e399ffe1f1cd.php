<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_24718207a9bd0cfdef53c487de3e998706f3546e34a500b0e116e399ffe1f1cd extends Twig_Template
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
        echo "/*
";
        // line 2
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  43 => 14,  24 => 4,  57 => 9,  50 => 7,  47 => 6,  38 => 13,  25 => 3,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  60 => 21,  53 => 19,  110 => 20,  100 => 28,  89 => 16,  65 => 14,  63 => 13,  58 => 12,  34 => 5,  26 => 5,  19 => 1,  98 => 40,  88 => 6,  80 => 15,  78 => 25,  46 => 9,  44 => 9,  40 => 16,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 39,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 9,  90 => 21,  81 => 19,  70 => 23,  66 => 13,  62 => 16,  59 => 11,  56 => 20,  52 => 11,  49 => 10,  45 => 7,  41 => 6,  37 => 5,  33 => 9,  30 => 4,);
    }
}
