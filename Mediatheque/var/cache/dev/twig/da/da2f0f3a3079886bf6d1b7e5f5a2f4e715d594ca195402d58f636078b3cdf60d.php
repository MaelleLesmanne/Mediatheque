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

/* SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig */
class __TwigTemplate_9dc4696a4e595b058bb48724a3764a7326b2f4532cce6566684bfd8ea477b397 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig"));

        // line 1
        if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [])) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", []), "customer", []))) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", []), "customer", []), "addresses", [])) > 0))) {
            // line 2
            echo "    <div class=\"ui fluid floating dropdown labeled search icon button address-book-select\">
        <i class=\"book icon\"></i>
        <span class=\"text\">";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.select_address_from_book"), "html", null, true);
            echo "</span>
        <div class=\"menu\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", []), "customer", []), "addresses", []));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 7
                echo "                <div class=\"item\"
                     data-id=\"";
                // line 8
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "id", []), "html", null, true);
                echo "\"
                     data-first-name=\"";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "firstName", []), "html", null, true);
                echo "\"
                     data-last-name=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lastName", []), "html", null, true);
                echo "\"
                     data-company=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "company", []), "html", null, true);
                echo "\"
                     data-street=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", []), "html", null, true);
                echo "\"
                     data-country-code=\"";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "countryCode", []), "html", null, true);
                echo "\"
                     data-province-code=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "provinceCode", []), "html", null, true);
                echo "\"
                     data-province-name=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "provinceName", []), "html", null, true);
                echo "\"
                     data-city=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", []), "html", null, true);
                echo "\"
                     data-postcode=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postcode", []), "html", null, true);
                echo "\"
                     data-phone-number=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "phoneNumber", []), "html", null, true);
                echo "\"
                >
                    <strong>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "firstName", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "lastName", []), "html", null, true);
                echo "</strong>, ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "street", []), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "city", []), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["address"], "postcode", []), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(twig_get_attribute($this->env, $this->source, $context["address"], "countryCode", [])), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 23,  104 => 20,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  56 => 7,  52 => 6,  47 => 4,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user is not empty and app.user.customer is not empty and app.user.customer.addresses|length > 0 %}
    <div class=\"ui fluid floating dropdown labeled search icon button address-book-select\">
        <i class=\"book icon\"></i>
        <span class=\"text\">{{ 'sylius.ui.select_address_from_book'|trans }}</span>
        <div class=\"menu\">
            {% for address in app.user.customer.addresses %}
                <div class=\"item\"
                     data-id=\"{{ address.id }}\"
                     data-first-name=\"{{ address.firstName }}\"
                     data-last-name=\"{{ address.lastName }}\"
                     data-company=\"{{ address.company }}\"
                     data-street=\"{{ address.street }}\"
                     data-country-code=\"{{ address.countryCode }}\"
                     data-province-code=\"{{ address.provinceCode }}\"
                     data-province-name=\"{{ address.provinceName }}\"
                     data-city=\"{{ address.city }}\"
                     data-postcode=\"{{ address.postcode }}\"
                     data-phone-number=\"{{ address.phoneNumber }}\"
                >
                    <strong>{{ address.firstName }} {{ address.lastName }}</strong>, {{ address.street }}, {{ address.city }} {{ address.postcode }}, {{ address.countryCode|sylius_country_name }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endif %}
", "SyliusShopBundle:Checkout/Address:_addressBookSelect.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Checkout/Address/_addressBookSelect.html.twig");
    }
}
