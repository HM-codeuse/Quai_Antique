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

/* dish/index.html.twig */
class __TwigTemplate_88d4f27c43b1a8f8f42a5d07c108c3eab5a93a86f453a52bcf0e24b7b07e9ae2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dish/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dish/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dish/index.html.twig", 1);
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
        echo "<div class=\"row\">
<img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/boeuf-bourguignon2.jpg"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
</div>
<h1 class=\"dishes-title text-center \">Nos plats</h1>
<div class=\"row dish-starter\">
    <h2 class= \"starter-title text-center\">Les entrées</h2>
    <div class=\"starter-content\">
        <p>entrée 1</p>
    </div>
</div>
<div class=\"row dish-meat\">
    <h2 class= \"meat-title text-center\">Les viandes</h2>
    <div class=\"meat-content\">
        <p>viande 1</p>
    </div>
</div>
<div class=\"row dish-side\">
    <h2 class= \"side-title text-center\">Les accompagnements</h2>
    <div class=\"side-content\">
        <p>Accompagnement 1</p>        
    </div>
</div>
<div class=\"row dish-dessert\">
    <h2 class= \"dessert-title text-center\">Les desserts</h2>
    <div class=\"dessert-content\">
        <p>Dessert 1</p>        
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dish/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"row\">
<img src=\"{{ asset('build/images/boeuf-bourguignon2.jpg') }}\" class=\"d-block w-100\" alt=\"Plat\" height=\"500\">
</div>
<h1 class=\"dishes-title text-center \">Nos plats</h1>
<div class=\"row dish-starter\">
    <h2 class= \"starter-title text-center\">Les entrées</h2>
    <div class=\"starter-content\">
        <p>entrée 1</p>
    </div>
</div>
<div class=\"row dish-meat\">
    <h2 class= \"meat-title text-center\">Les viandes</h2>
    <div class=\"meat-content\">
        <p>viande 1</p>
    </div>
</div>
<div class=\"row dish-side\">
    <h2 class= \"side-title text-center\">Les accompagnements</h2>
    <div class=\"side-content\">
        <p>Accompagnement 1</p>        
    </div>
</div>
<div class=\"row dish-dessert\">
    <h2 class= \"dessert-title text-center\">Les desserts</h2>
    <div class=\"dessert-content\">
        <p>Dessert 1</p>        
    </div>
</div>
{% endblock %}
", "dish/index.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\dish\\index.html.twig");
    }
}
