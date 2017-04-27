<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_439babb4dd694130755fe84d4f6f45cedc5495227eefcfcfb935f592abc1cfcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_541d18975c32f5c12c493acdc60f834b875d754c8a075441e8b778ae1a69b9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_541d18975c32f5c12c493acdc60f834b875d754c8a075441e8b778ae1a69b9ec->enter($__internal_541d18975c32f5c12c493acdc60f834b875d754c8a075441e8b778ae1a69b9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8a33ae8847190aca657741e9996d7e117b2041d5f242ea82a235c85902b599ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a33ae8847190aca657741e9996d7e117b2041d5f242ea82a235c85902b599ec->enter($__internal_8a33ae8847190aca657741e9996d7e117b2041d5f242ea82a235c85902b599ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_541d18975c32f5c12c493acdc60f834b875d754c8a075441e8b778ae1a69b9ec->leave($__internal_541d18975c32f5c12c493acdc60f834b875d754c8a075441e8b778ae1a69b9ec_prof);

        
        $__internal_8a33ae8847190aca657741e9996d7e117b2041d5f242ea82a235c85902b599ec->leave($__internal_8a33ae8847190aca657741e9996d7e117b2041d5f242ea82a235c85902b599ec_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0694a9764b16711d474c1dd978fdedd8baea630c42a7937e5e4275bf26b24eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0694a9764b16711d474c1dd978fdedd8baea630c42a7937e5e4275bf26b24eac->enter($__internal_0694a9764b16711d474c1dd978fdedd8baea630c42a7937e5e4275bf26b24eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee4c7a3bb4d2466f1dfef40bd478a3aa64adbe4c4bfc9680d1eb8975dab6e1b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee4c7a3bb4d2466f1dfef40bd478a3aa64adbe4c4bfc9680d1eb8975dab6e1b7->enter($__internal_ee4c7a3bb4d2466f1dfef40bd478a3aa64adbe4c4bfc9680d1eb8975dab6e1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ee4c7a3bb4d2466f1dfef40bd478a3aa64adbe4c4bfc9680d1eb8975dab6e1b7->leave($__internal_ee4c7a3bb4d2466f1dfef40bd478a3aa64adbe4c4bfc9680d1eb8975dab6e1b7_prof);

        
        $__internal_0694a9764b16711d474c1dd978fdedd8baea630c42a7937e5e4275bf26b24eac->leave($__internal_0694a9764b16711d474c1dd978fdedd8baea630c42a7937e5e4275bf26b24eac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
