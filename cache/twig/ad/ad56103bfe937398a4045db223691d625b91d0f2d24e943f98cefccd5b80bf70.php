<?php

/* partials/footer.html.twig */
class __TwigTemplate_5bd0b057531d45ac2c3e9217b67fef95e6da25fb0c9bd721162751b432cfc866 extends Twig_Template
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
        echo "<footer id=\"footer\">
    <p class=\"small\">";
        // line 2
        echo $this->env->getExtension('GravTwigExtension')->translate("SITE.COPYRIGHT", twig_date_format_filter($this->env, "now", "Y"));
        echo "</p>
</footer>
";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <footer id="footer">*/
/*     <p class="small">{{ 'SITE.COPYRIGHT'|t("now"|date('Y')) }}</p>*/
/* </footer>*/
/* */
