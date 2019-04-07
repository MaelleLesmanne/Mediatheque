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

/* SyliusShopBundle:Common:_address.html.twig */
class __TwigTemplate_44bf51b73c7c06b2d51a1abd63e6143629ab1190c7cf3b61a6efd7245fe773d2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common:_address.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common:_address.html.twig"));

        // line 1
        echo "<address>
    ";
        // line 2
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 2, $this->source); })()), "company", []))) {
            // line 3
            echo "        <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 3, $this->source); })()), "company", []), "html", null, true);
            echo "</strong><br>
    ";
        }
        // line 5
        echo "    <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 5, $this->source); })()), "firstName", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 5, $this->source); })()), "lastName", []), "html", null, true);
        echo "</strong><br>
    ";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 6, $this->source); })()), "phoneNumber", []))) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 7, $this->source); })()), "phoneNumber", []), "html", null, true);
            echo "<br/>
    ";
        }
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 9, $this->source); })()), "street", []), "html", null, true);
        echo "<br/>
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 10, $this->source); })()), "city", []), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 10, $this->source); })()), "postcode", []), "html", null, true);
        echo "<br/>
    ";
        // line 11
        if ( !twig_test_empty(call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), [(isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 11, $this->source); })())]))) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), [(isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 12, $this->source); })())]), "html", null, true);
            echo "<br/>
    ";
        }
        // line 14
        echo "    <i class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 14, $this->source); })()), "countryCode", [])), "html", null, true);
        echo " flag\"></i>
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension']->translateCountryIsoCode(twig_get_attribute($this->env, $this->source, (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new RuntimeError('Variable "address" does not exist.', 15, $this->source); })()), "countryCode", []))), "html", null, true);
        echo "
</address>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 15,  86 => 14,  80 => 12,  78 => 11,  72 => 10,  67 => 9,  61 => 7,  59 => 6,  52 => 5,  46 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<address>
    {% if address.company is not null %}
        <strong>{{ address.company }}</strong><br>
    {% endif %}
    <strong>{{ address.firstName }} {{ address.lastName }}</strong><br>
    {% if address.phoneNumber is not null %}
        {{ address.phoneNumber }}<br/>
    {% endif %}
    {{ address.street }}<br/>
    {{ address.city }}, {{ address.postcode }}<br/>
    {% if address|sylius_province_name is not empty %}
        {{ address|sylius_province_name }}<br/>
    {% endif %}
    <i class=\"{{ address.countryCode|lower }} flag\"></i>
    {{ address.countryCode|sylius_country_name|upper }}
</address>
", "SyliusShopBundle:Common:_address.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/_address.html.twig");
    }
}
