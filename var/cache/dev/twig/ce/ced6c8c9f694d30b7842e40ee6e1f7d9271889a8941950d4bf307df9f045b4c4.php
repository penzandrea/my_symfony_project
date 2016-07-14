<?php

/* base.html.twig */
class __TwigTemplate_10570eafe765c7328578a548ffc4179e5b0895c670492d41c52fee0db5169228 extends Twig_Template
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
        $__internal_a711e254e3d985b412319a66c0e20b130aeec38d15dd98124c6079c565b34d0f = $this->env->getExtension("native_profiler");
        $__internal_a711e254e3d985b412319a66c0e20b130aeec38d15dd98124c6079c565b34d0f->enter($__internal_a711e254e3d985b412319a66c0e20b130aeec38d15dd98124c6079c565b34d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a711e254e3d985b412319a66c0e20b130aeec38d15dd98124c6079c565b34d0f->leave($__internal_a711e254e3d985b412319a66c0e20b130aeec38d15dd98124c6079c565b34d0f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_de3f7ee4e8e31b8a48775682418823173443dad11b12a921a5979eaf964e4c4e = $this->env->getExtension("native_profiler");
        $__internal_de3f7ee4e8e31b8a48775682418823173443dad11b12a921a5979eaf964e4c4e->enter($__internal_de3f7ee4e8e31b8a48775682418823173443dad11b12a921a5979eaf964e4c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_de3f7ee4e8e31b8a48775682418823173443dad11b12a921a5979eaf964e4c4e->leave($__internal_de3f7ee4e8e31b8a48775682418823173443dad11b12a921a5979eaf964e4c4e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a23a0bed90e8654433e896420da28c3ef725bcc851217656ce96223babccd31 = $this->env->getExtension("native_profiler");
        $__internal_4a23a0bed90e8654433e896420da28c3ef725bcc851217656ce96223babccd31->enter($__internal_4a23a0bed90e8654433e896420da28c3ef725bcc851217656ce96223babccd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4a23a0bed90e8654433e896420da28c3ef725bcc851217656ce96223babccd31->leave($__internal_4a23a0bed90e8654433e896420da28c3ef725bcc851217656ce96223babccd31_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_54203b8043c87cd8c00d7228133e9aee872d56f473fb0237048c646d30c00b64 = $this->env->getExtension("native_profiler");
        $__internal_54203b8043c87cd8c00d7228133e9aee872d56f473fb0237048c646d30c00b64->enter($__internal_54203b8043c87cd8c00d7228133e9aee872d56f473fb0237048c646d30c00b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_54203b8043c87cd8c00d7228133e9aee872d56f473fb0237048c646d30c00b64->leave($__internal_54203b8043c87cd8c00d7228133e9aee872d56f473fb0237048c646d30c00b64_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6631a42e037651af7b721813692e7fb593f9ed5134f8e737f9239ca70c18c047 = $this->env->getExtension("native_profiler");
        $__internal_6631a42e037651af7b721813692e7fb593f9ed5134f8e737f9239ca70c18c047->enter($__internal_6631a42e037651af7b721813692e7fb593f9ed5134f8e737f9239ca70c18c047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6631a42e037651af7b721813692e7fb593f9ed5134f8e737f9239ca70c18c047->leave($__internal_6631a42e037651af7b721813692e7fb593f9ed5134f8e737f9239ca70c18c047_prof);

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
