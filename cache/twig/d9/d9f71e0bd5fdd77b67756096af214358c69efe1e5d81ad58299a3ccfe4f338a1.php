<?php

/* post.html.twig */
class __TwigTemplate_927addf0d7fd098d6bb8e959de1d0c02f4f6625ac0b29453bfbda7ae46c637b0 extends Twig_Template
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
        $this->loadTemplate("post.html.twig", "post.html.twig", 1, "1002974000")->display($context);
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}


/* post.html.twig */
class __TwigTemplate_927addf0d7fd098d6bb8e959de1d0c02f4f6625ac0b29453bfbda7ae46c637b0_1002974000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("partials/base.html.twig", "post.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <article class=\"post\">
        <header>
            <h1>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h1>
            <h2 class=\"headline\">";
        // line 7
        echo $this->env->getExtension('GravTwigExtension')->translateArray("MONTHS_OF_THE_YEAR", (twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "date", array()), "n") - 1));
        echo " ";
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), "m, Y");
        echo "</h2>
        </header>
        <section id=\"post-body\">
            ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
        </section>
    </article>
    <footer id=\"post-meta\" class=\"clearfix\">
        <a href=\"http://twitter.com/";
        // line 14
        echo trim($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "twitter", array()), "@");
        echo "\">
            <img class=\"avatar\" src=\"";
        // line 15
        echo (isset($context["avatar_url"]) ? $context["avatar_url"] : null);
        echo "\">
            <div>
                <span class=\"dark\">";
        // line 17
        echo $this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "author", array());
        echo "</span>
                <span>";
        // line 18
        echo $this->env->getExtension('GravTwigExtension')->translate("SITE.DESCRIPTION");
        echo "</span>
            </div>
        </a>

        <section id=\"sharing\">
            ";
        // line 23
        $this->loadTemplate("partials/share.html.twig", "post.html.twig", 23)->display($context);
        // line 24
        echo "        </section>
    </footer>

    <nav id=\"post-nav\">
        ";
        // line 28
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isFirst", array())) {
            // line 29
            echo "        <span class=\"prev\">
            <a href=\"";
            // line 30
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "url", array());
            echo "\"><span class=\"arrow\">←</span> ";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "nextSibling", array()), "title", array());
            echo "</a>
        </span>
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ( !$this->getAttribute((isset($context["page"]) ? $context["page"] : null), "isLast", array())) {
            // line 35
            echo "        <span class=\"next\">
            <a href=\"";
            // line 36
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "url", array());
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "prevSibling", array()), "title", array());
            echo " <span class=\"arrow\">→</span></a>
        </span>
        ";
        }
        // line 39
        echo "    </nav>


    <!-- Disqus comments -->
    ";
        // line 43
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "disqus", array())) {
            // line 44
            echo "        <div class=\"archive readmore\">
            <h3>Comments</h3>
            ";
            // line 46
            $this->loadTemplate("partials/disqus.html.twig", "post.html.twig", 46)->display($context);
            // line 47
            echo "        </div>
    ";
        }
        // line 49
        echo "
    <!-- Archive post list -->
    ";
        // line 51
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "archive", array())) {
            // line 52
            echo "        <ul id=\"post-list\" class=\"archive readmore\">
            <h3>Read more</h3>
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "posts", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 55
                echo "                <li>
                    <a href=\"";
                // line 56
                echo $this->getAttribute($context["post"], "url", array());
                echo "\">";
                echo $this->getAttribute($context["post"], "title", array());
                echo "<aside class=\"dates\">";
                echo twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "M d");
                echo "</aside></a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </ul>
    ";
        }
        // line 61
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 61,  190 => 59,  177 => 56,  174 => 55,  170 => 54,  166 => 52,  164 => 51,  160 => 49,  156 => 47,  154 => 46,  150 => 44,  148 => 43,  142 => 39,  134 => 36,  131 => 35,  129 => 34,  126 => 33,  118 => 30,  115 => 29,  113 => 28,  107 => 24,  105 => 23,  97 => 18,  93 => 17,  88 => 15,  84 => 14,  77 => 10,  69 => 7,  65 => 6,  61 => 4,  58 => 3,  19 => 1,);
    }
}
/* {% embed 'partials/base.html.twig' %}*/
/* */
/*     {% block content %}*/
/*     <article class="post">*/
/*         <header>*/
/*             <h1>{{ page.title }}</h1>*/
/*             <h2 class="headline">{{ 'MONTHS_OF_THE_YEAR'|ta(post.date|date('n') - 1) }} {{ page.date|date("m, Y") }}</h2>*/
/*         </header>*/
/*         <section id="post-body">*/
/*             {{ page.content }}*/
/*         </section>*/
/*     </article>*/
/*     <footer id="post-meta" class="clearfix">*/
/*         <a href="http://twitter.com/{{ theme_config.social.twitter|trim('@') }}">*/
/*             <img class="avatar" src="{{ avatar_url }}">*/
/*             <div>*/
/*                 <span class="dark">{{ theme_config.author }}</span>*/
/*                 <span>{{ 'SITE.DESCRIPTION'|t }}</span>*/
/*             </div>*/
/*         </a>*/
/* */
/*         <section id="sharing">*/
/*             {% include 'partials/share.html.twig' %}*/
/*         </section>*/
/*     </footer>*/
/* */
/*     <nav id="post-nav">*/
/*         {% if not page.isFirst %}*/
/*         <span class="prev">*/
/*             <a href="{{ page.nextSibling.url }}"><span class="arrow">←</span> {{ page.nextSibling.title }}</a>*/
/*         </span>*/
/*         {% endif %}*/
/* */
/*         {% if not page.isLast %}*/
/*         <span class="next">*/
/*             <a href="{{ page.prevSibling.url }}">{{ page.prevSibling.title }} <span class="arrow">→</span></a>*/
/*         </span>*/
/*         {% endif %}*/
/*     </nav>*/
/* */
/* */
/*     <!-- Disqus comments -->*/
/*     {% if page.header.disqus %}*/
/*         <div class="archive readmore">*/
/*             <h3>Comments</h3>*/
/*             {% include 'partials/disqus.html.twig' %}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <!-- Archive post list -->*/
/*     {% if page.header.archive %}*/
/*         <ul id="post-list" class="archive readmore">*/
/*             <h3>Read more</h3>*/
/*             {% for post in site.posts %}*/
/*                 <li>*/
/*                     <a href="{{ post.url }}">{{ post.title }}<aside class="dates">{{ post.date|date("M d")  }}</aside></a>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     {% endif %}*/
/* */
/*     {% endblock %}*/
/* */
/* */
/* {% endembed %}*/
/* */
