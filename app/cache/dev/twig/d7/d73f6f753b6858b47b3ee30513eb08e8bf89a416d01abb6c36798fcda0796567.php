<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1441a383581eaca67c90fb22debf4e13d10a04531a2e143bb71db3ab2fcb6fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_31b2e4e10519008d1cb2d8451b5108eb3fec5551b2dbacea82ef7f06d6f2c6a0 = $this->env->getExtension("native_profiler");
        $__internal_31b2e4e10519008d1cb2d8451b5108eb3fec5551b2dbacea82ef7f06d6f2c6a0->enter($__internal_31b2e4e10519008d1cb2d8451b5108eb3fec5551b2dbacea82ef7f06d6f2c6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b2e4e10519008d1cb2d8451b5108eb3fec5551b2dbacea82ef7f06d6f2c6a0->leave($__internal_31b2e4e10519008d1cb2d8451b5108eb3fec5551b2dbacea82ef7f06d6f2c6a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88309b8162e5f9200d3856be7fa26b90392c72d566ad638b496c4a17ac000cce = $this->env->getExtension("native_profiler");
        $__internal_88309b8162e5f9200d3856be7fa26b90392c72d566ad638b496c4a17ac000cce->enter($__internal_88309b8162e5f9200d3856be7fa26b90392c72d566ad638b496c4a17ac000cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_88309b8162e5f9200d3856be7fa26b90392c72d566ad638b496c4a17ac000cce->leave($__internal_88309b8162e5f9200d3856be7fa26b90392c72d566ad638b496c4a17ac000cce_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84b3e73c514c8dbd569aedf3a0e487a6beeae41229e68d44bc3d8ddd7e097d12 = $this->env->getExtension("native_profiler");
        $__internal_84b3e73c514c8dbd569aedf3a0e487a6beeae41229e68d44bc3d8ddd7e097d12->enter($__internal_84b3e73c514c8dbd569aedf3a0e487a6beeae41229e68d44bc3d8ddd7e097d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_84b3e73c514c8dbd569aedf3a0e487a6beeae41229e68d44bc3d8ddd7e097d12->leave($__internal_84b3e73c514c8dbd569aedf3a0e487a6beeae41229e68d44bc3d8ddd7e097d12_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0795d1bd218fbf51eb3a6b2d7e5807bb909805c6c23e617bfb8bf014daa3717f = $this->env->getExtension("native_profiler");
        $__internal_0795d1bd218fbf51eb3a6b2d7e5807bb909805c6c23e617bfb8bf014daa3717f->enter($__internal_0795d1bd218fbf51eb3a6b2d7e5807bb909805c6c23e617bfb8bf014daa3717f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0795d1bd218fbf51eb3a6b2d7e5807bb909805c6c23e617bfb8bf014daa3717f->leave($__internal_0795d1bd218fbf51eb3a6b2d7e5807bb909805c6c23e617bfb8bf014daa3717f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
