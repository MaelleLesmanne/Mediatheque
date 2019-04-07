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

/* @SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig */
class __TwigTemplate_c79cca54205b2f62ef4566f045c0f0ab3385b1ca21ac3fd64e9a406751965a73 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", 1);
        // line 2
        echo "
<div class=\"title";
        // line 3
        if ((0 == twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 3, $this->source); })()), "index0", []))) {
            echo " active";
        }
        echo "\">
    <i class=\"dropdown icon\"></i>
    ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new RuntimeError('Variable "statistic" does not exist.', 5, $this->source); })()), "channel", []), "name", []), "html", null, true);
        echo "
</div>
<div class=\"content";
        // line 7
        if ((0 == twig_get_attribute($this->env, $this->source, (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new RuntimeError('Variable "loop" does not exist.', 7, $this->source); })()), "index0", []))) {
            echo " active";
        }
        echo "\">
    <div class=\"ui center aligned stackable divided grid\">
        <div class=\"four column row\">
            <div class=\"column middle aligned\">
                <div class=\"ui tiny statistic\">
                    <div class=\"value sylius-channel-name\">
                        ";
        // line 13
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new RuntimeError('Variable "statistic" does not exist.', 13, $this->source); })()), "channel", []), "color", []))) {
            // line 14
            echo "                            <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new RuntimeError('Variable "statistic" does not exist.', 14, $this->source); })()), "channel", []), "color", []), "html", null, true);
            echo "\"></span>
                        ";
        }
        // line 16
        echo "                        ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new RuntimeError('Variable "statistic" does not exist.', 16, $this->source); })()), "channel", []), "name", []), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.channel"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-count\">
                        ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new RuntimeError('Variable "statistic" does not exist.', 26, $this->source); })()), "ordersCount", []), "html", null, true);
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-total\">
                        ";
        // line 36
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new RuntimeError('Variable "statistic" does not exist.', 36, $this->source); })()), "ordersValue", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new RuntimeError('Variable "statistic" does not exist.', 36, $this->source); })()), "channel", []), "baseCurrency", []), "code", []));
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.total_value_of_orders"), "html", null, true);
        echo "
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-average-order-value\">
                        ";
        // line 46
        echo $context["money"]->macro_format(twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new RuntimeError('Variable "statistic" does not exist.', 46, $this->source); })()), "averageOrderValue", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["statistic"]) || array_key_exists("statistic", $context) ? $context["statistic"] : (function () { throw new RuntimeError('Variable "statistic" does not exist.', 46, $this->source); })()), "channel", []), "baseCurrency", []), "code", []));
        echo "
                    </div>
                    <div class=\"label\">
                        ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.average_order_value"), "html", null, true);
        echo "
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
        return "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  126 => 46,  116 => 39,  110 => 36,  100 => 29,  94 => 26,  84 => 19,  77 => 16,  71 => 14,  69 => 13,  58 => 7,  53 => 5,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusAdmin/Common/Macro/money.html.twig' as money %}

<div class=\"title{% if 0 == loop.index0 %} active{% endif %}\">
    <i class=\"dropdown icon\"></i>
    {{ statistic.channel.name }}
</div>
<div class=\"content{% if 0 == loop.index0 %} active{% endif %}\">
    <div class=\"ui center aligned stackable divided grid\">
        <div class=\"four column row\">
            <div class=\"column middle aligned\">
                <div class=\"ui tiny statistic\">
                    <div class=\"value sylius-channel-name\">
                        {% if statistic.channel.color is not empty %}
                            <span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ statistic.channel.color }}\"></span>
                        {% endif %}
                        {{ statistic.channel.name }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.channel'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-count\">
                        {{ statistic.ordersCount }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.orders'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-orders-total\">
                        {{ money.format(statistic.ordersValue, statistic.channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.total_value_of_orders'|trans }}
                    </div>
                </div>
            </div>
            <div class=\"column middle aligned\">
                <div class=\"ui statistic\">
                    <div class=\"value sylius-average-order-value\">
                        {{ money.format(statistic.averageOrderValue, statistic.channel.baseCurrency.code) }}
                    </div>
                    <div class=\"label\">
                        {{ 'sylius.ui.average_order_value'|trans }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/AdminBundle/Resources/views/Customer/Show/Statistics/_perChannel.html.twig");
    }
}
