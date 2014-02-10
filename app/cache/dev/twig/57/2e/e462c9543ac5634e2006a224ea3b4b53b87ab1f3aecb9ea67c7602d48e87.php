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
        return array (  112 => 52,  109 => 51,  103 => 11,  98 => 10,  95 => 9,  89 => 7,  79 => 53,  77 => 51,  37 => 13,  35 => 9,  30 => 7,  22 => 1,  64 => 16,  59 => 14,  54 => 11,  48 => 9,  45 => 8,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
