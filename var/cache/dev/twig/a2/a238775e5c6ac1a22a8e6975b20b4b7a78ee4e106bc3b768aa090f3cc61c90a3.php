<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_6234ed2d1b80a3d025fbc947a015147b38dd903d27074f48fada43ff754e9afd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f149c5802561f3dc91de33b4588d10a484e86c79374207a0a0f5eb9bd4fe0db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f149c5802561f3dc91de33b4588d10a484e86c79374207a0a0f5eb9bd4fe0db6->enter($__internal_f149c5802561f3dc91de33b4588d10a484e86c79374207a0a0f5eb9bd4fe0db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d50ac2494180f261ba29f0c94613a884dfa0fe5662d955c0ecc1011d7d074472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50ac2494180f261ba29f0c94613a884dfa0fe5662d955c0ecc1011d7d074472->enter($__internal_d50ac2494180f261ba29f0c94613a884dfa0fe5662d955c0ecc1011d7d074472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f149c5802561f3dc91de33b4588d10a484e86c79374207a0a0f5eb9bd4fe0db6->leave($__internal_f149c5802561f3dc91de33b4588d10a484e86c79374207a0a0f5eb9bd4fe0db6_prof);

        
        $__internal_d50ac2494180f261ba29f0c94613a884dfa0fe5662d955c0ecc1011d7d074472->leave($__internal_d50ac2494180f261ba29f0c94613a884dfa0fe5662d955c0ecc1011d7d074472_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d7a40e7f886dbd0a316da7b55b478ea45b17b26e838ef03176c4f14c03300f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7a40e7f886dbd0a316da7b55b478ea45b17b26e838ef03176c4f14c03300f4->enter($__internal_3d7a40e7f886dbd0a316da7b55b478ea45b17b26e838ef03176c4f14c03300f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ffe465497e08fbcac85506d00040bfd77f50fbfe8abf9c4c4ace3c59d86f7a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe465497e08fbcac85506d00040bfd77f50fbfe8abf9c4c4ace3c59d86f7a30->enter($__internal_ffe465497e08fbcac85506d00040bfd77f50fbfe8abf9c4c4ace3c59d86f7a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ffe465497e08fbcac85506d00040bfd77f50fbfe8abf9c4c4ace3c59d86f7a30->leave($__internal_ffe465497e08fbcac85506d00040bfd77f50fbfe8abf9c4c4ace3c59d86f7a30_prof);

        
        $__internal_3d7a40e7f886dbd0a316da7b55b478ea45b17b26e838ef03176c4f14c03300f4->leave($__internal_3d7a40e7f886dbd0a316da7b55b478ea45b17b26e838ef03176c4f14c03300f4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0be8557612b5b8d9304a4b98229029d9b0342150b8603b73a2e87912370791df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be8557612b5b8d9304a4b98229029d9b0342150b8603b73a2e87912370791df->enter($__internal_0be8557612b5b8d9304a4b98229029d9b0342150b8603b73a2e87912370791df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b0e8262b42ced119220e76b4ac80a585921662c6a1575c69c36879a882ac33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b0e8262b42ced119220e76b4ac80a585921662c6a1575c69c36879a882ac33e->enter($__internal_2b0e8262b42ced119220e76b4ac80a585921662c6a1575c69c36879a882ac33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_2b0e8262b42ced119220e76b4ac80a585921662c6a1575c69c36879a882ac33e->leave($__internal_2b0e8262b42ced119220e76b4ac80a585921662c6a1575c69c36879a882ac33e_prof);

        
        $__internal_0be8557612b5b8d9304a4b98229029d9b0342150b8603b73a2e87912370791df->leave($__internal_0be8557612b5b8d9304a4b98229029d9b0342150b8603b73a2e87912370791df_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
