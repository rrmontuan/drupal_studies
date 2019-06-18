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

/* @webprofiler/Collector/request.html.twig */
class __TwigTemplate_d246208b03b023ea2078b0bb1858699fd5188d0a3c3133b0b597b7b2c3a2495b extends \Twig\Template
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
        $tags = ["block" => 1, "set" => 2, "spaceless" => 21];
        $filters = ["raw" => 3, "escape" => 4, "t" => 12, "default" => 38];
        $functions = ["idelink" => 3, "abbr" => 3, "url" => 12];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'spaceless'],
                ['raw', 'escape', 't', 'default'],
                ['idelink', 'abbr', 'url']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/request.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 42
        echo "
";
        // line 43
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\webprofiler\Twig\Extension\ProfilerExtension')->getIdeLink($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "file", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "line", []))));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\webprofiler\Twig\Extension\ProfilerExtension')->getAbbr($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "class", []))));
        echo "
        ::";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "controller", []), "method", [])), "html", null, true);
        echo "</a>
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo "
    ";
        // line 7
        $context["request_status_code_color"] = (((400 > $this->getAttribute(($context["collector"] ?? null), "statuscode", []))) ? ((((200 == $this->getAttribute(($context["collector"] ?? null), "statuscode", []))) ? ("green") : ("yellow"))) : ("red"));
        // line 8
        echo "
    ";
        // line 9
        $context["request_route"] = (($this->getAttribute(($context["collector"] ?? null), "route", [])) ? ($this->getAttribute(($context["collector"] ?? null), "route", [])) : ("NONE"));
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "request"]), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Request"));
        echo "\">
        <img width=\"28\" height=\"28\" alt=\"";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Request"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\">
    <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["request_status_code_color"] ?? null)), "html", null, true);
        echo "\"
          title=\"";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "statustext", [])), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "statuscode", [])), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 19
        echo "
    ";
        // line 20
        ob_start();
        // line 21
        echo "    ";
        ob_start();
        // line 22
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Status"));
        echo "</b>
            <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["request_status_code_color"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "statuscode", [])), "html", null, true);
        echo "</span> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "statustext", [])), "html", null, true);
        echo "
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Controller"));
        echo "</b>
            ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["request_handler"] ?? null)), "html", null, true);
        echo "
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Route name"));
        echo "</b>
            <span>";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["request_route"] ?? null)), "html", null, true);
        echo "</span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 35
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 36
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 43
    public function block_panel($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <script id=\"request\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Request"));
        echo "</h2>

        <% if (!_.isEmpty(data.request_query)) { %>
        <div class=\"panel__container\">
            <h3>GET parameters</h3>
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                <th>";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Value"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_query, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%- item %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% } %>

        <% if (!_.isEmpty(data.request_request)) { %>
        <div class=\"panel__container\">
            <h3>POST parameters</h3>
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                <th>";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Value"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_request, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% } %>

        <div class=\"panel__container\">
            <h3>Request attributes</h3>
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                <th>";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Value"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_attributes, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <% if(key == '_controller') { %>
                    <td><%= Drupal.webprofiler.helpers.classLink(data.controller) %></td>
                    <% } else if(key == '_form') { %>
                    <td><%= Drupal.webprofiler.helpers.classLink(data.controller) %></td>
                    <% } else { %>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                    <% } %>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>

        <% if (!_.isEmpty(data.request_cookies)) { %>
        <div class=\"panel__container\">
            <h3>Cookies</h3>
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 116
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                <th>";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Value"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_cookies, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% } %>

        <div class=\"panel__container\">
            <h3>Request headers</h3>
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 135
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                <th>";
        // line 136
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Value"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_headers, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>

        <% if (!_.isEmpty(data.content)) { %>
        <div class=\"panel__container\">
            <h3>Raw content</h3>
            <div class=\"h--word-broken\"><%- data.content %></div>
        </div>
        <% } %>

        <% if (!_.isEmpty(data.access_check)) { %>
        <div class=\"panel__container\">
            <h3>Access check</h3>
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 161
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Path"));
        echo "</th>
                <th>";
        // line 162
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Service"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each(data.access_check, function(items, key){ %>
                <tr>
                    <td><%- key %></td>
                    <td>
                        <% _.each(items, function(item){ %>
                        <%- item.service_id %>
                        <% }); %>
                    </td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>
        <% } %>

        <div class=\"panel__container\">
            <h3>Server Parameters</h3>
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 184
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                <th>";
        // line 185
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Value"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.request_server, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
                <% }); %>
                </tbody>
            </table>
        </div>

        <div class=\"panel__container\">
            <h3>Response headers</h3>
            <table class=\"table--duo\">
                <thead>
                <th>";
        // line 202
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                <th>";
        // line 203
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Value"));
        echo "</th>
                </thead>
                <tbody>
                <% _.each( data.response_headers, function( item, key ){ %>
                <tr>
                    <td><%- key %></td>
                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                </tr>
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
        return "@webprofiler/Collector/request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  416 => 203,  412 => 202,  392 => 185,  388 => 184,  363 => 162,  359 => 161,  331 => 136,  327 => 135,  306 => 117,  302 => 116,  275 => 92,  271 => 91,  250 => 73,  246 => 72,  224 => 53,  220 => 52,  210 => 45,  207 => 44,  201 => 43,  191 => 39,  187 => 38,  183 => 36,  180 => 35,  174 => 32,  170 => 31,  164 => 28,  160 => 27,  150 => 24,  146 => 23,  143 => 22,  140 => 21,  138 => 20,  135 => 19,  127 => 16,  123 => 15,  119 => 14,  115 => 13,  108 => 12,  106 => 11,  103 => 10,  101 => 9,  98 => 8,  96 => 7,  93 => 6,  88 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 43,  62 => 42,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/request.html.twig", "/var/www/html/modules/devel/webprofiler/templates/Collector/request.html.twig");
    }
}
