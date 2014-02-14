<?php

/* BdImhotepBundle::layout.html.twig */
class __TwigTemplate_e34eb634ca26bf7cb31dfd04d9cbfcfdfbe30e1a89cf23bebaa7b6d0f9619424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'bdimhotep_body' => array($this, 'block_bdimhotep_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  

 \t<div class=\"span9\">
        <div class=\"hero-unit\">
            <h1>Imhotep</h1>
            <p>Bienvenue dans l'outil de suivi des évènements.</p>
            <p><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("bd_issue_new");
        echo "\" class=\"btn btn-primary btn-large\">Add Issue &raquo;</a></p>
          </div>
            ";
        // line 19
        $this->displayBlock('bdimhotep_body', $context, $blocks);
        // line 21
        echo "          <div class=\"row-fluid\">
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class=\"row-fluid\">
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          ";
    }

    // line 19
    public function block_bdimhotep_body($context, array $blocks = array())
    {
        // line 20
        echo "  \t\t\t";
    }

    public function getTemplateName()
    {
        return "BdImhotepBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 20,  97 => 19,  59 => 21,  57 => 19,  52 => 17,  43 => 10,  40 => 9,  33 => 6,  30 => 5,  98 => 36,  88 => 32,  84 => 31,  76 => 28,  72 => 27,  69 => 26,  65 => 25,  48 => 11,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
