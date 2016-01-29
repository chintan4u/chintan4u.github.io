<?php

/* partials/share.html.twig */
class __TwigTemplate_724b3614dceaa130ebb01b49b7b33acd3178849ed93621b9e1520ce7ffb4595c extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "twitter", array())) {
            // line 2
            echo "<a class=\"twitter\" href=\"https://twitter.com/intent/tweet?text=";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
            echo " by ";
            echo $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "twitter", array());
            echo " - ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "\"><span class=\"icon-twitter\"> ";
            echo $this->env->getExtension('GravTwigExtension')->translate("TWEET");
            echo "</span></a>
";
        }
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "facebook", array())) {
            // line 5
            echo "<a class=\"facebook\" href=\"#\" onclick=\"
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
      'facebook-share-dialog',
      'width=626,height=436');
    return false;\"><span class=\"icon-facebook-rect\"> ";
            // line 10
            echo $this->env->getExtension('GravTwigExtension')->translate("SHARE");
            echo "</span>
</a>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  35 => 5,  33 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if theme_config.social.twitter %}*/
/* <a class="twitter" href="https://twitter.com/intent/tweet?text={{page.title}} by {{ theme_config.social.twitter }} - {{ page.url(true) }}"><span class="icon-twitter"> {{ 'TWEET'|t }}</span></a>*/
/* {% endif %}*/
/* {% if theme_config.social.facebook %}*/
/* <a class="facebook" href="#" onclick="*/
/*     window.open(*/
/*       'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),*/
/*       'facebook-share-dialog',*/
/*       'width=626,height=436');*/
/*     return false;"><span class="icon-facebook-rect"> {{ 'SHARE'|t }}</span>*/
/* </a>*/
/* {% endif %}*/
/* */
