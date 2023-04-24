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
class __TwigTemplate_c483c2adc13a5bb782635c37d2db1f3763d49a021345fad48fc7b6cfded361fe extends Template
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
        echo " <nav class=\"navbar navbar-expand-lg bg-body-tertiary text-light\" >
      <div class=\"container-fluid\">
        <a class=\"navbar-brand link-light\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
          <h2 class=\"logo\">Quai Antique</h2>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
         <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link link-light active\" aria-current=\"page\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">ACCUEIL</a>
            </li>
            <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dishes");
        echo "\">PLATS</a>
            </li>
           <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_menu");
        echo "\">MENUS</a>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\">CONTACT</a>
            </li>
         </ul>
        </div>
        <button type=\"button\" class=\"btn-primary rounded-5\" ><a class=\"nav-link link-light \" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
        echo "\">Réserver</a></button>
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
        return array (  84 => 25,  77 => 21,  71 => 18,  65 => 15,  59 => 12,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <nav class=\"navbar navbar-expand-lg bg-body-tertiary text-light\" >
      <div class=\"container-fluid\">
        <a class=\"navbar-brand link-light\" href=\"{{ path ('app_home') }}\">
          <h2 class=\"logo\">Quai Antique</h2>
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
         <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link link-light active\" aria-current=\"page\" href=\"{{ path ('app_home') }}\">ACCUEIL</a>
            </li>
            <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"{{ path ('app_dishes') }}\">PLATS</a>
            </li>
           <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"{{ path ('app_menu') }}\">MENUS</a>
           </li>
           <li class=\"nav-item\">
             <a class=\"nav-link link-light\" href=\"{{ path ('app_contact') }}\">CONTACT</a>
            </li>
         </ul>
        </div>
        <button type=\"button\" class=\"btn-primary rounded-5\" ><a class=\"nav-link link-light \" href=\"{{ path ('app_reservation') }}\">Réserver</a></button>
     </div>
</nav>", "base_site/nav.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\base_site\\nav.html.twig");
    }
}
