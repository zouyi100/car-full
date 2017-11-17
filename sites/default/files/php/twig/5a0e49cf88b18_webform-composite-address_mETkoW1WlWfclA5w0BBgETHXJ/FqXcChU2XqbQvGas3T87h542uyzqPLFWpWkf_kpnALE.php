<?php

/* modules/webform/templates/webform-composite-address.html.twig */
class __TwigTemplate_01cd6a801297cfcddc2cfde8a2dd8b1f229a54e41c9d40d7d61322e05f28a948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 17);
        $filters = array();
        $functions = array("attach_library" => 16);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("webform/webform.element.composite"), "html", null, true));
        echo "
";
        // line 17
        if (($context["flexbox"] ?? null)) {
            // line 18
            echo "
  ";
            // line 19
            if ($this->getAttribute(($context["content"] ?? null), "address", array())) {
                // line 20
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 21
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "address", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 24
            echo "
  ";
            // line 25
            if ($this->getAttribute(($context["content"] ?? null), "address_2", array())) {
                // line 26
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 27
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "address_2", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 30
            echo "
  <div class=\"webform-flexbox\">
    ";
            // line 32
            if ($this->getAttribute(($context["content"] ?? null), "city", array())) {
                // line 33
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "city", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 35
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "state_province", array())) {
                // line 36
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "state_province", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 38
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "postal_code", array())) {
                // line 39
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "postal_code", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 41
            echo "  </div>

  ";
            // line 43
            if ($this->getAttribute(($context["content"] ?? null), "country", array())) {
                // line 44
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 45
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "country", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 48
            echo "
";
        } else {
            // line 50
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform/templates/webform-composite-address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 50,  122 => 48,  116 => 45,  113 => 44,  111 => 43,  107 => 41,  101 => 39,  98 => 38,  92 => 36,  89 => 35,  83 => 33,  81 => 32,  77 => 30,  71 => 27,  68 => 26,  66 => 25,  63 => 24,  57 => 21,  54 => 20,  52 => 19,  49 => 18,  47 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/webform/templates/webform-composite-address.html.twig", "/var/www/html/car/modules/webform/templates/webform-composite-address.html.twig");
    }
}
