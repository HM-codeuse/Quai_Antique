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
        echo "
";
        // line 6
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
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/boeuf-bourguignon2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/nouilles-savoie.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
    </div>
    <div class=\"carousel-item\">
      <img src=\"";
        // line 21
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
</div>

";
        // line 36
        echo "<div class=\"star bg-warning\">
<div class=\"row\">
<h2 class=\"text-center\">Nos plats vedettes</h2>
</div>
<div class=\"row row-cols-1 row-cols-md-3 g-4\">
      <div class=\"col\">
        <div class=\"card\">
            <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/specials-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"...\">         
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card\">
            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/specials-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"...\">
         
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card\">
            <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/specials-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"...\">
        </div>
      </div>
      
    </div></div>


";
        // line 62
        echo "<div class=\"acces-contact\">
<div class=\"row\">
  <div class=\"col-sm-6 mb-3 mb-sm-0\">
    <div class=\"contact-card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Contactez-nous</h5>
        <div class=\"mb-3\">
            <label for=\"exampleFormControlInput1\" class=\"form-label\">Email address</label>
             <input type=\"email\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Example textarea</label>
            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-sm-6\">
    <div class=\"access-card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Retrouvez-nous ici</h5>
           <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/chambéry_map.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"...\">

      </div>
    </div>
  </div>
</div>
</div></div>



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
        return array (  170 => 83,  147 => 62,  137 => 54,  128 => 48,  120 => 43,  111 => 36,  94 => 21,  88 => 18,  82 => 15,  71 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

{# Carroussel #}
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
</div>

{# plats vedette #}
<div class=\"star bg-warning\">
<div class=\"row\">
<h2 class=\"text-center\">Nos plats vedettes</h2>
</div>
<div class=\"row row-cols-1 row-cols-md-3 g-4\">
      <div class=\"col\">
        <div class=\"card\">
            <img src=\"{{ asset('build/images/specials-1.jpg') }}\" class=\"img-fluid\" alt=\"...\">         
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card\">
            <img src=\"{{ asset('build/images/specials-2.jpg') }}\" class=\"img-fluid\" alt=\"...\">
         
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card\">
            <img src=\"{{ asset('build/images/specials-3.jpg') }}\" class=\"img-fluid\" alt=\"...\">
        </div>
      </div>
      
    </div></div>


{# Contact et Access #}
<div class=\"acces-contact\">
<div class=\"row\">
  <div class=\"col-sm-6 mb-3 mb-sm-0\">
    <div class=\"contact-card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Contactez-nous</h5>
        <div class=\"mb-3\">
            <label for=\"exampleFormControlInput1\" class=\"form-label\">Email address</label>
             <input type=\"email\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Example textarea</label>
            <textarea class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\"></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-sm-6\">
    <div class=\"access-card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Retrouvez-nous ici</h5>
           <img src=\"{{ asset('build/images/chambéry_map.png') }}\" class=\"img-fluid\" alt=\"...\">

      </div>
    </div>
  </div>
</div>
</div></div>



{% endblock %}", "home/index.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\home\\index.html.twig");
    }
}
