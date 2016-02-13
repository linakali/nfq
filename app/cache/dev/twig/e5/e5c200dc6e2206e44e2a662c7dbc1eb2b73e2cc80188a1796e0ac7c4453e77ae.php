<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bd1ec57fcae9f98c992f3770ba0a8a91e177c45ce017dd038a6c2054bdcf34e5 extends Twig_Template
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
        $__internal_65a2e1219586e51170f5682d11785ba3f11be6cb95f044415561d527fdabb78d = $this->env->getExtension("native_profiler");
        $__internal_65a2e1219586e51170f5682d11785ba3f11be6cb95f044415561d527fdabb78d->enter($__internal_65a2e1219586e51170f5682d11785ba3f11be6cb95f044415561d527fdabb78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65a2e1219586e51170f5682d11785ba3f11be6cb95f044415561d527fdabb78d->leave($__internal_65a2e1219586e51170f5682d11785ba3f11be6cb95f044415561d527fdabb78d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_363e52334b63df110d55400d6a508ec91b39173c6869c445d0e573e43ed83a36 = $this->env->getExtension("native_profiler");
        $__internal_363e52334b63df110d55400d6a508ec91b39173c6869c445d0e573e43ed83a36->enter($__internal_363e52334b63df110d55400d6a508ec91b39173c6869c445d0e573e43ed83a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_363e52334b63df110d55400d6a508ec91b39173c6869c445d0e573e43ed83a36->leave($__internal_363e52334b63df110d55400d6a508ec91b39173c6869c445d0e573e43ed83a36_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ef2057d29f6685b7a81e25949af3f1ea243db5e95a75f01d7a7ac8c7a64bdb4 = $this->env->getExtension("native_profiler");
        $__internal_7ef2057d29f6685b7a81e25949af3f1ea243db5e95a75f01d7a7ac8c7a64bdb4->enter($__internal_7ef2057d29f6685b7a81e25949af3f1ea243db5e95a75f01d7a7ac8c7a64bdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ef2057d29f6685b7a81e25949af3f1ea243db5e95a75f01d7a7ac8c7a64bdb4->leave($__internal_7ef2057d29f6685b7a81e25949af3f1ea243db5e95a75f01d7a7ac8c7a64bdb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b24fa2f58ac2c8da9a701fd2322c251bb28d662826c228e05127b94f9b9283d = $this->env->getExtension("native_profiler");
        $__internal_5b24fa2f58ac2c8da9a701fd2322c251bb28d662826c228e05127b94f9b9283d->enter($__internal_5b24fa2f58ac2c8da9a701fd2322c251bb28d662826c228e05127b94f9b9283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b24fa2f58ac2c8da9a701fd2322c251bb28d662826c228e05127b94f9b9283d->leave($__internal_5b24fa2f58ac2c8da9a701fd2322c251bb28d662826c228e05127b94f9b9283d_prof);

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
