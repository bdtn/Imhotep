<?php

/* ::layout.html.twig */
class __TwigTemplate_b135d4da6e252b5a4b8f59ef1f1360219641dcae1ed6090b7b2f870be4914fff extends Twig_Template
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
        // line 12
        echo "  </head>
  <body>
    <div class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"brand\" href=\"#\">Imhotep</a>
          <div class=\"nav-collapse collapse\">
            <p class=\"navbar-text pull-right\">
              Logged in as <a href=\"#\" class=\"navbar-link\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
        echo "</a> | 

              <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\" class=\"navbar-link\">logout</a>

            </p>
            <ul class=\"nav\">
              <li class=\"active\"><a href=\"#\">Home</a></li>
              <li><a href=\"#about\">About</a></li>
              <li><a href=\"#contact\">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
       
        ";
        // line 43
        $this->env->loadTemplate("BdImhotepBundle:Imhotep:menu.html.twig")->display($context);
        // line 44
        echo "       
         <div class=\"span9\">
          ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "         </div>

        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-transition.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-alert.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-dropdown.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-scrollspy.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-tab.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-tooltip.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-popover.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-button.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-collapse.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-carousel.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-typeahead.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " Imhotep Tunisie";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        echo "          ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 46,  167 => 10,  150 => 76,  146 => 75,  134 => 72,  126 => 70,  118 => 68,  114 => 67,  110 => 66,  84 => 48,  76 => 43,  100 => 20,  97 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 47,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 64,  71 => 17,  67 => 15,  63 => 15,  59 => 21,  28 => 3,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  38 => 6,  26 => 6,  24 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 7,  156 => 66,  151 => 63,  142 => 74,  138 => 73,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  87 => 25,  31 => 5,  25 => 3,  21 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 44,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 9,  37 => 12,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 15,  52 => 25,  50 => 10,  43 => 10,  41 => 5,  35 => 9,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 9,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 71,  125 => 44,  122 => 69,  116 => 41,  112 => 42,  109 => 34,  106 => 65,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 46,  80 => 19,  73 => 19,  64 => 14,  60 => 6,  57 => 27,  54 => 10,  51 => 14,  48 => 8,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
