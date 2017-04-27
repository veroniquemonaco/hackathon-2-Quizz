<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_81af507a7ea12d70a823f5e96361d0e343d20806cf1d8437f43b7f3f4d4568c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50b653f77fb96a2390161f6088ca41f60a245da13f34b80a772b031b7febf89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b653f77fb96a2390161f6088ca41f60a245da13f34b80a772b031b7febf89e->enter($__internal_50b653f77fb96a2390161f6088ca41f60a245da13f34b80a772b031b7febf89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f0cfba02eccb4cbeee2b04a0f9f11de8f54c467475a666e92890c3acaa31ff4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cfba02eccb4cbeee2b04a0f9f11de8f54c467475a666e92890c3acaa31ff4f->enter($__internal_f0cfba02eccb4cbeee2b04a0f9f11de8f54c467475a666e92890c3acaa31ff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_50b653f77fb96a2390161f6088ca41f60a245da13f34b80a772b031b7febf89e->leave($__internal_50b653f77fb96a2390161f6088ca41f60a245da13f34b80a772b031b7febf89e_prof);

        
        $__internal_f0cfba02eccb4cbeee2b04a0f9f11de8f54c467475a666e92890c3acaa31ff4f->leave($__internal_f0cfba02eccb4cbeee2b04a0f9f11de8f54c467475a666e92890c3acaa31ff4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
