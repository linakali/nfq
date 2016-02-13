<?php

/* base.html.twig */
class __TwigTemplate_757f0404f43aa5ae9c63d53dddea1d1f01b7c374232ce639b8b7fa557e4ebd6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10bfbf514c1d4bf9a6ca2793d0e9121a838276a7dc486f3556a8cd7325c7165f = $this->env->getExtension("native_profiler");
        $__internal_10bfbf514c1d4bf9a6ca2793d0e9121a838276a7dc486f3556a8cd7325c7165f->enter($__internal_10bfbf514c1d4bf9a6ca2793d0e9121a838276a7dc486f3556a8cd7325c7165f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_10bfbf514c1d4bf9a6ca2793d0e9121a838276a7dc486f3556a8cd7325c7165f->leave($__internal_10bfbf514c1d4bf9a6ca2793d0e9121a838276a7dc486f3556a8cd7325c7165f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d1ad77493dd482ce2aaf4965c0dffe2370013b970d6b207908a59df4906f32f = $this->env->getExtension("native_profiler");
        $__internal_1d1ad77493dd482ce2aaf4965c0dffe2370013b970d6b207908a59df4906f32f->enter($__internal_1d1ad77493dd482ce2aaf4965c0dffe2370013b970d6b207908a59df4906f32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1d1ad77493dd482ce2aaf4965c0dffe2370013b970d6b207908a59df4906f32f->leave($__internal_1d1ad77493dd482ce2aaf4965c0dffe2370013b970d6b207908a59df4906f32f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f91bd067f16a42ebfd4a47d596be3ecfcfcdc7eb5efc7e3ad95ffbee4565416 = $this->env->getExtension("native_profiler");
        $__internal_9f91bd067f16a42ebfd4a47d596be3ecfcfcdc7eb5efc7e3ad95ffbee4565416->enter($__internal_9f91bd067f16a42ebfd4a47d596be3ecfcfcdc7eb5efc7e3ad95ffbee4565416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9f91bd067f16a42ebfd4a47d596be3ecfcfcdc7eb5efc7e3ad95ffbee4565416->leave($__internal_9f91bd067f16a42ebfd4a47d596be3ecfcfcdc7eb5efc7e3ad95ffbee4565416_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b87613e0fbb6f62b5910f3e53579e823d972faaf571be3dbb8c24945eeff7e7e = $this->env->getExtension("native_profiler");
        $__internal_b87613e0fbb6f62b5910f3e53579e823d972faaf571be3dbb8c24945eeff7e7e->enter($__internal_b87613e0fbb6f62b5910f3e53579e823d972faaf571be3dbb8c24945eeff7e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b87613e0fbb6f62b5910f3e53579e823d972faaf571be3dbb8c24945eeff7e7e->leave($__internal_b87613e0fbb6f62b5910f3e53579e823d972faaf571be3dbb8c24945eeff7e7e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e5c3a67ad79728be1ca37f482a42751fb64804fe57a095f966a2d7633f776222 = $this->env->getExtension("native_profiler");
        $__internal_e5c3a67ad79728be1ca37f482a42751fb64804fe57a095f966a2d7633f776222->enter($__internal_e5c3a67ad79728be1ca37f482a42751fb64804fe57a095f966a2d7633f776222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5c3a67ad79728be1ca37f482a42751fb64804fe57a095f966a2d7633f776222->leave($__internal_e5c3a67ad79728be1ca37f482a42751fb64804fe57a095f966a2d7633f776222_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
