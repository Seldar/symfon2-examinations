<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a49ebe128d6f3935763ce8f5dab037fd87168e40152f16cfeb21ff2c06d3b975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_464d07a38ff31eebdc32be6c18d8507b423fcc976d16289c2259ebbebb2926c4 = $this->env->getExtension("native_profiler");
        $__internal_464d07a38ff31eebdc32be6c18d8507b423fcc976d16289c2259ebbebb2926c4->enter($__internal_464d07a38ff31eebdc32be6c18d8507b423fcc976d16289c2259ebbebb2926c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_464d07a38ff31eebdc32be6c18d8507b423fcc976d16289c2259ebbebb2926c4->leave($__internal_464d07a38ff31eebdc32be6c18d8507b423fcc976d16289c2259ebbebb2926c4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e4d369e06023d49760810e1bd9534f5d8239b29a943ddd0d22b09226466665b = $this->env->getExtension("native_profiler");
        $__internal_9e4d369e06023d49760810e1bd9534f5d8239b29a943ddd0d22b09226466665b->enter($__internal_9e4d369e06023d49760810e1bd9534f5d8239b29a943ddd0d22b09226466665b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9e4d369e06023d49760810e1bd9534f5d8239b29a943ddd0d22b09226466665b->leave($__internal_9e4d369e06023d49760810e1bd9534f5d8239b29a943ddd0d22b09226466665b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8b8963841120fe6948ff5efa0ef64435472250f1e2320c2418bc6b3e4f13988 = $this->env->getExtension("native_profiler");
        $__internal_f8b8963841120fe6948ff5efa0ef64435472250f1e2320c2418bc6b3e4f13988->enter($__internal_f8b8963841120fe6948ff5efa0ef64435472250f1e2320c2418bc6b3e4f13988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f8b8963841120fe6948ff5efa0ef64435472250f1e2320c2418bc6b3e4f13988->leave($__internal_f8b8963841120fe6948ff5efa0ef64435472250f1e2320c2418bc6b3e4f13988_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2168d32439029fbc2e39b22e6093a2d45745313d47e3c87f615fedca0e7840bf = $this->env->getExtension("native_profiler");
        $__internal_2168d32439029fbc2e39b22e6093a2d45745313d47e3c87f615fedca0e7840bf->enter($__internal_2168d32439029fbc2e39b22e6093a2d45745313d47e3c87f615fedca0e7840bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2168d32439029fbc2e39b22e6093a2d45745313d47e3c87f615fedca0e7840bf->leave($__internal_2168d32439029fbc2e39b22e6093a2d45745313d47e3c87f615fedca0e7840bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
