<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d7f57c6d7a307fbb04f6318e85158667fc1d5b52dfd0a91469d745f0e54660ab extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  43 => 14,  24 => 4,  57 => 9,  50 => 7,  47 => 6,  38 => 13,  25 => 3,  39 => 7,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  75 => 24,  60 => 21,  53 => 19,  110 => 20,  100 => 28,  89 => 16,  65 => 14,  63 => 13,  58 => 12,  34 => 5,  26 => 5,  19 => 1,  98 => 40,  88 => 6,  80 => 15,  78 => 25,  46 => 9,  44 => 9,  40 => 16,  36 => 6,  32 => 4,  27 => 3,  22 => 2,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 34,  118 => 33,  115 => 39,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 9,  90 => 21,  81 => 19,  70 => 23,  66 => 13,  62 => 16,  59 => 11,  56 => 20,  52 => 11,  49 => 10,  45 => 7,  41 => 6,  37 => 5,  33 => 10,  30 => 4,);
    }
}
