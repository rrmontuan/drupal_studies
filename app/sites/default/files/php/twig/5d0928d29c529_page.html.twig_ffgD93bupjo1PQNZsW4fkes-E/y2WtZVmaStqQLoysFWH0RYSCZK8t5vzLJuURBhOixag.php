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

/* themes/zircon/templates/page.html.twig */
class __TwigTemplate_3572e827b43367ecb3cc1e4056194ec0c5ca8247a9e9d373eaf0ede75b8ac664 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 6, "t" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/zircon/templates/page.html.twig"));

        // line 1
        echo "<div class=\"page\">
<a name=\"Top\" id=\"Top\"></a>
<header id=\"header\" class=\"header\" role=\"header\">
  <div class=\"container\">
    ";
        // line 5
        if (($context["logo"] ?? null)) {
            // line 6
            echo "      <a id=\"logo\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">
        <img src=\"";
            // line 7
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\"/>
      </a>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 12
            echo "      <div class=\"name-and-slogan\">

        ";
            // line 15
            echo "        ";
            if (($context["title"] ?? null)) {
                // line 16
                echo "          <strong class=\"site-name\">
            <a href=\"";
                // line 17
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
          </strong>
        ";
            } else {
                // line 20
                echo "          <h1 class=\"site-name\">
            <a href=\"";
                // line 21
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
          </h1>
        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (($context["site_slogan"] ?? null)) {
                // line 26
                echo "          <div class=\"site-slogan\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</div>
        ";
            }
            // line 28
            echo "      </div>
   ";
        }
        // line 30
        echo "   <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>

    ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
    
  </div>
</header>

  ";
        // line 42
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 43
            echo "    <nav id=\"navigation\" class=\"navigation\" role=\"navigation\">
      <div class=\"container\">
        ";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_menu"] ?? null)), "html", null, true);
            echo "
        ";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary_menu"] ?? null)), "html", null, true);
            echo "
      </div>
    </nav>
  ";
        }
        // line 50
        echo "
  ";
        // line 51
        if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
            // line 52
            echo "    <nav id=\"main-menu\" class=\"navbar navbar-default\" role=\"navigation\">\t
  \t\t  <div class=\"collapse navbar-collapse\" id=\"main-menu-inner\">
          <div class=\"container\">
            ";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
            echo "\t\t\t\t\t\t
          </div>
        </div>
    </nav>
  ";
        }
        // line 60
        echo "
  ";
        // line 61
        if ($this->getAttribute(($context["page"] ?? null), "slideshow", [])) {
            // line 62
            echo "    <section id=\"slideshow\" class=\"slideshow\">
      <div class=\"container\">
        ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideshow", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 68
        echo "
  ";
        // line 69
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 70
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 72
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 76
        echo "
  ";
        // line 77
        if (($context["messages"] ?? null)) {
            // line 78
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 80
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["messages"] ?? null)), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 84
        echo "
  ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 86
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 88
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 91
        echo "    

  <section id=\"main\" class=\"main\" role=\"main\">
    <a id=\"main-content\"></a>
    <div class=\"container\">
      <div class=\"row\">
        
        ";
        // line 98
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 99
            echo "          <aside class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 103
        echo "\t\t
        <div class=\"content col-lg-";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-md-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_content_width", [])), "html", null, true);
        echo " col-sm-12 col-xs-12\">
          ";
        // line 105
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "

          ";
        // line 107
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
          ";
        // line 108
        if (($context["title"] ?? null)) {
            // line 109
            echo "            <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
          ";
        }
        // line 111
        echo "          ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

          ";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tabs"] ?? null)), "html", null, true);
        echo "

          ";
        // line 115
        if (($context["action_links"] ?? null)) {
            // line 116
            echo "            <nav class=\"action-links\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["action_links"] ?? null)), "html", null, true);
            echo "</nav>
          ";
        }
        // line 118
        echo "
          ";
        // line 119
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "

          <!--";
        // line 121
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null)), "html", null, true);
        echo "-->
        </div>

        ";
        // line 124
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 125
            echo "          <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
            ";
            // line 126
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </aside>
        ";
        }
        // line 129
        echo "      </div>
    </div>
  </section>

  ";
        // line 133
        if ($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])) {
            // line 134
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_first_1", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 144
        echo "    
  ";
        // line 145
        if (((($this->getAttribute(($context["page"] ?? null), "panel_second_1", []) || $this->getAttribute(($context["page"] ?? null), "panel_second_2", [])) || $this->getAttribute(($context["page"] ?? null), "panel_second_3", [])) || $this->getAttribute(($context["page"] ?? null), "panel_second_4", []))) {
            // line 146
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 150
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_1", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 153
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_2", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 156
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_3", [])), "html", null, true);
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 159
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "panel_second_4", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 165
        echo "  
  ";
        // line 166
        if (($context["breadcrumb"] ?? null)) {
            // line 167
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 169
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["breadcrumb"] ?? null)), "html", null, true);
            echo "
      </div>
    </section>
  ";
        }
        // line 173
        echo "  <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>          

  ";
        // line 175
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 176
            echo "    <footer id=\"footer\" class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
        ";
            // line 178
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
            echo "
      </div>
    </footer>
  ";
        }
        // line 182
        echo "
</div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 182,  427 => 178,  423 => 176,  421 => 175,  417 => 173,  410 => 169,  406 => 167,  404 => 166,  401 => 165,  392 => 159,  386 => 156,  380 => 153,  374 => 150,  368 => 146,  366 => 145,  363 => 144,  354 => 138,  348 => 134,  346 => 133,  340 => 129,  334 => 126,  331 => 125,  329 => 124,  323 => 121,  318 => 119,  315 => 118,  309 => 116,  307 => 115,  302 => 113,  296 => 111,  290 => 109,  288 => 108,  284 => 107,  279 => 105,  273 => 104,  270 => 103,  264 => 100,  261 => 99,  259 => 98,  250 => 91,  243 => 88,  239 => 86,  237 => 85,  234 => 84,  227 => 80,  223 => 78,  221 => 77,  218 => 76,  211 => 72,  207 => 70,  205 => 69,  202 => 68,  195 => 64,  191 => 62,  189 => 61,  186 => 60,  178 => 55,  173 => 52,  171 => 51,  168 => 50,  161 => 46,  157 => 45,  153 => 43,  151 => 42,  143 => 37,  134 => 30,  130 => 28,  124 => 26,  122 => 25,  119 => 24,  109 => 21,  106 => 20,  96 => 17,  93 => 16,  90 => 15,  86 => 12,  84 => 11,  81 => 10,  73 => 7,  66 => 6,  64 => 5,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zircon/templates/page.html.twig", "/var/www/html/themes/zircon/templates/page.html.twig");
    }
}
