<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1bae85516d5b543af0136d9adf190bc5414b29e633e0a00ffdf087772d3695fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51c33a589204744e065559d057ac76afc73fbd983afdb0d67cd881dd409d5876 = $this->env->getExtension("native_profiler");
        $__internal_51c33a589204744e065559d057ac76afc73fbd983afdb0d67cd881dd409d5876->enter($__internal_51c33a589204744e065559d057ac76afc73fbd983afdb0d67cd881dd409d5876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51c33a589204744e065559d057ac76afc73fbd983afdb0d67cd881dd409d5876->leave($__internal_51c33a589204744e065559d057ac76afc73fbd983afdb0d67cd881dd409d5876_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_373996aea50c68d9fb9ea717fa91a3a8d87bdf7f987d0c8a2b395980c23bb359 = $this->env->getExtension("native_profiler");
        $__internal_373996aea50c68d9fb9ea717fa91a3a8d87bdf7f987d0c8a2b395980c23bb359->enter($__internal_373996aea50c68d9fb9ea717fa91a3a8d87bdf7f987d0c8a2b395980c23bb359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_373996aea50c68d9fb9ea717fa91a3a8d87bdf7f987d0c8a2b395980c23bb359->leave($__internal_373996aea50c68d9fb9ea717fa91a3a8d87bdf7f987d0c8a2b395980c23bb359_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be76b0ff92bbe41011665712746a3989204e7dc5d7eb3f6e53f7dc33c0fe0331 = $this->env->getExtension("native_profiler");
        $__internal_be76b0ff92bbe41011665712746a3989204e7dc5d7eb3f6e53f7dc33c0fe0331->enter($__internal_be76b0ff92bbe41011665712746a3989204e7dc5d7eb3f6e53f7dc33c0fe0331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_be76b0ff92bbe41011665712746a3989204e7dc5d7eb3f6e53f7dc33c0fe0331->leave($__internal_be76b0ff92bbe41011665712746a3989204e7dc5d7eb3f6e53f7dc33c0fe0331_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_439830d881d571fd3253cecff318d48a0e1b4391e9d89357aee92ddb8ffd312a = $this->env->getExtension("native_profiler");
        $__internal_439830d881d571fd3253cecff318d48a0e1b4391e9d89357aee92ddb8ffd312a->enter($__internal_439830d881d571fd3253cecff318d48a0e1b4391e9d89357aee92ddb8ffd312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_439830d881d571fd3253cecff318d48a0e1b4391e9d89357aee92ddb8ffd312a->leave($__internal_439830d881d571fd3253cecff318d48a0e1b4391e9d89357aee92ddb8ffd312a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
