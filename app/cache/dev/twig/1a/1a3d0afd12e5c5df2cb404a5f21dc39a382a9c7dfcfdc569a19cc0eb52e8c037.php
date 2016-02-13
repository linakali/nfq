<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d646cb7d4ead40dd1550e24a42dc6ef189e32c9e840beab17da3b49e04ad727b extends Twig_Template
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
        $__internal_9ff08d524784b432693c007cb08cc40955077a55575b33349c166726b98f1a6c = $this->env->getExtension("native_profiler");
        $__internal_9ff08d524784b432693c007cb08cc40955077a55575b33349c166726b98f1a6c->enter($__internal_9ff08d524784b432693c007cb08cc40955077a55575b33349c166726b98f1a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff08d524784b432693c007cb08cc40955077a55575b33349c166726b98f1a6c->leave($__internal_9ff08d524784b432693c007cb08cc40955077a55575b33349c166726b98f1a6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fac36f430f6ffa4eefac730615ba5f85c8f8044f0087d42bf0e638abbd40941e = $this->env->getExtension("native_profiler");
        $__internal_fac36f430f6ffa4eefac730615ba5f85c8f8044f0087d42bf0e638abbd40941e->enter($__internal_fac36f430f6ffa4eefac730615ba5f85c8f8044f0087d42bf0e638abbd40941e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fac36f430f6ffa4eefac730615ba5f85c8f8044f0087d42bf0e638abbd40941e->leave($__internal_fac36f430f6ffa4eefac730615ba5f85c8f8044f0087d42bf0e638abbd40941e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8835f2054e7424901b516e2f8f93243a841f080ddf63e031fdf4738ebdec70af = $this->env->getExtension("native_profiler");
        $__internal_8835f2054e7424901b516e2f8f93243a841f080ddf63e031fdf4738ebdec70af->enter($__internal_8835f2054e7424901b516e2f8f93243a841f080ddf63e031fdf4738ebdec70af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8835f2054e7424901b516e2f8f93243a841f080ddf63e031fdf4738ebdec70af->leave($__internal_8835f2054e7424901b516e2f8f93243a841f080ddf63e031fdf4738ebdec70af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_df4eaad3b9901cd2a2a6d792071bc84fd84ee08bef050b2a6a6830e2a04b1e82 = $this->env->getExtension("native_profiler");
        $__internal_df4eaad3b9901cd2a2a6d792071bc84fd84ee08bef050b2a6a6830e2a04b1e82->enter($__internal_df4eaad3b9901cd2a2a6d792071bc84fd84ee08bef050b2a6a6830e2a04b1e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_df4eaad3b9901cd2a2a6d792071bc84fd84ee08bef050b2a6a6830e2a04b1e82->leave($__internal_df4eaad3b9901cd2a2a6d792071bc84fd84ee08bef050b2a6a6830e2a04b1e82_prof);

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
