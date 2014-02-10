<?php

/* BdImhotepBundle:Imhotep:index.html.twig */
class __TwigTemplate_aa0f63b2cca4d2866351590cbb5f5ae0d4cf3912a79eda1d01158b5304067cfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BdImhotepBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bdimhotep_body' => array($this, 'block_bdimhotep_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BdImhotepBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_bdimhotep_body($context, array $blocks = array())
    {
        // line 9
        echo "
  <h2>Liste des articles</h2>
\tHello888888 !!!  

  <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("bd_issue_new");
        echo "\" class=\"btn btn-primary btn-lg active\" role=\"button\">Primary link</a>
<br>

<!-- Standard button -->
<button type=\"button\" class=\"btn btn-default\">Default</button>

<!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
<button type=\"button\" class=\"btn btn-primary\">Primary</button>

<!-- Indicates a successful or positive action -->
<button type=\"button\" class=\"btn btn-success\">Success</button>

<!-- Contextual button for informational alert messages -->
<button type=\"button\" class=\"btn btn-info\">Info</button>

<!-- Indicates caution should be taken with this action -->
<button type=\"button\" class=\"btn btn-warning\">Warning</button>

<!-- Indicates a dangerous or potentially negative action -->
<button type=\"button\" class=\"btn btn-danger\">Danger</button>

<!-- Deemphasize a button by making it look like a link while maintaining button behavior -->
<button type=\"button\" class=\"btn btn-link\">Link</button>

<p>
  <button type=\"button\" class=\"btn btn-primary btn-lg\">Large button</button>
  <button type=\"button\" class=\"btn btn-default btn-lg\">Large button</button>
</p>
<p>
  <button type=\"button\" class=\"btn btn-primary\">Default button</button>
  <button type=\"button\" class=\"btn btn-default\">Default button</button>
</p>
<p>
  <button type=\"button\" class=\"btn btn-primary btn-sm\">Small button</button>
  <button type=\"button\" class=\"btn btn-default btn-sm\">Small button</button>
</p>
<p>
  <button type=\"button\" class=\"btn btn-primary btn-xs\">Extra small button</button>
  <button type=\"button\" class=\"btn btn-default btn-xs\">Extra small button</button>
</p>



<button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Block level button</button>
<button type=\"button\" class=\"btn btn-default btn-lg btn-block\">Block level button</button>


";
    }

    public function getTemplateName()
    {
        return "BdImhotepBundle:Imhotep:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 13,  42 => 9,  39 => 8,  32 => 5,  29 => 4,);
    }
}
