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

/* SyliusShopBundle:ProductReview:_list.html.twig */
class __TwigTemplate_5f5c862cbc669b222913bf22982e79f6bd8b4524922b4786ea7bb40f14fbeef7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SyliusShopBundle:ProductReview:_list.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "SyliusShopBundle:ProductReview:_list.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new RuntimeError('Variable "product_reviews" does not exist.', 3, $this->source); })())) > 0)) {
            // line 4
            echo "    <div class=\"ui large comments\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new RuntimeError('Variable "product_reviews" does not exist.', 5, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 6
                echo "            ";
                $this->loadTemplate("@SyliusShop/ProductReview/_single.html.twig", "SyliusShopBundle:ProductReview:_list.html.twig", 6)->display($context);
                // line 7
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
";
        } else {
            // line 10
            echo "    ";
            echo $context["messages"]->macro_info("sylius.ui.there_are_no_reviews");
            echo "
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:ProductReview:_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 10,  85 => 8,  71 => 7,  68 => 6,  51 => 5,  48 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% if product_reviews|length > 0 %}
    <div class=\"ui large comments\">
        {% for review in product_reviews %}
            {% include '@SyliusShop/ProductReview/_single.html.twig' %}
        {% endfor %}
    </div>
{% else %}
    {{ messages.info('sylius.ui.there_are_no_reviews') }}
{% endif %}
", "SyliusShopBundle:ProductReview:_list.html.twig", "/mnt/d/Fac/L3/Mediatheque/Mediatheque/vendor/sylius/sylius/src/Sylius/Bundle/ShopBundle/Resources/views/ProductReview/_list.html.twig");
    }
}
