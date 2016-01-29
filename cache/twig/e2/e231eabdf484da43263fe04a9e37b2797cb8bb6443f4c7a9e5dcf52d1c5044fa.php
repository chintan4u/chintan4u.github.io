<?php

/* partials/load-more.html.twig */
class __TwigTemplate_f6904eddd527cf5e7574e8be485402e509c7fecf38c68ea74dedb0c5e0a65d6a extends Twig_Template
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
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "hasNext", array())) {
            // line 2
            echo "    <div class=\"next\"><a rel=\"next\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/tmpl:infinite";
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "params", array());
            echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "nextUrl", array());
            echo "\">Load More...</a></div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/load-more.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  19 => 1,);
    }
}
/* {% if pagination.hasNext %}*/
/*     <div class="next"><a rel="next" href="{{ base_url }}/tmpl:infinite{{ pagination.params }}{{ pagination.nextUrl }}">Load More...</a></div>*/
/* {% endif %}*/
/* */
