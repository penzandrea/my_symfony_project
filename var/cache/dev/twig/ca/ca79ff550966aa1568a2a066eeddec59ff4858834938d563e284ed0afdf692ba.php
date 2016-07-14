<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5e9c27ffe58814c99cbbaed1e0d5e3defa746b14e96c5bf1d06adbcbb6336c66 extends Twig_Template
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
        $__internal_e130087bca227ef170fd0768222b9a3d244b04367984462346882c301380300e = $this->env->getExtension("native_profiler");
        $__internal_e130087bca227ef170fd0768222b9a3d244b04367984462346882c301380300e->enter($__internal_e130087bca227ef170fd0768222b9a3d244b04367984462346882c301380300e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e130087bca227ef170fd0768222b9a3d244b04367984462346882c301380300e->leave($__internal_e130087bca227ef170fd0768222b9a3d244b04367984462346882c301380300e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_33be02a2064d2c455d7b306faf4d652311ffd72aed66e9656c5064a06c0af30a = $this->env->getExtension("native_profiler");
        $__internal_33be02a2064d2c455d7b306faf4d652311ffd72aed66e9656c5064a06c0af30a->enter($__internal_33be02a2064d2c455d7b306faf4d652311ffd72aed66e9656c5064a06c0af30a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_33be02a2064d2c455d7b306faf4d652311ffd72aed66e9656c5064a06c0af30a->leave($__internal_33be02a2064d2c455d7b306faf4d652311ffd72aed66e9656c5064a06c0af30a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1226ceca37f1fbb0e4fb25528bae9043d6becbfc2e1f1b2a28d03538e164997d = $this->env->getExtension("native_profiler");
        $__internal_1226ceca37f1fbb0e4fb25528bae9043d6becbfc2e1f1b2a28d03538e164997d->enter($__internal_1226ceca37f1fbb0e4fb25528bae9043d6becbfc2e1f1b2a28d03538e164997d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1226ceca37f1fbb0e4fb25528bae9043d6becbfc2e1f1b2a28d03538e164997d->leave($__internal_1226ceca37f1fbb0e4fb25528bae9043d6becbfc2e1f1b2a28d03538e164997d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d9005be645e1fe7f470ea26fafb451194336ef5752504977f21264399807419 = $this->env->getExtension("native_profiler");
        $__internal_9d9005be645e1fe7f470ea26fafb451194336ef5752504977f21264399807419->enter($__internal_9d9005be645e1fe7f470ea26fafb451194336ef5752504977f21264399807419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d9005be645e1fe7f470ea26fafb451194336ef5752504977f21264399807419->leave($__internal_9d9005be645e1fe7f470ea26fafb451194336ef5752504977f21264399807419_prof);

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
