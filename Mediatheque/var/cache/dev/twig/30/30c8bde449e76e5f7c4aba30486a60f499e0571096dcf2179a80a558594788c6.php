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

/* SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig */
class __TwigTemplate_ad241c75311f76581bfea7a05bf029817855cdf04e1c97e85eaa88c0321b3482 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig"));

        // line 1
        echo "<div class=\"ui fluid action input\" id=\"attributeChoice\" data-action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_admin_render_attribute_forms");
        echo "\" style=\"margin-bottom: 15px;\">
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'widget', ["attr" => ["class" => "ui fluid search dropdown", "id" => "sylius_product_attribute_choice"]]);
        echo "
    <button class=\"ui green labeled icon button\" type=\"button\">
        <i class=\"icon plus\"></i> ";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.add_attributes"), "html", null, true);
        echo "
    </button>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 4,  46 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui fluid action input\" id=\"attributeChoice\" data-action=\"{{ path('sylius_admin_render_attribute_forms') }}\" style=\"margin-bottom: 15px;\">
    {{ form_widget(form, {'attr': {'class': 'ui fluid search dropdown', 'id': 'sylius_product_attribute_choice'}}) }}
    <button class=\"ui green labeled icon button\" type=\"button\">
        <i class=\"icon plus\"></i> {{ 'sylius.ui.add_attributes'|trans }}
    </button>
</div>
", "SyliusAdminBundle:Product/Attribute:attributeChoice.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Product/Attribute/attributeChoice.html.twig");
    }
}
