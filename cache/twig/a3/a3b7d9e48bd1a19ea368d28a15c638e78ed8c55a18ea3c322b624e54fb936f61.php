<?php

/* post-list.html.twig */
class __TwigTemplate_c9840f2a37a9e65b567d11437a2a4805c3a271b467b96f14327584638f8eaf8d extends Twig_Template
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
        // line 1
        $this->loadTemplate("post-list.html.twig", "post-list.html.twig", 1, "1974255116")->display($context);
    }

    public function getTemplateName()
    {
        return "post-list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* post-list.html.twig */
class __TwigTemplate_c9840f2a37a9e65b567d11437a2a4805c3a271b467b96f14327584638f8eaf8d_1974255116 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post-list.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array());
        // line 4
        $context["pagination"] = $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array());
        // line 6
        $context["jscroll_init"] = ('' === $tmp = "    \$(document).ready(function() {
        \$('.infinite-scroll').jscroll({
        autoTrigger: true,
        nextSelector: '[rel=\"next\"]'
        });
    });
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 17
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addInlineJs", array(0 => (isset($context["jscroll_init"]) ? $context["jscroll_init"] : null)), "method");
        // line 18
        echo "    ";
    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "home_profile", array())) {
            // line 22
            echo "            ";
            $this->loadTemplate("partials/profile.html.twig", "post-list.html.twig", 22)->display($context);
            // line 23
            echo "        ";
        } else {
            // line 24
            echo "            ";
            $this->displayParentBlock("header", $context, $blocks);
            echo "
        ";
        }
        // line 26
        echo "    ";
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        // line 29
        echo "    <ul id=\"post-list\" class=\"infinite-scroll\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 31
            echo "        ";
            $this->loadTemplate("partials/post-item.html.twig", "post-list.html.twig", 31)->display($context);
            // line 32
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute((isset($context["collection"]) ? $context["collection"] : null), "params", array()), "pagination", array()))) {
            // line 34
            echo "            ";
            $this->loadTemplate("partials/load-more.html.twig", "post-list.html.twig", 34)->display($context);
            // line 35
            echo "        ";
        }
        // line 36
        echo "    </ul>

    ";
    }

    public function getTemplateName()
    {
        return "post-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 36,  155 => 35,  152 => 34,  149 => 33,  135 => 32,  132 => 31,  115 => 30,  112 => 29,  109 => 28,  105 => 26,  99 => 24,  96 => 23,  93 => 22,  90 => 21,  87 => 20,  83 => 18,  81 => 17,  76 => 16,  73 => 15,  69 => 1,  61 => 6,  59 => 4,  57 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*     {% set collection = page.collection %}*/
/*     {% set pagination = collection.params.pagination %}*/
/* */
/*     {% set jscroll_init %}*/
/*     $(document).ready(function() {*/
/*         $('.infinite-scroll').jscroll({*/
/*         autoTrigger: true,*/
/*         nextSelector: '[rel="next"]'*/
/*         });*/
/*     });*/
/*     {% endset %}*/
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*         {% do assets.addInlineJs(jscroll_init) %}*/
/*     {% endblock %}*/
/* */
/*     {% block header %}*/
/*         {% if theme_config.home_profile %}*/
/*             {% include 'partials/profile.html.twig' %}*/
/*         {% else %}*/
/*             {{ parent() }}*/
/*         {% endif %}*/
/*     {% endblock %}*/
/* */
/*     {% block content %}*/
/*     <ul id="post-list" class="infinite-scroll">*/
/*         {% for post in collection %}*/
/*         {% include 'partials/post-item.html.twig' %}*/
/*         {% endfor %}*/
/*         {% if config.plugins.pagination.enabled and collection.params.pagination %}*/
/*             {% include 'partials/load-more.html.twig' %}*/
/*         {% endif %}*/
/*     </ul>*/
/* */
/*     {% endblock %}*/
/* */
/* {% endembed %}*/
/* */
