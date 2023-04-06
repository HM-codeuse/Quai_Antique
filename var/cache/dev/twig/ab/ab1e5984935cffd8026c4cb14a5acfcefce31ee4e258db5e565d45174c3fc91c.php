<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_116e06b9c8dfd4fbc1ba503c3c94d8e195c03254aaa7ef8ad02cb795c461f9fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<header>
    <nav class=\"navbar navbar-expand-lg bg-body-tertiary bg-primary\" data-bs-theme=\"dark\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">
          <img src=\"/docs/5.3/assets/brand/bootstrap-logo.svg\" alt=\"Logo\" width=\"30\" height=\"24\" class=\"d-inline-block align-text-top\">
          Quai Antique 
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
         <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"\">Accueil</a>
            </li>
            <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dishes_list");
        echo "\"\">Plats</a>
            </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menus_list");
        echo "\"\">Menus</a>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"\">Contact</a>
            </li>
         </ul>
        </div>
        <button type=\"button\" class=\"btn btn-success\">Réserver</button>
     </div>
</nav>
</header>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 26,  95 => 23,  89 => 20,  83 => 17,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<header>
    <nav class=\"navbar navbar-expand-lg bg-body-tertiary bg-primary\" data-bs-theme=\"dark\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand\" href=\"#\">
          <img src=\"/docs/5.3/assets/brand/bootstrap-logo.svg\" alt=\"Logo\" width=\"30\" height=\"24\" class=\"d-inline-block align-text-top\">
          Quai Antique 
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
         <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link active\" aria-current=\"page\" href=\"\"{{ path('homepage') }}\"\">Accueil</a>
            </li>
            <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"\"{{ path('dishes_list') }}\"\">Plats</a>
            </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"\"{{ path('menus_list') }}\"\">Menus</a>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"\"{{ path('contact') }}\"\">Contact</a>
            </li>
         </ul>
        </div>
        <button type=\"button\" class=\"btn btn-success\">Réserver</button>
     </div>
</nav>
</header>
{% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\home\\index.html.twig");
    }
}
