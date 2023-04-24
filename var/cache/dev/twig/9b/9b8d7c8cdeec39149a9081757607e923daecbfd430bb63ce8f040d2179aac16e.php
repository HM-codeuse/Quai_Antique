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

/* home/carroussel.html.twig */
class __TwigTemplate_bb028a84f51f089303b7b1658efe62ecbcceb678434dd23ba1e798ea2e709b19 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/carroussel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/carroussel.html.twig"));

        // line 2
        echo "<div class=\"container-fluid\">
<div id=\"carouselExampleIndicators\" class=\"carousel slide\">
  <div class=\"carousel-indicators\">
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
  </div>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/boeuf-bourguignon2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/nouilles-savoie.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/saumon-renversé.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
    </div>
  </div>

  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/carroussel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 17,  60 => 14,  54 => 11,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Carroussel d'accueil #}
<div class=\"container-fluid\">
<div id=\"carouselExampleIndicators\" class=\"carousel slide\">
  <div class=\"carousel-indicators\">
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
    <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
  </div>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img src=\"{{ asset('build/images/boeuf-bourguignon2.jpg') }}\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"{{ asset('build/images/nouilles-savoie.jpg') }}\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"{{ asset('build/images/saumon-renversé.jpg') }}\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
    </div>
  </div>

  <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Previous</span>
  </button>
  <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"visually-hidden\">Next</span>
  </button>
</div>", "home/carroussel.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\home\\carroussel.html.twig");
    }
}
