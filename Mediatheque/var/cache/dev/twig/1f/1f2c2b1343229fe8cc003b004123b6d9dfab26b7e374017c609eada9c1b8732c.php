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

/* SyliusAdminBundle:Taxon:_slugField.html.twig */
class __TwigTemplate_a9db6304f69e5cc50ea6eeb92a5f27610594fb08fa2205eb8db72071e016c575 extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_slugField.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Taxon:_slugField.html.twig"));

        // line 1
        echo "<div class=\"";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new RuntimeError('Variable "slugField" does not exist.', 1, $this->source); })()), "vars", []), "required", [])) {
            echo "required ";
        }
        echo "field";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new RuntimeError('Variable "slugField" does not exist.', 1, $this->source); })()), "vars", []), "errors", [])) > 0)) {
            echo " error";
        }
        echo " ui loadable form\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new RuntimeError('Variable "slugField" does not exist.', 2, $this->source); })()), 'label');
        echo "
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, (isset($context["resource"]) || array_key_exists("resource", $context) ? $context["resource"] : (function () { throw new RuntimeError('Variable "resource" does not exist.', 3, $this->source); })()), "slug", []) == null)) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new RuntimeError('Variable "slugField" does not exist.', 4, $this->source); })()), 'widget', ["attr" => ["data-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_generate_taxon_slug"), "data-parent" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", []), "attributes", []), "get", [0 => "id"], "method")]]);
            echo "
    ";
        } else {
            // line 6
            echo "    <div class=\"ui action input\">
        ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new RuntimeError('Variable "slugField" does not exist.', 7, $this->source); })()), 'widget', ["attr" => ["readonly" => "readonly", "data-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_ajax_generate_taxon_slug")]]);
            echo "
        <span class=\"ui icon button toggle-taxon-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    ";
        }
        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["slugField"]) || array_key_exists("slugField", $context) ? $context["slugField"] : (function () { throw new RuntimeError('Variable "slugField" does not exist.', 13, $this->source); })()), 'errors');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Taxon:_slugField.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 13,  67 => 7,  64 => 6,  58 => 4,  56 => 3,  52 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{% if slugField.vars.required %}required {% endif %}field{% if slugField.vars.errors|length > 0 %} error{% endif %} ui loadable form\">
    {{ form_label(slugField) }}
    {% if resource.slug == null %}
        {{ form_widget(slugField, {'attr': {'data-url': path('sylius_admin_ajax_generate_taxon_slug'), 'data-parent': app.request.attributes.get('id')}}) }}
    {% else %}
    <div class=\"ui action input\">
        {{ form_widget(slugField, {'attr': {'readonly': 'readonly', 'data-url': path('sylius_admin_ajax_generate_taxon_slug')}}) }}
        <span class=\"ui icon button toggle-taxon-slug-modification\">
            <i class=\"lock icon\"></i>
        </span>
    </div>
    {% endif %}
    {{ form_errors(slugField) }}
</div>
", "SyliusAdminBundle:Taxon:_slugField.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Taxon/_slugField.html.twig");
    }
}