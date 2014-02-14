<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d0d7be6e852bd049c0e68d10c204f93aa22278ce3b96fc77c9d6511902e0e89d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BdImhotepBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  Gestion des groupes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<div style='height:40px'></div>
\t<h2>Liste des groupes</h2>

\t<div class=\"btn-group\">
\t  \t<a class=\"btn btn-primary\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\"><i class=\"icon-user icon-white\"></i> Ajouter un groupe</a>
\t</div>
<div style='height:40px'></div>

    <table class=\"table table-hover  table-bordered\" >
      <thead>
        <tr>
          <th>#</th>
          <th>Groupe</th>
          
          <th></th>
        </tr>
      </thead>
      <tbody>
      \t ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 26
            echo "\t        <tr>
\t          <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "id"), "html", null, true);
            echo "</td>
\t          <td width=\"80%\"><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"), "html", null, true);
            echo "</a></td>
\t          
\t          <td>
\t          \t<a class=\"btn\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_delete", array("groupName" => $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"))), "html", null, true);
            echo "\" alt=\"Supprimer\" data-toggle=\"tooltip\" title=\"Supprimer\"><i class=\"icon-trash\"></i></a>
\t          \t<a class=\"btn\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => $this->getAttribute($this->getContext($context, "group"), "getName", array(), "method"))), "html", null, true);
            echo "\" alt=\"Modifier\" data-toggle=\"tooltip\" title=\"Modifer\"><i class=\"icon-edit\"></i></a>
\t          </td>
\t        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        
      </tbody>
    </table>


";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  88 => 32,  84 => 31,  76 => 28,  72 => 27,  69 => 26,  65 => 25,  48 => 11,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
