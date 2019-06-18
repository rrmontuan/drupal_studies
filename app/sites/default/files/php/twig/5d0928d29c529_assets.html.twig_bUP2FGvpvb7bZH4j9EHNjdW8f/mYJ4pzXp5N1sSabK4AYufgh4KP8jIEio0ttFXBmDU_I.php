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

/* @webprofiler/Collector/assets.html.twig */
class __TwigTemplate_b13ffcc5b60e19bd833048b8f2927ef4344d0f1f17c52ed4381cc42b2bb73360 extends \Twig\Template
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
        $filters = ["escape" => 3, "t" => 3, "default" => 22];
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/assets.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 26
        echo "
";
        // line 27
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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "assets"]), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Assets"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Assets"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->getAttribute(($context["collector"] ?? null), "getcsscount", []) + $this->getAttribute(($context["collector"] ?? null), "getjscount", [])), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>CSS</b>
        <span>";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getcsscount", [])), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>JS</b>
        <span>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getjscount", [])), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"assets\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Assets"));
        echo "</h2>
        <div class=\"tabs\">
            <% if( data.js.length != 0){ %>
            <input class=\"tabs__radio\" type=\"radio\" id=\"js\" name=\"tabs\" checked/>
            <% } %>
            <% if( data.js.length != 0){ %>
            <input class=\"tabs__radio\" type=\"radio\" id=\"css\" name=\"tabs\"/>
            <% } %>
            <ul class=\"tabs__tabs list--inline\">
                <% if( data.js.length != 0){ %>
                <li><label class=\"tabs__label\" for=\"js\">JS</label></li>
                <% } %>
                <% if( data.js.length != 0){ %>
                <li><label class=\"tabs__label\" for=\"css\">CSS</label></li>
                <% } %>
            </ul>
            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <% if( data.js.length != 0){ %>
                    <% _.each( data.js, function( item, key ){ %>
                    <% if( key === 'drupalSettings' ){ %>
                    <div class=\"panel__container\">
                        <div class=\"panel__expand-header \">
                            <ul class=\"list--inline\">
                                <li><b>asset</b> <%- key %></li>
                            </ul>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Data"));
        echo "</div>
                        </div>
                        <div class=\"panel__expand-content\">
                            <% if(item.data && item.data.length != 0){ %>
                        <pre>
                            <code class=\"code--json \"><%= JSON.stringify(item.data, null, 4) %></code>
                        </pre>
                            <% } %>
                            <table class=\"table--duo\">
                                <% _.each( item, function( item, key ){ %>
                                <tr>
                                    <% if(key != 'data'){ %>
                                    <th><%- key %></th>
                                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                                    <% } %>
                                </tr>
                                <% }); %>
                            </table>
                        </div>
                    </div>
                    <% } else { %>
                    <div class=\"panel__container\">
                        <div class=\"panel__expand-header \">
                            <ul class=\"list--inline\">
                                <li><b>asset</b> <%= Drupal.webprofiler.helpers.classLink({\"file\":
                                    data.assets.installation_path + key, \"class\": key, \"line\": 0}) %>
                                </li>
                                <li><b>version</b> <%- item.version %></li>
                                <li><b>scope</b> <%- item.scope %></li>
                            </ul>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Data"));
        echo "</div>
                        </div>
                        <div class=\"panel__expand-content\">
                            <table class=\"table--duo\">
                                <% _.each( item, function( item, key ){ %>
                                <tr>
                                    <th><%- key %></th>
                                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                                </tr>
                                <% }); %>
                            </table>
                        </div>
                    </div>
                    <% } %>
                    <% }); %>
                    <% } %>
                </div>
                <div class=\"tabs__panel\">
                    <% if( data.css.length != 0){ %>
                    <% _.each( data.css, function( item, key ){ %>
                    <div class=\"panel__container\">
                        <div class=\"panel__expand-header \">
                            <ul class=\"list--inline\">
                                <li><b>asset</b> <%= Drupal.webprofiler.helpers.classLink({\"file\":
                                    data.assets.installation_path + key, \"class\": key, \"line\": 0}) %>
                                </li>
                                <li><b>version</b> <%- item.version %></li>
                            </ul>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Data"));
        echo "</div>
                        </div>
                        <div class=\"panel__expand-content\">
                            <table class=\"table--duo\">
                                <% _.each( item, function( item, key ){ %>
                                <tr>
                                    <th><%- key %></th>
                                    <td><%= Drupal.webprofiler.helpers.frm(item) %></td>
                                </tr>
                                <% }); %>
                            </table>
                        </div>
                    </div>
                    <% }); %>
                </div>
            </div>
        </div>

        <% } %>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/assets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  243 => 113,  212 => 85,  179 => 55,  150 => 29,  147 => 28,  141 => 27,  131 => 23,  127 => 22,  123 => 20,  117 => 17,  110 => 13,  105 => 10,  102 => 9,  96 => 6,  92 => 5,  88 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 27,  62 => 26,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/assets.html.twig", "/var/www/html/modules/devel/webprofiler/templates/Collector/assets.html.twig");
    }
}
