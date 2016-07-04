<?php

/* blog/post_show.html.twig */
class __TwigTemplate_a74387cd2823f76f97d7f073cb587460f2870c4eb86538372803f16f86e62dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/post_show.html.twig", 1);
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
        $__internal_b544141aa45242cad3b32975ec92be59fe8297e590c9eefbdc05ec82c47bf9d9 = $this->env->getExtension("native_profiler");
        $__internal_b544141aa45242cad3b32975ec92be59fe8297e590c9eefbdc05ec82c47bf9d9->enter($__internal_b544141aa45242cad3b32975ec92be59fe8297e590c9eefbdc05ec82c47bf9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b544141aa45242cad3b32975ec92be59fe8297e590c9eefbdc05ec82c47bf9d9->leave($__internal_b544141aa45242cad3b32975ec92be59fe8297e590c9eefbdc05ec82c47bf9d9_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_9222ca5b486e6fb3fc062642f20fba923cb8428f1ec8abb61291d93d19fcecb6 = $this->env->getExtension("native_profiler");
        $__internal_9222ca5b486e6fb3fc062642f20fba923cb8428f1ec8abb61291d93d19fcecb6->enter($__internal_9222ca5b486e6fb3fc062642f20fba923cb8428f1ec8abb61291d93d19fcecb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_post_show";
        
        $__internal_9222ca5b486e6fb3fc062642f20fba923cb8428f1ec8abb61291d93d19fcecb6->leave($__internal_9222ca5b486e6fb3fc062642f20fba923cb8428f1ec8abb61291d93d19fcecb6_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_8654818d3c4a5262cf44212643f69ea975f9eb613b06d2c17ae43f5de65618f6 = $this->env->getExtension("native_profiler");
        $__internal_8654818d3c4a5262cf44212643f69ea975f9eb613b06d2c17ae43f5de65618f6->enter($__internal_8654818d3c4a5262cf44212643f69ea975f9eb613b06d2c17ae43f5de65618f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()));
        echo "

    <div id=\"post-add-comment\" class=\"well\">
        ";
        // line 17
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Blog:commentForm", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))));
            echo "
        ";
        } else {
            // line 20
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("security_login");
            echo "\">
                    <i class=\"fa fa-sign-in\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.to_publish_a_comment"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 27
        echo "    </div>

    <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("post.num_comments", twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()))), "html", null, true);
        echo "</h3>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 32
            echo "        <div class=\"row post-comment\">
            <h4 class=\"col-sm-3\">
                <strong>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "authorEmail", array()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.commented_on"), "html", null, true);
            echo "
                ";
            // line 38
            echo "                <strong>";
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["comment"], "publishedAt", array()), "medium", "short", null, "UTC"), "html", null, true);
            echo "</strong>
            </h4>
            <div class=\"col-sm-9\">
                ";
            // line 41
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["comment"], "content", array()));
            echo "
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "        <div class=\"post-comment\">
            <p>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_comments"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8654818d3c4a5262cf44212643f69ea975f9eb613b06d2c17ae43f5de65618f6->leave($__internal_8654818d3c4a5262cf44212643f69ea975f9eb613b06d2c17ae43f5de65618f6_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_12dba9477e68c98a641f55b0b2a0829b44d37d8dc42e49e170273f992a165b78 = $this->env->getExtension("native_profiler");
        $__internal_12dba9477e68c98a641f55b0b2a0829b44d37d8dc42e49e170273f992a165b78->enter($__internal_12dba9477e68c98a641f55b0b2a0829b44d37d8dc42e49e170273f992a165b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 52
        echo "    ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isAuthor", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method"))) {
            // line 53
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\"></i> ";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit_post"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 59
        echo "
    ";
        // line 63
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 65
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_12dba9477e68c98a641f55b0b2a0829b44d37d8dc42e49e170273f992a165b78->leave($__internal_12dba9477e68c98a641f55b0b2a0829b44d37d8dc42e49e170273f992a165b78_prof);

    }

    public function getTemplateName()
    {
        return "blog/post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 65,  176 => 63,  173 => 59,  166 => 55,  162 => 54,  159 => 53,  156 => 52,  150 => 51,  136 => 46,  133 => 45,  124 => 41,  117 => 38,  111 => 34,  107 => 32,  102 => 31,  97 => 29,  93 => 27,  87 => 24,  82 => 22,  78 => 21,  75 => 20,  69 => 18,  66 => 17,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_post_show' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ post.title }}</h1>*/
/* */
/*     {{ post.content|md2html }}*/
/* */
/*     <div id="post-add-comment" class="well">*/
/*         {# The 'IS_AUTHENTICATED_FULLY' role ensures that the user has entered*/
/*         his/her credentials (login + password) during this session. If he/she*/
/*         is automatically logged via the 'Remember Me' functionality, he/she won't*/
/*         be able to add a comment.*/
/*         See http://symfony.com/doc/current/cookbook/security/remember_me.html#forcing-the-user-to-re-authenticate-before-accessing-certain-resources*/
/*         #}*/
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*             {{ render(controller('AppBundle:Blog:commentForm', { 'id': post.id })) }}*/
/*         {% else %}*/
/*             <p>*/
/*                 <a class="btn btn-success" href="{{ path('security_login') }}">*/
/*                     <i class="fa fa-sign-in"></i> {{ 'action.sign_in'|trans }}*/
/*                 </a>*/
/*                 {{ 'post.to_publish_a_comment'|trans }}*/
/*             </p>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <h3>{{ 'post.num_comments'|transchoice(post.comments|length) }}</h3>*/
/* */
/*     {% for comment in post.comments %}*/
/*         <div class="row post-comment">*/
/*             <h4 class="col-sm-3">*/
/*                 <strong>{{ comment.authorEmail }}</strong> {{ 'post.commented_on'|trans }}*/
/*                 {# it's not mandatory to set the timezone in localizeddate(). This is done to*/
/*                    avoid errors when the 'intl' PHP extension is not available and the application*/
/*                    is forced to use the limited "intl polyfill", which only supports UTC and GMT #}*/
/*                 <strong>{{ comment.publishedAt|localizeddate('medium', 'short', null, 'UTC') }}</strong>*/
/*             </h4>*/
/*             <div class="col-sm-9">*/
/*                 {{ comment.content|md2html }}*/
/*             </div>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="post-comment">*/
/*             <p>{{ 'post.no_comments'|trans }}</p>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {% if app.user and post.isAuthor(app.user) %}*/
/*         <div class="section">*/
/*             <a class="btn btn-lg btn-block btn-success" href="{{ path('admin_post_edit', { id: post.id }) }}">*/
/*                 <i class="fa fa-edit"></i> {{ 'action.edit_post'|trans }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {# the parent() function includes the contents defined by the parent template*/
/*       ('base.html.twig') for this block ('sidebar'). This is a very convenient way*/
/*       to share common contents in different templates #}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
