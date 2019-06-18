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

/* @webprofiler/Collector/performance_timing.html.twig */
class __TwigTemplate_3e7193b82d9bc93f78101a98e0c2aed1d6188db01c46a83f44463ff8ba7d0b02 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 1, "set" => 2];
        $filters = ["escape" => 3, "t" => 4, "default" => 35];
        $functions = ["url" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['escape', 't', 'default'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/performance_timing.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "performance_timing"]), "html", null, true);
        echo "\"
       title=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Performance Timing"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Performance Timing"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\"/>
        <span id=\"wp--frontend__toolbar\"></span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("DNS lookup"));
        echo "</b>
        <span id=\"wp--frontend__dns\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("TCP handshake"));
        echo "</b>
        <span id=\"wp--frontend__tcp\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("TTFB");
        echo "</b>
        <span id=\"wp--frontend__ttfb\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Data download"));
        echo "</b>
        <span id=\"wp--frontend__data\"></span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("DOM building"));
        echo "</b>
        <span id=\"wp--frontend__dom\"></span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
    </div>

    <script>
        var perf = performance.timing,
                dns = parseInt(perf.domainLookupEnd - perf.domainLookupStart),
                tcp = parseInt(perf.connectEnd - perf.connectStart),
                ttfb = parseInt(perf.responseStart - perf.connectEnd),
                data = parseInt(perf.responseEnd - perf.responseStart),
                dom = parseInt(perf.loadEventStart - perf.responseEnd);

        Webprofiler.ajax('";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.frontend.save", ["profile" => ($context["token"] ?? null)]), "html", null, true);
        echo "', false, JSON.stringify(perf));

        document.getElementById('wp--frontend__toolbar').innerHTML = ttfb + ' ms';
        document.getElementById('wp--frontend__dns').innerHTML = dns + ' ms';
        document.getElementById('wp--frontend__tcp').innerHTML = tcp + ' ms';
        document.getElementById('wp--frontend__ttfb').innerHTML = ttfb + ' ms';
        document.getElementById('wp--frontend__data').innerHTML = data + ' ms';
        document.getElementById('wp--frontend__dom').innerHTML = dom + ' ms';
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    <script id=\"performance_timing\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Performance timing"));
        echo "</h2>
        <div class=\"panel__container\">
            <% if(data.performance && data.performance.computed) { %>
                <table class=\"table--duo\">
                    <% _.each( data.performance.computed, function( item, key ){ %>
                    <tr>
                        <th><%- key %></th>
                        <td><%- Drupal.webprofiler.helpers.printTime(item) %></td>
                    </tr>
                    <% }); %>
                </table>
            <% } else { %>
                <p>";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No collected data, maybe this profile hasn't been generated by a browser GET o has been generated by an unsupported browser."));
        echo "</p>
            <% } %>
        </div>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/performance_timing.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  206 => 72,  191 => 60,  188 => 59,  182 => 58,  165 => 47,  151 => 36,  147 => 35,  143 => 33,  136 => 29,  129 => 25,  122 => 21,  115 => 17,  108 => 13,  104 => 11,  101 => 10,  94 => 6,  90 => 5,  86 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 58,  62 => 57,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/performance_timing.html.twig", "/var/www/html/modules/devel/webprofiler/templates/Collector/performance_timing.html.twig");
    }
}
