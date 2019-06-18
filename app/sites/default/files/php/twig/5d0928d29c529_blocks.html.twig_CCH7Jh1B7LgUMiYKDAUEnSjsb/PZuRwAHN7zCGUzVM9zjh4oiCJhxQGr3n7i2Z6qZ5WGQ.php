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

/* @webprofiler/Collector/blocks.html.twig */
class __TwigTemplate_406a05703b49f49491f9dd96f6681f353fafb6a5a4992c8be88e18ee4dbda0f3 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/blocks.html.twig"));

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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "blocks"]), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Blocks"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Blocks"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "renderedBlocksCount", [])), "html", null, true);
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
        <b>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Loaded"));
        echo "</b>
        <span>";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "loadedBlocksCount", [])), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Rendered"));
        echo "</b>
        <span>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "renderedBlocksCount", [])), "html", null, true);
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
        echo "    <script id=\"blocks\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Blocks"));
        echo "</h2>

        <form class=\"panel__toolbar\">
            <div class=\"panel__filter--text\">
                <input id=\"edit-sid\" class=\"js--live-filter\" placeholder=\"";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID"));
        echo "\" type=\"text\"/>
                <label for=\"edit-sid\" class=\"panel__filter-label\">";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID"));
        echo "</label>
            </div>
            <div class=\"panel__filter--text\">
                <input id=\"edit-label\" class=\"js--live-filter\" placeholder=\"";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Label"));
        echo "\" type=\"text\"/>
                <label for=\"edit-label\" class=\"panel__filter-label\">";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Label"));
        echo "</label>
            </div>
            <div class=\"panel__filter--text\">
                <input id=\"edit-region\" class=\"js--live-filter\" placeholder=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Region"));
        echo "\" type=\"text\"/>
                <label for=\"edit-region\" class=\"panel__filter-label\">";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Region"));
        echo "</label>
            </div>
            <div class=\"panel__filter--text\">
                <input id=\"edit-provider\" class=\"js--live-filter\" placeholder=\"";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Provider"));
        echo "\" type=\"text\"/>
                <label for=\"edit-provider\" class=\"panel__filter-label\">";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Provider"));
        echo "</label>
            </div>
            <div class=\"panel__filter--select\">
                <select id=\"edit-rendered\" class=\"js--live-filter\">
                    <option value=\"\">";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Any"));
        echo "</option>
                    <option value=\"1\">";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Yes"));
        echo "</option>
                    <option value=\"0\">";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No"));
        echo "</option>
                </select>
                <label for=\"edit-rendered\" class=\"panel__filter-label\">";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Rendered"));
        echo "</label>
            </div>
        </form>

        <% _.each( data.blocks.loaded, function( item ){ %>

        <div class=\"panel__container\"
             data-wp-sid=\"<%- item.id %>\"
             data-wp-label=\"<%= item.settings.label %>\"
             data-wp-region=\"<%= item.region %>\"
             data-wp-provider=\"<%= item.settings.provider %>\"
             data-wp-rendered=\"<%- (data.blocks.rendered[item.id]) ? '1' : '0' %>\">

            <div class=\"panel__expand-header\">
                <ul class=\"list--inline\">
                    <li>
                        <b>";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ID"));
        echo "</b> <%- item.id %>
                    </li>
                    <li>
                        <b>";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Label"));
        echo "</b> <%= item.settings.label %>
                    </li>
                    <li>
                        <b>";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Region"));
        echo "</b> <%= (item.region == -1) ? '";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("No region"));
        echo "' : item.region %>
                    </li>
                    <li>
                        <b><%- (data.blocks.rendered[item.id]) ? '' : '";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Not rendered"));
        echo "' %></b>
                    </li>
                </ul>
                <div class=\"button--flat l-right js--panel-toggle\">";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Info"));
        echo "</div>
                <a class=\"button--flat l-right \" href=\"<%- item.route %>\">";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Edit"));
        echo "</a>

            </div>

            <div class=\"panel__expand-content\">
                <div class=\"wp-query-arguments\">
                    <table class=\"table--duo\">
                        <tr>
                            <th>";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Provider"));
        echo "</th>
                            <td><%- item.settings.provider %></td>
                        </tr>
                        <tr>
                            <th>";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Theme"));
        echo "</th>
                            <td><%- item.theme %></td>
                        </tr>
                        <tr>
                            <th>";
        // line 99
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Status"));
        echo "</th>
                            <td><%- (item.status) ? '";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Enabled"));
        echo "' : '";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Disabled"));
        echo "' %></td>
                        </tr>
                        <tr>
                            <th>";
        // line 103
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Plugin"));
        echo "</th>
                            <td><%- item.plugin %></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <% }); %>

    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  303 => 103,  295 => 100,  291 => 99,  284 => 95,  277 => 91,  266 => 83,  262 => 82,  256 => 79,  248 => 76,  242 => 73,  236 => 70,  217 => 54,  212 => 52,  208 => 51,  204 => 50,  197 => 46,  193 => 45,  187 => 42,  183 => 41,  177 => 38,  173 => 37,  167 => 34,  163 => 33,  156 => 29,  153 => 28,  147 => 27,  137 => 23,  133 => 22,  129 => 20,  123 => 17,  119 => 16,  113 => 13,  109 => 12,  105 => 10,  102 => 9,  96 => 6,  92 => 5,  88 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 27,  62 => 26,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/blocks.html.twig", "/var/www/html/modules/devel/webprofiler/templates/Collector/blocks.html.twig");
    }
}
