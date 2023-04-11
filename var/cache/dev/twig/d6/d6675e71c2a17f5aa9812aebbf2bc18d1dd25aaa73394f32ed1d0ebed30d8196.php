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

/* home/contact_access.html.twig */
class __TwigTemplate_7473b2118886f654447ddcadac4596afdf576b8276cc83d0202d759c064f6f85 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact_access.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact_access.html.twig"));

        // line 2
        echo "<div class=\"acces-contact\">
<div class=\"row\">
  <div class=\"col-sm-6 mb-3 mb-sm-0\">
    <div class=\"contact-card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Contactez-nous</h5>
        <div class=\"mb-3\">
            <label for=\"exampleFormControlInput1\" class=\"form-label\">Adresse mail</label>
             <input type=\"email\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Votre message</label>
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
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/chambéry_map.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"...\">

      </div>
    </div>
  </div>
</div>
</div></div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/contact_access.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Contact et Access #}
<div class=\"acces-contact\">
<div class=\"row\">
  <div class=\"col-sm-6 mb-3 mb-sm-0\">
    <div class=\"contact-card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Contactez-nous</h5>
        <div class=\"mb-3\">
            <label for=\"exampleFormControlInput1\" class=\"form-label\">Adresse mail</label>
             <input type=\"email\" class=\"form-control\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\">
        </div>
        <div class=\"mb-3\">
            <label for=\"exampleFormControlTextarea1\" class=\"form-label\">Votre message</label>
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
", "home/contact_access.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\home\\contact_access.html.twig");
    }
}
