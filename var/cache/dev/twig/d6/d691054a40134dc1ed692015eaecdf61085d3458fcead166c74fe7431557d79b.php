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

/* home/star_dishes.html.twig */
class __TwigTemplate_063f8f8eae47b3adf68ad3df526348866c182670cc981ced99c6ba8b8c10cdae extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/star_dishes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/star_dishes.html.twig"));

        // line 2
        echo "<div class=\"star\" id= \"star_container\">
<div class=\"row\">
<h2 class=\"text-center\">Nos plats vedettes</h2>
</div>
<div class=\"row row-cols-1 row-cols-md-3 g-4\">
      <div class=\"col\">
        <div class=\"card rounded-3\">
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/specials-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"...\">         
            <h2 class=\"text-center\">titre1</h2>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card rounded-3\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/specials-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"...\">
            <h2 class=\"text-center\">titre2</h2>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card rounded-3\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/specials-3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"...\">
            <h2 class=\"text-center\">titre3</h2>
        </div>
      </div>
      </div>
      </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/star_dishes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  61 => 15,  52 => 9,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# plats vedette #}
<div class=\"star\" id= \"star_container\">
<div class=\"row\">
<h2 class=\"text-center\">Nos plats vedettes</h2>
</div>
<div class=\"row row-cols-1 row-cols-md-3 g-4\">
      <div class=\"col\">
        <div class=\"card rounded-3\">
            <img src=\"{{ asset('build/images/specials-1.jpg') }}\" class=\"img-fluid\" alt=\"...\">         
            <h2 class=\"text-center\">titre1</h2>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card rounded-3\">
            <img src=\"{{ asset('build/images/specials-2.jpg') }}\" class=\"img-fluid\" alt=\"...\">
            <h2 class=\"text-center\">titre2</h2>
        </div>
      </div>
      <div class=\"col\">
        <div class=\"card rounded-3\">
            <img src=\"{{ asset('build/images/specials-3.jpg') }}\" class=\"img-fluid\" alt=\"...\">
            <h2 class=\"text-center\">titre3</h2>
        </div>
      </div>
      </div>
      </div>", "home/star_dishes.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\home\\star_dishes.html.twig");
    }
}
