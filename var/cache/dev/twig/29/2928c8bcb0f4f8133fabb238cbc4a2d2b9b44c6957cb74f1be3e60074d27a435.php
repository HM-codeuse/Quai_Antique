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

/* home/contact.html.twig */
class __TwigTemplate_375ed7b881add83d5acd621486461d2f24ecfdd32d51928506c0861cfecfe583 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        // line 1
        echo "<div class=\"contact-form\">
    <h3 class=\"contact-form-title text-center m-4\">Contactez-nous</h3>
        <div class=\"row align-items-center m-3\">
            <div class=\"contact-mail col-2 \">
                <label for=\"MailInput\" class=\"form-label\">Adresse mail</label>
            </div>
            <div class=\"contact-mail col-9 \">
                <input type=\"email\" class=\"form-control\" id=\"MailInput\" placeholder=\"name@example.com\">
            </div>
        </div>
        <div class=\"row g-2 align-items-center m-3\">
            <div class=\"contact-message col-2\">
                <label for=\"MessageInput\" class=\"form-label\">Votre message</label>
            </div>
            <div class=\"contact-message col-9\">
                <textarea class=\"form-control\" id=\"MessageInput\" rows=\"10\"></textarea>
            </div>
            <div class=\" valdation-form d-grid col-6 mx-auto\">
                <button class=\"btn-primary my-2 p-2 rounded-4\" type=\"submit\">Envoyer</button>
            </div>
        </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"contact-form\">
    <h3 class=\"contact-form-title text-center m-4\">Contactez-nous</h3>
        <div class=\"row align-items-center m-3\">
            <div class=\"contact-mail col-2 \">
                <label for=\"MailInput\" class=\"form-label\">Adresse mail</label>
            </div>
            <div class=\"contact-mail col-9 \">
                <input type=\"email\" class=\"form-control\" id=\"MailInput\" placeholder=\"name@example.com\">
            </div>
        </div>
        <div class=\"row g-2 align-items-center m-3\">
            <div class=\"contact-message col-2\">
                <label for=\"MessageInput\" class=\"form-label\">Votre message</label>
            </div>
            <div class=\"contact-message col-9\">
                <textarea class=\"form-control\" id=\"MessageInput\" rows=\"10\"></textarea>
            </div>
            <div class=\" valdation-form d-grid col-6 mx-auto\">
                <button class=\"btn-primary my-2 p-2 rounded-4\" type=\"submit\">Envoyer</button>
            </div>
        </div>
</div>
", "home/contact.html.twig", "C:\\xampp\\htdocs\\Quai_Antique\\templates\\home\\contact.html.twig");
    }
}
