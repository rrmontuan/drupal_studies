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

/* @webprofiler/Collector/services.html.twig */
class __TwigTemplate_070ffb8e89b1e02b442502ea3afb6903aa6905432d546157cc8cef4b79faa11f extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/services.html.twig"));

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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "services"]), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Services"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Services"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getInitializedServicesCount", [])), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Initialized"));
        echo "</b>
        <span>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getInitializedServicesCount", [])), "html", null, true);
        echo " (";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getInitializedServicesWithoutWebprofilerCount", [])), "html", null, true);
        echo "
            )</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Available"));
        echo "</b>
        <span>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getServicesCount", [])), "html", null, true);
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
        echo "    <script id=\"services\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Services"));
        echo "</h2>
        <div class=\"tabs\">
            <input class=\"tabs__radio\" type=\"radio\" id=\"services\" name=\"tabs\" checked/>
            <input class=\"tabs__radio\" type=\"radio\" id=\"http_middleware\" name=\"tabs\"/>
            <ul class=\"tabs__tabs list--inline\">
                <li><label class=\"tabs__label\" for=\"services\">services</label></li>
                <li><label class=\"tabs__label\" for=\"http_middleware\">middleware</label></li>
            </ul>

            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <form class=\"panel__toolbar\">
                        <div class=\"panel__filter--text\">
                            <input id=\"edit-sid\" class=\"js--live-filter\" placeholder=\"";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID"));
        echo "\" type=\"text\"/>
                            <label for=\"edit-sid\" class=\"panel__filter-label\">";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID"));
        echo "</label>
                        </div>
                        <div class=\"panel__filter--text\">
                            <input id=\"edit-class\" class=\"js--live-filter\" placeholder=\"";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Class"));
        echo "\" type=\"text\"/>
                            <label for=\"edit-class\" class=\"panel__filter-label\">";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Class"));
        echo "</label>
                        </div>
                        <div class=\"panel__filter--text\">
                            <input id=\"edit-tags\" class=\"js--live-filter\" placeholder=\"";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tags"));
        echo "\" type=\"text\"/>
                            <label for=\"edit-tags\" class=\"panel__filter-label\">";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tags"));
        echo "</label>
                        </div>
                        <div class=\"panel__filter--select\">
                            <select id=\"edit-initialized\" class=\"js--live-filter\">
                                <option value=\"\">";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Any"));
        echo "</option>
                                <option value=\"1\">";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Yes"));
        echo "</option>
                                <option value=\"0\">";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No"));
        echo "</option>
                            </select>
                            <label for=\"edit-initialized\" class=\"panel__filter-label\">";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Initialized"));
        echo "</label>
                        </div>
                    </form>

                    <% _.each( data.services, function( item, key ){ %>

                    <% clazz = Drupal.webprofiler.helpers.classLink({\"file\" : item.value.file, \"class\" :
                    item.value.class}) %>
                    <% depends = _.map(item.outEdges, function(el) { return el.id; }).join(', ') %>
                    <% tags = _.map(item.value.tags, function(el, key) { return key; }).join(', ') %>

                    <div class=\"panel__container\"
                         data-wp-sid=\"<%- key %>\"
                         data-wp-class=\"<%- item.value.class %>\"
                         data-wp-tags=\"<%- tags %>\"
                         data-wp-initialized=\"<%- (item.initialized) ? '1' : '0' %>\">

                        <div class=\"panel__expand-header\">
                            <ul class=\"list--inline\">
                                <li>
                                    <b>";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID"));
        echo "</b> <%- key %>
                                </li>
                                <% if (clazz) { %>
                                <li>
                                    <b>";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Class"));
        echo "</b> <%= clazz %>
                                </li>
                                <% } %>
                                <li>
                                    <b>";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Initialized"));
        echo "</b> <%- (item.initialized) ? '";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Yes"));
        echo "' : '";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No"));
        echo "' %>
                                </li>
                                <% if ( item.time ) { %>
                                    <li>
                                        <b>";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Count"));
        echo "</b> <%- item.time.count %>
                                    </li>
                                    <li>
                                        <b>";
        // line 94
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Time"));
        echo "</b> <%- Drupal.webprofiler.helpers.printTime(item.time.time) %>
                                    </li>
                                <% } %>
                            </ul>
                            <% if ( tags.length > 0 || depends.length > 0 ) { %>
                            <div class=\"button--flat l-right js--panel-toggle\">";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Info"));
        echo "</div>
                            <% } %>
                        </div>

                        <% if ( tags.length > 0 || depends.length > 0 ) { %>
                        <div class=\"panel__expand-content\">
                            <div class=\"wp-query-arguments\">
                                <table class=\"table--duo\">
                                    <tr>
                                        <th>";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tags"));
        echo "</th>
                                        <td><%- (tags) ? tags : '-' %></td>
                                    </tr>
                                    <tr>
                                        <th>";
        // line 112
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Depends"));
        echo "</th>
                                        <td><%- (depends) ? depends : '-' %></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <% } %>
                    </div>
                    <% }); %>
                </div>

                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table>
                            <thead>
                            <tr>
                                <th>";
        // line 128
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("id"));
        echo "</th>
                                <th>";
        // line 129
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("class"));
        echo "</th>
                                <th>";
        // line 130
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("priority"));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.http_middleware, function( item, key ){ %>
                            <% clazz = Drupal.webprofiler.helpers.classLink(item.value.handle_method) %>
                            <tr>
                                <td><%- key %></td>
                                <td><%= clazz %></td>
                                <td><%- item.value.tags.http_middleware[0].priority %></td>
                            </tr>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/services.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  326 => 130,  322 => 129,  318 => 128,  299 => 112,  292 => 108,  280 => 99,  272 => 94,  266 => 91,  255 => 87,  248 => 83,  241 => 79,  218 => 59,  213 => 57,  209 => 56,  205 => 55,  198 => 51,  194 => 50,  188 => 47,  184 => 46,  178 => 43,  174 => 42,  158 => 29,  155 => 28,  149 => 27,  139 => 23,  135 => 22,  131 => 20,  125 => 17,  121 => 16,  112 => 12,  108 => 11,  105 => 10,  102 => 9,  96 => 6,  92 => 5,  88 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 27,  62 => 26,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/services.html.twig", "/var/www/html/modules/devel/webprofiler/templates/Collector/services.html.twig");
    }
}
