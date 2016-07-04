<?php

/* default/homepage.html.twig */
class __TwigTemplate_d428e9937019f5d5c630a890894de12c555fbe1c2fcb23421b1f0f920f1f67ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f849538f25d3786a4aec3faa4b18c0456d09601ca1d1387f5c7621cb2e5108c5 = $this->env->getExtension("native_profiler");
        $__internal_f849538f25d3786a4aec3faa4b18c0456d09601ca1d1387f5c7621cb2e5108c5->enter($__internal_f849538f25d3786a4aec3faa4b18c0456d09601ca1d1387f5c7621cb2e5108c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f849538f25d3786a4aec3faa4b18c0456d09601ca1d1387f5c7621cb2e5108c5->leave($__internal_f849538f25d3786a4aec3faa4b18c0456d09601ca1d1387f5c7621cb2e5108c5_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b75a996eeb4900101a89e73c2be75e77891b98990215681924b1ace821c09bc0 = $this->env->getExtension("native_profiler");
        $__internal_b75a996eeb4900101a89e73c2be75e77891b98990215681924b1ace821c09bc0->enter($__internal_b75a996eeb4900101a89e73c2be75e77891b98990215681924b1ace821c09bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_b75a996eeb4900101a89e73c2be75e77891b98990215681924b1ace821c09bc0->leave($__internal_b75a996eeb4900101a89e73c2be75e77891b98990215681924b1ace821c09bc0_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_3d9dff9c6bd9800362e56a615865e709ef6a007e6390b3320f606ab0629cfba1 = $this->env->getExtension("native_profiler");
        $__internal_3d9dff9c6bd9800362e56a615865e709ef6a007e6390b3320f606ab0629cfba1->enter($__internal_3d9dff9c6bd9800362e56a615865e709ef6a007e6390b3320f606ab0629cfba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_3d9dff9c6bd9800362e56a615865e709ef6a007e6390b3320f606ab0629cfba1->leave($__internal_3d9dff9c6bd9800362e56a615865e709ef6a007e6390b3320f606ab0629cfba1_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9ca08451793e5dfe5f396ba6468e5c630ee1b97e09a46281465946a4ca3ac7fa = $this->env->getExtension("native_profiler");
        $__internal_9ca08451793e5dfe5f396ba6468e5c630ee1b97e09a46281465946a4ca3ac7fa->enter($__internal_9ca08451793e5dfe5f396ba6468e5c630ee1b97e09a46281465946a4ca3ac7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_9ca08451793e5dfe5f396ba6468e5c630ee1b97e09a46281465946a4ca3ac7fa->leave($__internal_9ca08451793e5dfe5f396ba6468e5c630ee1b97e09a46281465946a4ca3ac7fa_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfc6b9eda8568db766b063cbd03f35c9df3a1747b129a2ed7eed92bbe6811553 = $this->env->getExtension("native_profiler");
        $__internal_bfc6b9eda8568db766b063cbd03f35c9df3a1747b129a2ed7eed92bbe6811553->enter($__internal_bfc6b9eda8568db766b063cbd03f35c9df3a1747b129a2ed7eed92bbe6811553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_bfc6b9eda8568db766b063cbd03f35c9df3a1747b129a2ed7eed92bbe6811553->leave($__internal_bfc6b9eda8568db766b063cbd03f35c9df3a1747b129a2ed7eed92bbe6811553_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ 'title.homepage'|trans|raw }}</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_app'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('blog_index') }}">*/
/*                         <i class="fa fa-users"></i> {{ 'action.browse_app'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_admin'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('admin_index') }}">*/
/*                         <i class="fa fa-lock"></i> {{ 'action.browse_admin'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
