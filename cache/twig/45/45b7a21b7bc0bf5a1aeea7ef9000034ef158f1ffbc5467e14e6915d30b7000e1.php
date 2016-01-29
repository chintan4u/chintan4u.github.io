<?php

/* pages.html.twig */
class __TwigTemplate_185f9c908e02cbe1b014cdbe7ad04c3f6b64d1b6b39007477e37e9c0c8ac1361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
(isset($context["context"]) ? $context["context"] : null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) {
                // line 16
                $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modular", array())) ? ("modular_") : (""));
        // line 29
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 31
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) : ("en"));
        // line 33
        $context["page_lang"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "language", array());
        // line 54
        $context["preview_html"] = ((($this->env->getExtension('GravTwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) ? (($this->env->getExtension('GravTwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) : ("/"));
        // line 55
        $context["preview_link"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "routable", array())) ? ((("<a class=\"button\" target=\"_blank\" href=\"" . (isset($context["preview_html"]) ? $context["preview_html"] : null)) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 37
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
            // line 38
            echo "    ";
        }
        // line 39
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/pages-all.js")), "method");
        // line 44
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/speakingurl.min.js")), "method");
        // line 45
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/slugify.min.js")), "method");
        // line 46
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 47
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
            // line 48
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
            // line 49
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/dropzone.min.js")), "method");
            // line 50
            echo "    ";
        }
        // line 51
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 119
    public function block_titlebar($context, array $blocks = array())
    {
        // line 120
        echo "    <div class=\"button-bar\">
        ";
        // line 121
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 122
            echo "            <a class=\"button\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
            <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> ";
            // line 123
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            echo "</a>
            ";
            // line 124
            if ( !twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))) {
                // line 125
                echo "            <a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR");
                echo "</a>
            ";
            }
            // line 127
            echo "
            ";
            // line 128
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array())) {
                // line 129
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 132
                $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), (isset($context["admin_lang"]) ? $context["admin_lang"] : null), array(), "array");
                // line 133
                echo "                        ";
                echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                    // line 140
                    echo "                            ";
                    $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                    // line 141
                    echo "                            ";
                    if (($context["langCode"] != (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        // line 142
                        echo "                                <li><a href=\"";
                        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method");
                        echo "\">";
                        echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                        echo "</a></li>
                            ";
                    }
                    // line 144
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "                    </ul>

                </div>
            ";
            }
            // line 149
            echo "
        ";
        } elseif ((        // line 150
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 151
            echo "
            ";
            // line 152
            echo (isset($context["preview_link"]) ? $context["preview_link"] : null);
            echo "
            <a class=\"button\" href=\"";
            // line 153
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/pages\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
            ";
            // line 154
            if ((isset($context["exists"]) ? $context["exists"] : null)) {
                // line 155
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY");
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 156
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE");
                echo "</a>
                ";
                // line 157
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin-pro", array(), "array"), "enabled", array())) {
                    // line 158
                    echo "                    ";
                    echo $this->env->getExtension('GravTwigExtension')->dump($this->env, $context, $this->getAttribute((isset($context["adminpro"]) ? $context["adminpro"] : null), "revisions", array()));
                    echo "
                    <a class=\"button\" href=\"#\" data-remodal-target=\"revisions\"><i class=\"fa fa-history\"></i> ";
                    // line 159
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN_PRO.REVISIONS");
                    echo "</a>

                ";
                }
                // line 162
                echo "                ";
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 163
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE");
                    echo "</a>
                ";
                } else {
                    // line 165
                    echo "                    <a class=\"button\" href=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 167
                echo "            ";
            }
            // line 168
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 170
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
            echo "</button>
                ";
            // line 171
            if (((isset($context["exists"]) ? $context["exists"] : null) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()))) {
                // line 172
                echo "                    ";
                if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array())) {
                    // line 173
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 177
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 178
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 179
                        echo "                                ";
                        if (($context["langCode"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 180
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo $context["langCode"];
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS");
                            echo " ";
                            echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                            echo "</button>
                                ";
                        }
                        // line 182
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 183
                    echo "                        </ul>
                    ";
                }
                // line 185
                echo "                ";
            }
            // line 186
            echo "            </div>


        ";
        }
        // line 190
        echo "    </div>
    ";
        // line 191
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 192
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            echo "</h1>
    ";
        } elseif ((        // line 193
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 194
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 195
            echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT") . ((" <i>" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "</i>"))) : (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE") . ((" <i>" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "</i>"))));
            echo "
        </h1>
    ";
        } else {
            // line 198
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES");
            echo "</h1>
    ";
        }
    }

    // line 202
    public function block_content($context, array $blocks = array())
    {
        // line 203
        echo "    <div class=\"admin-block clear\">
    ";
        // line 204
        $this->loadTemplate("partials/messages.html.twig", "pages.html.twig", 204)->display($context);
        // line 205
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 206
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 206)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/page"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 207
            echo "    ";
        } elseif (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 208
            echo "        <div class=\"admin-form-wrapper\" data-media-url=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/media/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo ".json\" data-media-local=\"";
            echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
            echo "/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo "\" data-media-types=\"";
            echo (isset($context["media_types"]) ? $context["media_types"] : null);
            echo "\">
            <div id=\"admin-topbar\">

                ";
            // line 211
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()) && (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                // line 212
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 214
                if ((isset($context["exists"]) ? $context["exists"] : null)) {
                    // line 215
                    echo "                                ";
                    echo (isset($context["page_lang"]) ? $context["page_lang"] : null);
                    echo "
                            ";
                } else {
                    // line 217
                    echo "                                ";
                    echo (isset($context["admin_lang"]) ? $context["admin_lang"] : null);
                    echo "
                            ";
                }
                // line 219
                echo "                        </button>
                        ";
                // line 220
                if (((isset($context["exists"]) ? $context["exists"] : null) && (twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array())) > 1))) {
                    // line 221
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 225
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 226
                        echo "                                    ";
                        if (($context["language"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 227
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo $context["language"];
                            echo "\" redirect=\"";
                            echo trim($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()), "/");
                            echo "\" form=\"blueprints\">";
                            echo $context["language"];
                            echo "</button>
                                    ";
                        }
                        // line 229
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 230
                    echo "                            </ul>
                        ";
                }
                // line 232
                echo "                    </div>
                ";
            }
            // line 234
            echo "
                ";
            // line 235
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array())) {
                // line 236
                echo "                ";
                $context["normalText"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 237
                echo "                ";
                $context["expertText"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 238
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, (isset($context["normalText"]) ? $context["normalText"] : null)), 1 => twig_length_filter($this->env, (isset($context["expertText"]) ? $context["expertText"] : null))));
                // line 239
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["normalText"]) ? $context["normalText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 240
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["expertText"]) ? $context["expertText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 241
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 243
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
                echo "/mode";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 244
                echo trim((isset($context["normalText"]) ? $context["normalText"] : null));
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 245
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
                echo "/mode";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 246
                echo trim((isset($context["expertText"]) ? $context["expertText"] : null));
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 251
            echo "
            </div>

            ";
            // line 254
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0"))) {
                // line 255
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 255)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 256
                echo "            ";
            } else {
                // line 257
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 257)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => (("pages/" . (isset($context["modular"]) ? $context["modular"] : null)) . "raw")), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 258
                echo "            ";
            }
            // line 259
            echo "        </div>
    ";
        } else {
            // line 261
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-template-types=\"";
            // line 263
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "types", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))), "html_attr");
            echo "\" data-template-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "accessLevels", array())), "html_attr");
            echo "\" placeholder=\"";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS");
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 266
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES");
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 269
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL");
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 270
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL");
            echo "</span>
            </div>
        </form>
        <ul class=\"pages-list depth-0\">
            ";
            // line 274
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => 0, 2 => $context), "method");
            echo "
        </ul>
    ";
        }
        // line 277
        echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 281
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR");
        echo "</h1>
            <div class=\"error-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button remodal-confirm\" href=\"#\">";
        // line 284
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE");
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 289
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 290
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 291
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 291)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 292
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 295
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 295)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/modular_new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 296
            echo "    </div>
    ";
        }
        // line 298
        echo "
    ";
        // line 299
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 300
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 302
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 302)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/move"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 303
            echo "    </div>
    <div class=\"remodal\" data-remodal-id=\"revisions\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 305
            $this->loadTemplate(array(0 => "partials/page-revisions.html.twig", 1 => "empty.html.twig"), "pages.html.twig", 305)->display(array_merge($context, array("data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 306
            echo "    </div>
    ";
        }
        // line 308
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 311
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
              ";
        // line 313
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 317
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 318
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>


    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>";
        // line 326
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 328
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 332
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 333
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>

    <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 340
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 342
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 346
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button remodal-confirm\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 347
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('GravTwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)) . (isset($context["input"]) ? $context["input"] : null)) . $this->env->getExtension('GravTwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 59
            echo "    ";
            $context["base_url"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_relative", array(), "array");
            // line 60
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_simple", array(), "array");
            // line 61
            echo "    ";
            $context["admin_route"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_route", array(), "array");
            // line 62
            echo "    ";
            $context["admin_lang"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_lang", array(), "array");
            // line 63
            echo "    ";
            $context["warn"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "warn", array(), "array");
            // line 64
            echo "    ";
            $context["uri"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "uri", array(), "array");
            // line 65
            echo "
    ";
            // line 66
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array())) {
                // line 67
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "dir", array())), "method");
                // line 68
                echo "    ";
            } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array())) {
                // line 69
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_dir", array())), "method");
                // line 70
                echo "    ";
            } else {
                // line 71
                echo "        ";
                $context["pcol"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method");
                // line 72
                echo "    ";
            }
            // line 73
            echo "
    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pcol"]) ? $context["pcol"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 75
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? ("Folder &bull; ") : ("Page &bull; ")) . (($this->getAttribute(                // line 76
$context["p"], "modular", array())) ? ("Modular &bull; ") : (""))) . (($this->getAttribute(                // line 77
$context["p"], "routable", array())) ? ("Routable &bull; ") : ("Non-Routable &bull; "))) . (($this->getAttribute(                // line 78
$context["p"], "visible", array())) ? ("Visible &bull; ") : ("Non-Visible &bull; "))) . (($this->getAttribute(                // line 79
$context["p"], "published", array())) ? ("Published &bull; ") : ("Non-Published &bull; ")));
                // line 80
                echo "        ";
                $context["page_route"] = trim($this->getAttribute($context["p"], "rawRoute", array()), "/");
                // line 81
                echo "        ";
                if (($this->getAttribute($context["p"], "language", array()) && ($this->getAttribute($context["p"], "language", array()) != (isset($context["admin_lang"]) ? $context["admin_lang"] : null)))) {
                    // line 82
                    echo "            ";
                    $context["page_url"] = (((((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . "/") . $this->getAttribute($context["p"], "language", array())) . "/") . (isset($context["admin_route"]) ? $context["admin_route"] : null)) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 83
                    echo "        ";
                } else {
                    // line 84
                    echo "            ";
                    $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 85
                    echo "        ";
                }
                // line 86
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 87
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <div class=\"row\">
                <span ";
                // line 89
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo " data-hint=\"";
                echo trim((isset($context["description"]) ? $context["description"] : null), " &bull; ");
                echo "\" class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 90
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <a href=\"";
                // line 92
                echo (isset($context["page_url"]) ? $context["page_url"] : null);
                echo "\" class=\"page-edit\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a>

                ";
                // line 94
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 95
                    echo "                    <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["p"], "language", array());
                    echo "</span>
                ";
                }
                // line 97
                echo "                <span class=\"page-home\">";
                echo (($this->getAttribute($context["p"], "home", array())) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
                <span class=\"page-tools\">

                    ";
                // line 100
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 101
                    echo "                    <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 103
                    echo "                    <a href=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 105
                echo "                </span>
                <p class=\"page-route\">";
                // line 106
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array())));
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo $this->getAttribute($context["p"], "template", array(), "method");
                echo "</p>
            </div>
            ";
                // line 108
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 109
                    echo "
            <ul class=\"depth-";
                    // line 110
                    echo ((isset($context["depth"]) ? $context["depth"] : null) + 1);
                    echo "\" style=\"display:none;\">
                ";
                    // line 111
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => ((isset($context["depth"]) ? $context["depth"] : null) + 1), 2 => (isset($context["twig_vars"]) ? $context["twig_vars"] : null)), "method");
                    echo "
            </ul>
            ";
                }
                // line 114
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  917 => 114,  911 => 111,  907 => 110,  904 => 109,  902 => 108,  895 => 106,  892 => 105,  886 => 103,  880 => 101,  878 => 100,  871 => 97,  861 => 95,  859 => 94,  852 => 92,  845 => 90,  839 => 89,  834 => 87,  831 => 86,  828 => 85,  825 => 84,  822 => 83,  819 => 82,  816 => 81,  813 => 80,  811 => 79,  810 => 78,  809 => 77,  808 => 76,  806 => 75,  802 => 74,  799 => 73,  796 => 72,  793 => 71,  790 => 70,  787 => 69,  784 => 68,  781 => 67,  779 => 66,  776 => 65,  773 => 64,  770 => 63,  767 => 62,  764 => 61,  761 => 60,  758 => 59,  755 => 58,  741 => 57,  727 => 4,  714 => 3,  705 => 347,  701 => 346,  694 => 342,  689 => 340,  679 => 333,  675 => 332,  668 => 328,  663 => 326,  652 => 318,  648 => 317,  641 => 313,  636 => 311,  631 => 308,  627 => 306,  625 => 305,  621 => 303,  619 => 302,  615 => 300,  613 => 299,  610 => 298,  606 => 296,  604 => 295,  599 => 292,  597 => 291,  594 => 290,  592 => 289,  584 => 284,  578 => 281,  572 => 277,  566 => 274,  559 => 270,  555 => 269,  549 => 266,  539 => 263,  535 => 261,  531 => 259,  528 => 258,  525 => 257,  522 => 256,  519 => 255,  517 => 254,  512 => 251,  504 => 246,  492 => 245,  488 => 244,  476 => 243,  472 => 241,  469 => 240,  466 => 239,  463 => 238,  460 => 237,  457 => 236,  455 => 235,  452 => 234,  448 => 232,  444 => 230,  438 => 229,  428 => 227,  425 => 226,  421 => 225,  415 => 221,  413 => 220,  410 => 219,  404 => 217,  398 => 215,  396 => 214,  392 => 212,  390 => 211,  375 => 208,  372 => 207,  369 => 206,  366 => 205,  364 => 204,  361 => 203,  358 => 202,  350 => 198,  344 => 195,  341 => 194,  339 => 193,  334 => 192,  332 => 191,  329 => 190,  323 => 186,  320 => 185,  316 => 183,  310 => 182,  300 => 180,  297 => 179,  294 => 178,  290 => 177,  284 => 173,  281 => 172,  279 => 171,  275 => 170,  271 => 168,  268 => 167,  262 => 165,  254 => 163,  251 => 162,  245 => 159,  240 => 158,  238 => 157,  234 => 156,  227 => 155,  225 => 154,  219 => 153,  215 => 152,  212 => 151,  210 => 150,  207 => 149,  201 => 145,  195 => 144,  187 => 142,  184 => 141,  181 => 140,  177 => 139,  167 => 133,  165 => 132,  160 => 129,  158 => 128,  155 => 127,  149 => 125,  147 => 124,  143 => 123,  136 => 122,  134 => 121,  131 => 120,  128 => 119,  121 => 51,  118 => 50,  115 => 49,  112 => 48,  109 => 47,  106 => 46,  103 => 45,  100 => 44,  97 => 43,  94 => 42,  87 => 39,  84 => 38,  81 => 37,  78 => 36,  75 => 35,  71 => 1,  69 => 55,  67 => 54,  65 => 33,  63 => 31,  61 => 29,  59 => 27,  56 => 24,  54 => 23,  50 => 20,  47 => 18,  45 => 17,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  35 => 12,  33 => 11,  30 => 8,  28 => 7,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% macro spanToggle(input, length) %}*/
/*     {{ repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2) }}*/
/* {% endmacro %}*/
/* */
/* {% if admin.route %}*/
/*     {% set context = admin.page(true) %}*/
/* {% endif %}*/
/* */
/* {% if uri.param('new') %}*/
/*     {% set mode = 'new' %}*/
/* {%  elseif context %}*/
/*     {% set mode = 'edit' %}*/
/*     {% if context.exists %}*/
/*         {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}*/
/*         {% set exists = true %}*/
/*         {% set title = (context.exists ? "PLUGIN_ADMIN.EDIT"|tu : "PLUGIN_ADMIN.CREATE"|tu ) ~ " " ~ (context.header.title ?: context.title) %}*/
/*     {% else %}*/
/*         {% set title = "PLUGIN_ADMIN.ADD_PAGE"|tu %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set mode = 'list' %}*/
/*     {% set title = "PLUGIN_ADMIN.PAGES"|tu %}*/
/* {% endif %}*/
/* */
/* {% set modular = context.modular ? 'modular_' : '' %}*/
/* */
/* {% set warn = config.plugins.admin.warnings.delete_page %}*/
/* */
/* {% set admin_lang = admin.session.admin_lang ?: 'en' %}*/
/* */
/* {% set page_lang = context.language %}*/
/* */
/* {% block stylesheets %}*/
/*     {% if mode == 'edit' %}*/
/*         {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs(theme_url~'/js/pages-all.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/speakingurl.min.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/slugify.min.js') %}*/
/*     {% if mode == 'edit' %}*/
/*         {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/dropzone.min.js') %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}*/
/* {% set preview_link = context.routable ? '<a class="button" target="_blank" href="' ~ preview_html ~ '"> <i class="fa fa-fw fa-eye" style="font-size:18px;margin-right:0;"></i></a>' : '' %}*/
/* */
/* {% macro loop(page, depth, twig_vars) %}*/
/*     {% set separator = twig_vars['config'].system.param_sep %}*/
/*     {% set base_url = twig_vars['base_url_relative'] %}*/
/*     {% set base_url_simple = twig_vars['base_url_simple'] %}*/
/*     {% set admin_route = twig_vars['admin_route'] %}*/
/*     {% set admin_lang = twig_vars['admin_lang'] %}*/
/*     {% set warn = twig_vars['warn'] %}*/
/*     {% set uri = twig_vars['uri'] %}*/
/* */
/*     {% if page.header.content.order.by %}*/
/*         {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir) %}*/
/*     {% elseif page.order_by %}*/
/*         {% set pcol = page.children().order(page.order_by, page.order_dir) %}*/
/*     {% else %}*/
/*         {% set pcol = page.children() %}*/
/*     {% endif %}*/
/* */
/*     {% for p in pcol %}*/
/*         {% set description = (not p.page ? 'Folder &bull; ' : 'Page &bull; ') ~*/
/*                              (p.modular ? 'Modular &bull; ' : '') ~*/
/*                              (p.routable ? 'Routable &bull; ' : 'Non-Routable &bull; ') ~*/
/*                              (p.visible ? 'Visible &bull; ' : 'Non-Visible &bull; ') ~*/
/*                              (p.published ? 'Published &bull; ' : 'Non-Published &bull; ') %}*/
/*         {% set page_route =  p.rawRoute|trim('/') %}*/
/*         {% if p.language and p.language != admin_lang %}*/
/*             {% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}*/
/*         {% else %}*/
/*             {% set page_url = base_url ~ '/pages/' ~ page_route  %}*/
/*         {% endif %}*/
/* */
/*         <li class="page-item" data-nav-id="{{ p.route }}">*/
/*             <div class="row">*/
/*                 <span {{ p.children(0).count > 0 ? 'data-toggle="children"' : ''}} data-hint="{{ description|trim(' &bull; ') }}" class="hint--bottom">*/
/*                 <i class="page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}"></i>*/
/*                 </span>*/
/*                 <a href="{{ page_url }}" class="page-edit">{{ p.title }}</a>*/
/* */
/*                 {% if p.language %}*/
/*                     <span class="badge lang {% if p.language == admin_lang %}info{% endif %}">{{p.language}}</span>*/
/*                 {% endif %}*/
/*                 <span class="page-home">{{ p.home ? '<i class="fa fa-home"></i>' }}</span>*/
/*                 <span class="page-tools">*/
/* */
/*                     {% if warn %}*/
/*                     <a href="#delete" data-remodal-target="delete" data-delete-url="{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                     {% else %}*/
/*                     <a href="{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                     {% endif %}*/
/*                 </span>*/
/*                 <p class="page-route">{{ p.header.routes.default ?: p.route }} <span class="spacer"><i class="fa fa-long-arrow-right"></i></span> {{ p.template() }}</p>*/
/*             </div>*/
/*             {% if p.children().count > 0 %}*/
/* */
/*             <ul class="depth-{{ depth + 1 }}" style="display:none;">*/
/*                 {{ _self.loop(p, depth + 1, twig_vars) }}*/
/*             </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         {% if mode == 'list' %}*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="#modal" data-remodal-target="modal"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_PAGE"|tu }}</a>*/
/*             {% if admin.modularTypes is not empty %}*/
/*             <a class="button" href="#modular" data-remodal-target="modular"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_MODULAR"|tu }}</a>*/
/*             {% endif %}*/
/* */
/*             {% if admin.multilang %}*/
/*                 <div class="button-group">*/
/*                     <button type="button" class="button disabled">*/
/*                         <i class="fa fa-flag-o"></i>*/
/*                         {% set langName = admin.siteLanguages[admin_lang] %}*/
/*                         {{ langName[:1]|upper ~ langName[1:] }}*/
/*                     </button>*/
/*                     <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                         <i class="fa fa-caret-down"></i>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu language-switcher">*/
/*                         {% for langCode in admin.languages_enabled %}*/
/*                             {% set langName = admin.siteLanguages[langCode] %}*/
/*                             {% if langCode != admin_lang %}*/
/*                                 <li><a href="{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}">{{ langName[:1]|upper ~ langName[1:] }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/* */
/*                 </div>*/
/*             {% endif %}*/
/* */
/*         {% elseif mode == 'edit' %}*/
/* */
/*             {{  preview_link }}*/
/*             <a class="button" href="{{ base_url }}/pages"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             {% if exists %}*/
/*                 <a class="button" href="{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}" class="page-copy" ><i class="fa fa-copy"></i> {{ "PLUGIN_ADMIN.COPY"|tu }}</a>*/
/*                 <a class="button" href="#" data-remodal-target="move"><i class="fa fa-arrows"></i> {{ "PLUGIN_ADMIN.MOVE"|tu }}</a>*/
/*                 {% if config.plugins['admin-pro'].enabled %}*/
/*                     {{dump(adminpro.revisions)}}*/
/*                     <a class="button" href="#" data-remodal-target="revisions"><i class="fa fa-history"></i> {{ "PLUGIN_ADMIN_PRO.REVISIONS"|tu }}</a>*/
/* */
/*                 {% endif %}*/
/*                 {% if warn %}*/
/*                     <a class="button" href="#delete" data-remodal-target="delete" data-delete-url="{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}"><i class="fa fa-close"></i> {{ "PLUGIN_ADMIN.DELETE"|tu }}</a>*/
/*                 {% else %}*/
/*                     <a class="button" href="{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             <div class="button-group">*/
/*                 <button class="button" name="task" value="save" form="blueprints" type="submit"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*                 {% if exists and admin.multilang %}*/
/*                     {% if context.untranslatedLanguages %}*/
/*                         <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-caret-down"></i>*/
/*                         </button>*/
/*                         <ul class="dropdown-menu lang-switcher">*/
/*                             {% for langCode in context.untranslatedLanguages %}*/
/*                                 {% set langName = admin.siteLanguages[langCode] %}*/
/*                                 {% if langCode != page_lang %}*/
/*                                     <li><button class="button task" name="task" value="saveas" lang="{{langCode}}" form="blueprints" type="submit">{{ "PLUGIN_ADMIN.SAVE_AS"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/* */
/*         {% endif %}*/
/*     </div>*/
/*     {% if mode == 'new' %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.ADD_PAGE"|tu }}</h1>*/
/*     {% elseif mode == 'edit' %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i>*/
/*             {{ context.exists ? "PLUGIN_ADMIN.EDIT"|tu ~ " <i>#{context.menu}</i>" : "PLUGIN_ADMIN.CREATE"|tu ~ " <i>#{context.menu}</i>" }}*/
/*         </h1>*/
/*     {% else %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.MANAGE_PAGES"|tu }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="admin-block clear">*/
/*     {% include 'partials/messages.html.twig' %}*/
/*     {% if mode == 'new' %}*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}*/
/*     {% elseif mode == 'edit' %}*/
/*         <div class="admin-form-wrapper" data-media-url="{{ base_url }}/media/{{ admin.route|trim('/') }}.json" data-media-local="{{ base_url_relative_frontend }}/{{ admin.route|trim('/') }}" data-media-types="{{ media_types }}">*/
/*             <div id="admin-topbar">*/
/* */
/*                 {% if admin.multilang and page_lang %}*/
/*                     <div id="admin-lang-toggle" class="button-group">*/
/*                         <button type="button" class="button disabled">*/
/*                             {% if exists %}*/
/*                                 {{ page_lang }}*/
/*                             {% else %}*/
/*                                 {{ admin_lang }}*/
/*                             {% endif %}*/
/*                         </button>*/
/*                         {% if exists and context.translatedLanguages|length > 1 %}*/
/*                             <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                                 <i class="fa fa-caret-down"></i>*/
/*                             </button>*/
/*                             <ul class="dropdown-menu language-switcher">*/
/*                                 {% for language, route in context.translatedLanguages %}*/
/*                                     {% if language != page_lang %}*/
/*                                     <li><button class="task" name="task" value="switchlanguage" lang="{{language}}" redirect="{{context.rawRoute|trim('/')}}" form="blueprints">{{ language }}</button>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if context.blueprints.fields %}*/
/*                 {% set normalText = "PLUGIN_ADMIN.NORMAL"|tu %}*/
/*                 {% set expertText = "PLUGIN_ADMIN.EXPERT"|tu %}*/
/*                 {% set maxLen = max([normalText|length, expertText|length]) %}*/
/*                 {% set normalText = _self.spanToggle(normalText, maxLen) %}*/
/*                 {% set expertText = _self.spanToggle(expertText, maxLen) %}*/
/*                 <form id="admin-mode-toggle">*/
/*                     <div class="switch-toggle switch-grav">*/
/*                         <input type="radio" value="normal" data-leave-url="{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal" id="normal" name="mode-switch" class="highlight" {% if admin.session.expert == '0' %} checked="checked"{% endif %}>*/
/*                         <label for="normal">{{ normalText|trim }}</label>*/
/*                         <input type="radio" value="expert" data-leave-url="{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert" id="expert" name="mode-switch" class="highlight" {% if admin.session.expert == '1' %} checked="checked"{% endif %}>*/
/*                         <label for="expert">{{ expertText|trim }}</label>*/
/*                         <a></a>*/
/*                     </div>*/
/*                 </form>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/* */
/*             {% if context.blueprints.fields and admin.session.expert == '0' %}*/
/*                 {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}*/
/*             {% else %}*/
/*                 {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('pages/'~modular~'raw'), data: context } %}*/
/*             {% endif %}*/
/*         </div>*/
/*     {% else %}*/
/*         <form id="page-filtering">*/
/*             <div class="page-filters">*/
/*                 <input type="text" data-template-types="{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}" data-template-access-levels="{{ admin.accessLevels|json_encode|e('html_attr') }}" placeholder="{{ "PLUGIN_ADMIN.ADD_FILTERS"|tu }}" class="page-filter" name="page-filter" />*/
/*             </div>*/
/*             <div class="page-search">*/
/*                 <input type="text" placeholder="{{ "PLUGIN_ADMIN.SEARCH_PAGES"|tu }}" name="page-search" />*/
/*             </div>*/
/*             <div class="page-shortcuts">*/
/*                 <span class="button button-x-small" data-page-toggleall="expand"><i class="fa fa-fw fa-plus-circle"></i> {{ "PLUGIN_ADMIN.EXPAND_ALL"|tu }}</span>*/
/*                 <span class="button button-x-small" data-page-toggleall="collapse"><i class="fa fa-fw fa-minus-circle"></i> {{ "PLUGIN_ADMIN.COLLAPSE_ALL"|tu }}</span>*/
/*             </div>*/
/*         </form>*/
/*         <ul class="pages-list depth-0">*/
/*             {{ _self.loop(pages, 0, _context) }}*/
/*         </ul>*/
/*     {% endif %}*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="generic" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.ERROR"|tu }}</h1>*/
/*             <div class="error-content"></div>*/
/*             <div class="button-bar">*/
/*                 <a class="button remodal-confirm" href="#">{{ "PLUGIN_ADMIN.CLOSE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     {% if mode == 'list' %}*/
/*     <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false">*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/new'), data: context } %}*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="modular" data-remodal-options="hashTracking: false">*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/modular_new'), data: context } %}*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% if mode == 'edit' %}*/
/*     <div class="remodal" data-remodal-id="move" data-remodal-options="hashTracking: false">*/
/* */
/*         {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('pages/move'), data: context } %}*/
/*     </div>*/
/*     <div class="remodal" data-remodal-id="revisions" data-remodal-options="hashTracking: false">*/
/*         {% include ['partials/page-revisions.html.twig', 'empty.html.twig'] with { data: context } %}*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <div class="remodal" data-remodal-id="delete" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*               {{ "PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button" data-delete-action href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/*     <div class="remodal" data-remodal-id="changes">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*                 {{ "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary" data-leave-action="cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button" data-leave-action="continue" href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="delete-media" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*                 {{ "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button remodal-confirm" href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
