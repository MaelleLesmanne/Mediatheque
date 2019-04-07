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

/* SyliusShopBundle:Common/Order/Table:_headers.html.twig */
class __TwigTemplate_56c9b9c7238e0a0caee34d1e42f17c0df4abf4b770e6176b703c6c43ed2fe098 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_headers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_headers.html.twig"));

        // line 1
        echo "<tr>
    <th class=\"sylius-table-column-item\">";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
    <th class=\"sylius-table-column-price\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.price"), "html", null, true);
        echo "</th>
    <th class=\"sylius-table-column-qty\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.qty"), "html", null, true);
        echo "</th>
    <th class=\"sylius-table-column-subtotal\">";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</th>
</tr>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  52 => 4,  48 => 3,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <th class=\"sylius-table-column-item\">{{ 'sylius.ui.item'|trans }}</th>
    <th class=\"sylius-table-column-price\">{{ 'sylius.ui.price'|trans }}</th>
    <th class=\"sylius-table-column-qty\">{{ 'sylius.ui.qty'|trans }}</th>
    <th class=\"sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
</tr>
", "SyliusShopBundle:Common/Order/Table:_headers.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/Common/Order/Table/_headers.html.twig");
    }
}