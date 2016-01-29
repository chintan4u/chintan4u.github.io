<?php

/* partials/post-item.html.twig */
class __TwigTemplate_8c8ce303159f0c3bafea6abebe64bce88a77b358a9441db427d9dc7544e048a4 extends Twig_Template
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
        echo "<li>
    <a href='";
        // line 2
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
        echo "'><aside class=\"dates\">";
        echo $this->env->getExtension('GravTwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), "n") - 1));
        echo " ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), "d");
        echo "</aside></a>
    <a href='";
        // line 3
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "url", array());
        echo "'>";
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array());
        echo " <h2>";
        echo $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "header", array()), "headline", array());
        echo "</h2></a>
</li>
";
    }

    public function getTemplateName()
    {
        return "partials/post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* <li>*/
/*     <a href='{{ post.url }}'><aside class="dates">{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ post.date|date('d') }}</aside></a>*/
/*     <a href='{{ post.url }}'>{{ post.title }} <h2>{{ post.header.headline }}</h2></a>*/
/* </li>*/
/* */
