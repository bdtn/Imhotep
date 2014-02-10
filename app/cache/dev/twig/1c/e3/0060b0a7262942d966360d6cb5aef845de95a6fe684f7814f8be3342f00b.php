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
        if ($this->getContext($context, "error")) {
            // line 9
            echo "    <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
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
        return array (  64 => 16,  59 => 14,  54 => 11,  48 => 9,  45 => 8,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
