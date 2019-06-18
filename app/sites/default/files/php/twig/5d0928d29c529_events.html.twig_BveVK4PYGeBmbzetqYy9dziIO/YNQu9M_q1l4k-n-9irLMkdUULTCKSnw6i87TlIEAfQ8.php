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

/* @webprofiler/Collector/events.html.twig */
class __TwigTemplate_d7ed08db5922b13dabf15ce475e56b6158e57c6b7b0aa8236970cf0e133a44d6 extends \Twig\Template
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
        $filters = ["escape" => 3, "t" => 3, "default" => 23];
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/events.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 27
        echo "
";
        // line 28
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
        echo "        <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "events"]), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Events"));
        echo "\">
            <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Events"));
        echo "\"
                 src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\">
            <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getCalledListenersCount", [])), "html", null, true);
        echo "</span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
    ";
        // line 10
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Called"));
        echo "</b>
            <span>";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getCalledListenersCount", [])), "html", null, true);
        echo "</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Not called"));
        echo "</b>
            <span>";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getNotCalledListenersCount", [])), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 21
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 28
    public function block_panel($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 29
        echo "    <script id=\"events\" type=\"text/template\">

        <h2 class=\"panel__title\">";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Events"));
        echo "</h2>
        <div class=\"panel__container\">

            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Called listeners"));
        echo "</th>
                <th>";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Class"));
        echo "</th>
                <th>";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Priority"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.called_listeners, function( events, event_name ){ %>
                    <% _.each( events, function( priority, priority_value ){ %>
                        <% _.each( priority, function( listener ){ %>
                            <tr>
                                <td><%= event_name %></td>
                                <% if( listener.clazz ) { %>
                                    <td>
                                        <% if( listener.class == \"Closure\" ) { %>
                                            <%= \"Closure\" %>
                                        <% } else { %>
                                            <%= Drupal.webprofiler.helpers.classLink(listener.clazz) %>
                                        <% } %>
                                    </td>
                                <% } else { %>
                                    <td><%= listener.service[0] %>::<%= listener.service[1] %></td>
                                <% } %>
                                <td><%= priority_value %></td>
                            </tr>
                        <% }); %>
                    <% }); %>
                <% }); %>
                </tbody>
            </table>

            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Not called listeners"));
        echo "</th>
                <th>";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Service"));
        echo "</th>
                <th>";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Priority"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.not_called_listeners, function( events, event_name ){ %>
                <% _.each( events, function( priority, priority_value ){ %>
                <% _.each( priority, function( listener ){ %>
                <tr>
                    <td><%= event_name %></td>
                    <td><%= listener.service[0] %>::<%= listener.service[1] %></td>
                    <td><%= priority_value %></td>
                </tr>
                <% }); %>
                <% }); %>
                <% }); %>
                </tbody>
            </table>
        </div>

    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/events.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  215 => 69,  211 => 68,  207 => 67,  175 => 38,  171 => 37,  167 => 36,  159 => 31,  155 => 29,  149 => 28,  139 => 24,  135 => 23,  131 => 21,  125 => 18,  121 => 17,  114 => 13,  110 => 12,  107 => 11,  105 => 10,  102 => 9,  96 => 6,  92 => 5,  88 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 28,  62 => 27,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/events.html.twig", "/var/www/html/modules/devel/webprofiler/templates/Collector/events.html.twig");
    }
}
