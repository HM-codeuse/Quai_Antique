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

/* base_site/nav.html.twig */
class __TwigTemplate_751efbc40821bc320602b2d4c34a4fa48ae2e4a564cbc51f39a95fd6058c63bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_site/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_site/nav.html.twig"));

        // line 1
        echo " <nav class=\"navbar navbar-expand-lg bg-body-tertiary bg-dark text-light\" data-bs-theme=\"dark\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand link-light\" href=\"#\">
          <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/specials-1.jpg"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"30\" height=\"24\"width=\"30\" height=\"24\" class=\"d-inline-block align-text-top\">
          Quai Antique 
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
         <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link link-light active\" aria-current=\"page\" href=\"\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"\">Accueil</a>
            </li>
            <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dishes_list");
        echo "\"\">Plats</a>
            </li>
           <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("menus_list");
        echo "\"\">Menus</a>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"\">Contact</a>
            </li>
         </ul>
        </div>
        <button type=\"button\" class=\"btn btn-success\">Réserver</button>
     </div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base_site/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  72 => 19,  66 => 16,  60 => 13,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <nav class=\"navbar navbar-expand-lg bg-body-tertiary bg-dark text-light\" data-bs-theme=\"dark\">
      <div class=\"container-fluid\">
        <a class=\"navbar-brand link-light\" href=\"#\">
          <img src=\"{{ asset('build/images/specials-1.jpg') }}\" alt=\"Logo\" width=\"30\" height=\"24\"width=\"30\" height=\"24\" class=\"d-inline-block align-text-top\">
          Quai Antique 
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
         <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link link-light active\" aria-current=\"page\" href=\"\"{{ path('homepage') }}\"\">Accueil</a>
            </li>
            <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"\"{{ path('dishes_list') }}\"\">Plats</a>
            </li>
           <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"\"{{ path('menus_list') }}\"\">Menus</a>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"\"{{ path('contact') }}\"\">Contact</a>
            </li>
         </ul>
        </div>
        <button type=\"button\" class=\"btn btn-success\">Réserver</button>
     </div>
</nav>", "base_site/nav.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\base_site\\nav.html.twig");
    }
}
