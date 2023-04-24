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

/* home/last_dish_access.html.twig */
class __TwigTemplate_b0f70bd73e257e177848590ee939fb8367c32dd8844b076292003acfd2e9e7ad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/last_dish_access.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/last_dish_access.html.twig"));

        // line 2
        echo "<div class=\"access-last-dish my-4\">
<div class=\"row\">
<div class=\"col-lg-6 mb-3\">
    <div class=\"access-card my-3 mx-3 p-3 rounded-3\">
      <div class=\"card-body\">
        <h5 class=\"card-title text-center p-3\">Notre dernier chef d'oeuvre</h5>
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/saumon-renversé.jpg"), "html", null, true);
        echo "\" class=\"img-fluid cover\" alt=\"...\">               
      </div>
    </div>
  </div>
  <div class=\"col-lg-6 mb-3\">
    <div class=\"access-card my-3 mx-3 p-3 rounded-3\">
      <div class=\"card-body\">
        <h5 class=\"card-title text-center p-3\">Retrouvez-nous ici</h5>
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44678.617983129!2d5.871332959652342!3d45.58222920009456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba85708695f63%3A0xd5c21acfa63d899c!2s73000%20Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1681236111774!5m2!1sfr!2sfr\" width=\"100%\" height=\"100%\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/last_dish_access.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Dernier chef-oeuvre et Acces #}
<div class=\"access-last-dish my-4\">
<div class=\"row\">
<div class=\"col-lg-6 mb-3\">
    <div class=\"access-card my-3 mx-3 p-3 rounded-3\">
      <div class=\"card-body\">
        <h5 class=\"card-title text-center p-3\">Notre dernier chef d'oeuvre</h5>
            <img src=\"{{ asset('build/images/saumon-renversé.jpg') }}\" class=\"img-fluid cover\" alt=\"...\">               
      </div>
    </div>
  </div>
  <div class=\"col-lg-6 mb-3\">
    <div class=\"access-card my-3 mx-3 p-3 rounded-3\">
      <div class=\"card-body\">
        <h5 class=\"card-title text-center p-3\">Retrouvez-nous ici</h5>
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44678.617983129!2d5.871332959652342!3d45.58222920009456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478ba85708695f63%3A0xd5c21acfa63d899c!2s73000%20Chamb%C3%A9ry!5e0!3m2!1sfr!2sfr!4v1681236111774!5m2!1sfr!2sfr\" width=\"100%\" height=\"100%\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
", "home/last_dish_access.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\home\\last_dish_access.html.twig");
    }
}
