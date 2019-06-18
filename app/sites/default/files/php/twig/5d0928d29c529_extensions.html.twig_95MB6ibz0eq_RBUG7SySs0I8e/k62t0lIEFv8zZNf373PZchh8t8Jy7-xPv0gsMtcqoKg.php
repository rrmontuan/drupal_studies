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

/* @webprofiler/Collector/extensions.html.twig */
class __TwigTemplate_bdbddef96b780a38406c75711251c64be6c9608f25975b5ed696ecf7e461623a extends \Twig\Template
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
        $tags = ["block" => 1, "set" => 2, "if" => 7];
        $filters = ["escape" => 3, "t" => 4, "default" => 22];
        $functions = ["url" => 3];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set', 'if'],
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/extensions.html.twig"));

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
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "drupal_extension"]), "html", null, true);
        echo "\"
       title=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Extensions"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Extensions"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status";
        // line 7
        if ((150 < $this->getAttribute(($context["collector"] ?? null), "countExtensions", []))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getExtensionsCount", [])), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Active Modules"));
        echo "</b>
        <span>";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getModulesCount", [])), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Active Themes"));
        echo "</b>
        <span>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "getThemesCount", [])), "html", null, true);
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
        echo "    <script id=\"drupal_extension\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Extensions"));
        echo "</h2>
        <div class=\"tabs\">
            <input class=\"tabs__radio\" type=\"radio\" id=\"modules\" name=\"tabs\" checked/>
            <input class=\"tabs__radio\" type=\"radio\" id=\"themes\" name=\"tabs\"/>
            <ul class=\"tabs__tabs list--inline\">
                <li><label class=\"tabs__label\" for=\"modules\">";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Modules"));
        echo "</label></li>
                <li><label class=\"tabs__label\" for=\"themes\">";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Themes"));
        echo "</label></li>
            </ul>

            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                                <th>";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Path"));
        echo "</th>
                                <th>";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Info file"));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.modules, function( value, key ){ %>
                            <% if(value.public_type == 'module') { %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
                            </tr>
                            <% } %>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                                <th>";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Path"));
        echo "</th>
                                <th>";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Info file"));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.themes, function( value, key ){ %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
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
        return "@webprofiler/Collector/extensions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  230 => 74,  226 => 73,  222 => 72,  193 => 46,  189 => 45,  185 => 44,  173 => 35,  169 => 34,  161 => 29,  158 => 28,  152 => 27,  142 => 23,  138 => 22,  134 => 20,  128 => 17,  124 => 16,  118 => 13,  114 => 12,  111 => 11,  108 => 10,  98 => 7,  94 => 6,  90 => 5,  86 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 27,  62 => 26,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/extensions.html.twig", "/var/www/html/modules/devel/webprofiler/templates/Collector/extensions.html.twig");
    }
}
