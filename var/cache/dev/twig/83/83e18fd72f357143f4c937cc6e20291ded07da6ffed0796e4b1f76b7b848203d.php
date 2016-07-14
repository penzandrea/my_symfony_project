<?php

/* default/hello.html.twig */
class __TwigTemplate_a3a37f4de607033171b3c3c930c365e9d873cfef5b1a20e35ba422ced8da2483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/hello.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24582b9f52ad2778574d1460af81c0f918c4d2a5f42a246cd2298b1202702fe2 = $this->env->getExtension("native_profiler");
        $__internal_24582b9f52ad2778574d1460af81c0f918c4d2a5f42a246cd2298b1202702fe2->enter($__internal_24582b9f52ad2778574d1460af81c0f918c4d2a5f42a246cd2298b1202702fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/hello.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24582b9f52ad2778574d1460af81c0f918c4d2a5f42a246cd2298b1202702fe2->leave($__internal_24582b9f52ad2778574d1460af81c0f918c4d2a5f42a246cd2298b1202702fe2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_65879183ab2f879fc4dd0b9f97a251529f24107c42552bb46735434063cc1b46 = $this->env->getExtension("native_profiler");
        $__internal_65879183ab2f879fc4dd0b9f97a251529f24107c42552bb46735434063cc1b46->enter($__internal_65879183ab2f879fc4dd0b9f97a251529f24107c42552bb46735434063cc1b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    ";
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo")));
        echo "
    <h1>Hi ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! Welcome to Symfony!</h1>    
    <p>Hi ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["pathInfo"]) ? $context["pathInfo"] : $this->getContext($context, "pathInfo")), "html", null, true);
        echo "! Welcome to Symfony!</p>

";
        
        $__internal_65879183ab2f879fc4dd0b9f97a251529f24107c42552bb46735434063cc1b46->leave($__internal_65879183ab2f879fc4dd0b9f97a251529f24107c42552bb46735434063cc1b46_prof);

    }

    public function getTemplateName()
    {
        return "default/hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  45 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     {{ dump(pathInfo)}}*/
/*     <h1>Hi {{ name }}! Welcome to Symfony!</h1>    */
/*     <p>Hi {{ pathInfo }}! Welcome to Symfony!</p>*/
/* */
/* {% endblock %}*/
