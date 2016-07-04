<?php

/* blog/index.html.twig */
class __TwigTemplate_6e752979f3e8c57d75ec93d51f14277069071a5a56f76b625519aa4d7cd4ee58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54e130a1a9274571eba71086ccd28ad181f6d650fa8ce7ce726866a2db331dbd = $this->env->getExtension("native_profiler");
        $__internal_54e130a1a9274571eba71086ccd28ad181f6d650fa8ce7ce726866a2db331dbd->enter($__internal_54e130a1a9274571eba71086ccd28ad181f6d650fa8ce7ce726866a2db331dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54e130a1a9274571eba71086ccd28ad181f6d650fa8ce7ce726866a2db331dbd->leave($__internal_54e130a1a9274571eba71086ccd28ad181f6d650fa8ce7ce726866a2db331dbd_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f2bb91b5b17107bd089c513ad50d16c5390977e2432df3bc7eaa57b0c0b94708 = $this->env->getExtension("native_profiler");
        $__internal_f2bb91b5b17107bd089c513ad50d16c5390977e2432df3bc7eaa57b0c0b94708->enter($__internal_f2bb91b5b17107bd089c513ad50d16c5390977e2432df3bc7eaa57b0c0b94708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_f2bb91b5b17107bd089c513ad50d16c5390977e2432df3bc7eaa57b0c0b94708->leave($__internal_f2bb91b5b17107bd089c513ad50d16c5390977e2432df3bc7eaa57b0c0b94708_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_bd261a3cce53d010043eb43270c3f41558a9691a55f7712c0a30d55ecb8e1463 = $this->env->getExtension("native_profiler");
        $__internal_bd261a3cce53d010043eb43270c3f41558a9691a55f7712c0a30d55ecb8e1463->enter($__internal_bd261a3cce53d010043eb43270c3f41558a9691a55f7712c0a30d55ecb8e1463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 21
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")), "twitter_bootstrap3_translated", array("routeName" => "blog_index_paginated"));
        echo "
    </div>
";
        
        $__internal_bd261a3cce53d010043eb43270c3f41558a9691a55f7712c0a30d55ecb8e1463->leave($__internal_bd261a3cce53d010043eb43270c3f41558a9691a55f7712c0a30d55ecb8e1463_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4f16fbdf96ec9470bfc0ed85f2218f220fbe4cb813bb1b4b3062ff5703fc8228 = $this->env->getExtension("native_profiler");
        $__internal_4f16fbdf96ec9470bfc0ed85f2218f220fbe4cb813bb1b4b3062ff5703fc8228->enter($__internal_4f16fbdf96ec9470bfc0ed85f2218f220fbe4cb813bb1b4b3062ff5703fc8228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_4f16fbdf96ec9470bfc0ed85f2218f220fbe4cb813bb1b4b3062ff5703fc8228->leave($__internal_4f16fbdf96ec9470bfc0ed85f2218f220fbe4cb813bb1b4b3062ff5703fc8228_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  112 => 26,  106 => 25,  96 => 21,  92 => 19,  83 => 17,  75 => 14,  68 => 10,  64 => 9,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_index' %}*/
/* */
/* {% block main %}*/
/*     {% for post in posts %}*/
/*         <article class="post">*/
/*             <h2>*/
/*                 <a href="{{ path('blog_post', { slug: post.slug }) }}">*/
/*                     {{ post.title }}*/
/*                 </a>*/
/*             </h2>*/
/* */
/*             {{ post.summary|md2html }}*/
/*         </article>*/
/*     {% else %}*/
/*         <div class="well">{{ 'post.no_posts_found'|trans }}</div>*/
/*     {% endfor %}*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ pagerfanta(posts, 'twitter_bootstrap3_translated', { routeName: 'blog_index_paginated' }) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
