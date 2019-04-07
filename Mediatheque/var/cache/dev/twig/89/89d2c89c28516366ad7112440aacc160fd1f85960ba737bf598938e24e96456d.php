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

/* SyliusUiBundle:Form/Buttons:_update.html.twig */
class __TwigTemplate_d0223e923132a56f298f166bf62f9a9ecbbaf0283bb2601054773d4405eb3162 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusUiBundle:Form/Buttons:_update.html.twig"));

        // line 1
        echo "<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.save_changes"), "html", null, true);
        echo "</button>
        ";
        // line 4
        $this->loadTemplate("@SyliusUi/Form/Buttons/_cancel.html.twig", "SyliusUiBundle:Form/Buttons:_update.html.twig", 4)->display(twig_array_merge($context, ["path" => ((twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "cancel", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["paths"] ?? null), "cancel", []), null)) : (null))]));
        // line 5
        echo "    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle:Form/Buttons:_update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 5,  49 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ui basic segment\">
    <div class=\"ui buttons\">
        <button class=\"ui labeled icon primary button\" type=\"submit\" id=\"sylius_save_changes_button\"><i class=\"save icon\"></i> {{ 'sylius.ui.save_changes'|trans }}</button>
        {% include '@SyliusUi/Form/Buttons/_cancel.html.twig' with {'path': paths.cancel|default(null)} %}
    </div>
</div>
", "SyliusUiBundle:Form/Buttons:_update.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/UiBundle/Resources/views/Form/Buttons/_update.html.twig");
    }
}
