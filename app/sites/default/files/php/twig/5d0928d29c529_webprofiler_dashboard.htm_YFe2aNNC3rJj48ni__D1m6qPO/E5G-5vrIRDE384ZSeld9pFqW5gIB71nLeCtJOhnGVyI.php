<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig */
class __TwigTemplate_dab017143f28e6213ef6abb84cccf275cfb4b3e885698200fa885d44f148177e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 5];
        $filters = ["escape" => 4, "upper" => 4, "date" => 12, "t" => 16];
        $functions = ["url" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'upper', 'date', 't'],
                ['url']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<div id=\"resume\" class=\"resume\">
    <span class=\"resume__subtitle\">
        ";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["profile"] ?? null), "method", []))), "html", null, true);
        echo "
        ";
        // line 5
        if (twig_in_filter(twig_upper_filter($this->env, $this->getAttribute(($context["profile"] ?? null), "method", [])), [0 => "GET", 1 => "HEAD"])) {
            // line 6
            echo "            <a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["profile"] ?? null), "url", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["profile"] ?? null), "url", [])), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 8
            echo "            <em>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["profile"] ?? null), "url", [])), "html", null, true);
            echo "</em>
        ";
        }
        // line 10
        echo "    </span>
    <span class=\"resume__time\">
        <em>by ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["profile"] ?? null), "ip", [])), "html", null, true);
        echo "</em> at <em>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["profile"] ?? null), "time", [])), "r"), "html", null, true);
        echo "</em>
    </span>

    <a id=\"resume-view-all\" class=\"button--flat resume__button\"
       href=\"";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.admin_list"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("View latest"));
        echo "</a>
</div>
";
        $context["resume"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo "
<div id=\"webprofiler\">

    ";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["resume"] ?? null)), "html", null, true);
        echo "

    <div id=\"collectors\" class=\"collectors panel\">
    </div>

    <div class=\"loader--fixed\" style=\"display: none\">
        <svg class=\"loader__circle\">
            <circle class=\"loader__path\" cx=\"50\" cy=\"50\" r=\"20\" fill=\"none\" stroke-width=\"2\" stroke-miterlimit=\"10\"/>
        </svg>
    </div>

    <script id=\"collector\" type=\"text/template\">
        <a href=\"#<%= id %>\" title=\"<%= summary %>\" class=\"overview__link\">
            <img src=\"data:image/png;base64,<%= icon %>\"
                 class=\"overview__icon\">
            <span class=\"overview__title\"><%= label %></span>
            <% if(typeof(summary) !== \"undefined\") { %>
            <span class=\"overview__subtitle\"><%= summary %></span>
            <% } %>
        </a>
    </script>

    ";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["panels"] ?? null)), "html", null, true);
        echo "

    <div class=\"modal js--modal\" style=\"display: none\">
        <div class=\"modal__container\">
            <div class=\"modal__bar\">
                <h3 class=\"modal__title\"></h3>
            </div>
            <div class=\"modal__content\">
                <div class=\"modal__main-data\"></div>
            </div>
            <a class=\"button--flat js--modal-close l-right\">Close</a>
        </div>
    </div>
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  110 => 22,  105 => 19,  97 => 16,  88 => 12,  84 => 10,  78 => 8,  70 => 6,  68 => 5,  64 => 4,  60 => 2,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig", "/var/www/html/modules/devel/webprofiler/templates/Profiler/webprofiler_dashboard.html.twig");
    }
}
