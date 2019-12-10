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

/* index/_card.html.twig */
class __TwigTemplate_dae076a0c743e960b4a0652ac0faf3a2a44c021c2b512f8682c11571315a855e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/_card.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/_card.html.twig"));

        // line 1
        echo "<div class=\"card card-accent-dark\">
    <div class=\"card-body\">
        <h5 class=\"card-title\" style=\"font-weight:bold;\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ponts"]) || array_key_exists("ponts", $context) ? $context["ponts"] : (function () { throw new RuntimeError('Variable "ponts" does not exist.', 3, $this->source); })()), "elem_patri", [], "any", false, false, false, 3), "html", null, true);
        echo "</h5>
        <div class=\"card-title\">
            ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ponts"]) || array_key_exists("ponts", $context) ? $context["ponts"] : (function () { throw new RuntimeError('Variable "ponts" does not exist.', 5, $this->source); })()), "commune", [], "any", false, false, false, 5), "html", null, true);
        echo " - N° ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ponts"]) || array_key_exists("ponts", $context) ? $context["ponts"] : (function () { throw new RuntimeError('Variable "ponts" does not exist.', 5, $this->source); })()), "identifiant", [], "any", false, false, false, 5), "html", null, true);
        echo "
        </div>
        <p class=\"text text-muted\"> ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ponts"]) || array_key_exists("ponts", $context) ? $context["ponts"] : (function () { throw new RuntimeError('Variable "ponts" does not exist.', 7, $this->source); })()), "elem_princ", [], "any", false, false, false, 7), "html", null, true);
        echo "</p>
    </div>
    <div class=\"card-footer\">
        <h5 class=\"text-right\"><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\" class=\"far fa-heart f-left\"></a></h5>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index/_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 7,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card card-accent-dark\">
    <div class=\"card-body\">
        <h5 class=\"card-title\" style=\"font-weight:bold;\">{{ ponts.elem_patri }}</h5>
        <div class=\"card-title\">
            {{ ponts.commune }} - N° {{ ponts.identifiant }}
        </div>
        <p class=\"text text-muted\"> {{ ponts.elem_princ }}</p>
    </div>
    <div class=\"card-footer\">
        <h5 class=\"text-right\"><a href=\"{{ path('index') }}\" class=\"far fa-heart f-left\"></a></h5>
    </div>
</div>", "index/_card.html.twig", "C:\\XAMPP\\htdocs\\PPE\\PROJET OFILDELO\\ofildelo\\api\\templates\\index\\_card.html.twig");
    }
}
