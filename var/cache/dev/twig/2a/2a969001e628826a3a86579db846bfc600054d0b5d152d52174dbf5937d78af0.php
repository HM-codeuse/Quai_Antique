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
class __TwigTemplate_cdd6c348f819838a917f47c99209cd8070225de1662cfb287bb40c2181687151 extends Template
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

        <div class=\"end-nav\">

         ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "        <div class=\"mb-3\">
            Vous êtes connectés en tant que ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "firstname", [], "any", false, false, false, 30), "html", null, true);
            echo ", 
            <button>
                <a class=\"nav-link link-light\" href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Me déconnecter </a>
            </button>
            <button type=\"button\" class=\"btn-primary rounded-4 mx-2 my-2 p-2\" >
                <a class=\"nav-link link-light \" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
            echo "\">Réserver</a>
            </button>
        </div>

        ";
        } else {
            // line 40
            echo "        <div class=\"mb-3\">
           <button type=\"button\" class=\"btn-primary rounded-4 mx-2 my-2 p-2\" ><a class=\"nav-link link-light \" href=\"";
            // line 41
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">S'inscrire</a></button>
           <button type=\"button\" class=\"btn-primary rounded-4 mx-2 my-2 p-2\" ><a class=\"nav-link link-light \" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se connecter</a></button>
           <button type=\"button\" class=\"btn-primary rounded-4 mx-2 my-2 p-2\" ><a class=\"nav-link link-light \" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation");
            echo "\">Réserver</a></button>
        </div>

        ";
        }
        // line 47
        echo "        </div>

       
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
        return array (  131 => 47,  124 => 43,  120 => 42,  116 => 41,  113 => 40,  105 => 35,  99 => 32,  92 => 30,  89 => 29,  87 => 28,  77 => 21,  71 => 18,  65 => 15,  59 => 12,  47 => 3,  43 => 1,);
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

        <div class=\"end-nav\">

         {% if app.user %}
        <div class=\"mb-3\">
            Vous êtes connectés en tant que {{ app.user.username}}  {{ app.user.firstname }}, 
            <button>
                <a class=\"nav-link link-light\" href=\"{{ path('app_logout') }}\">Me déconnecter </a>
            </button>
            <button type=\"button\" class=\"btn-primary rounded-4 mx-2 my-2 p-2\" >
                <a class=\"nav-link link-light \" href=\"{{ path ('app_reservation') }}\">Réserver</a>
            </button>
        </div>

        {% else %}
        <div class=\"mb-3\">
           <button type=\"button\" class=\"btn-primary rounded-4 mx-2 my-2 p-2\" ><a class=\"nav-link link-light \" href=\"{{ path ('app_register') }}\">S'inscrire</a></button>
           <button type=\"button\" class=\"btn-primary rounded-4 mx-2 my-2 p-2\" ><a class=\"nav-link link-light \" href=\"{{ path ('app_login') }}\">Se connecter</a></button>
           <button type=\"button\" class=\"btn-primary rounded-4 mx-2 my-2 p-2\" ><a class=\"nav-link link-light \" href=\"{{ path ('app_reservation') }}\">Réserver</a></button>
        </div>

        {% endif %}
        </div>

       
     </div>
</nav>", "base_site/nav.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\base_site\\nav.html.twig");
    }
}
