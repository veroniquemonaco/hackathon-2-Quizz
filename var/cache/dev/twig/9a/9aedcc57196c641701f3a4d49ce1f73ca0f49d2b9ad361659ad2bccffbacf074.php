<?php

/* ::base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
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
        $__internal_b80e11a03a25e0eee88ed6765a119c412882675565ad4de07b35fce855f285b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80e11a03a25e0eee88ed6765a119c412882675565ad4de07b35fce855f285b2->enter($__internal_b80e11a03a25e0eee88ed6765a119c412882675565ad4de07b35fce855f285b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4a8d32e997da7bf8d393a602fc6a2b46225ac00c503ed024b94aeae9dbc3fee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8d32e997da7bf8d393a602fc6a2b46225ac00c503ed024b94aeae9dbc3fee9->enter($__internal_4a8d32e997da7bf8d393a602fc6a2b46225ac00c503ed024b94aeae9dbc3fee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_b80e11a03a25e0eee88ed6765a119c412882675565ad4de07b35fce855f285b2->leave($__internal_b80e11a03a25e0eee88ed6765a119c412882675565ad4de07b35fce855f285b2_prof);

        
        $__internal_4a8d32e997da7bf8d393a602fc6a2b46225ac00c503ed024b94aeae9dbc3fee9->leave($__internal_4a8d32e997da7bf8d393a602fc6a2b46225ac00c503ed024b94aeae9dbc3fee9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8e33743fbd5baa2a4dc13136f17f56a04147714c9d04ab9dbc7a86800392384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e33743fbd5baa2a4dc13136f17f56a04147714c9d04ab9dbc7a86800392384->enter($__internal_f8e33743fbd5baa2a4dc13136f17f56a04147714c9d04ab9dbc7a86800392384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed668f6bc945e551c9e0c0c80fabe2c8da7ac2f001ce6edb54ab378b7fb13487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed668f6bc945e551c9e0c0c80fabe2c8da7ac2f001ce6edb54ab378b7fb13487->enter($__internal_ed668f6bc945e551c9e0c0c80fabe2c8da7ac2f001ce6edb54ab378b7fb13487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ed668f6bc945e551c9e0c0c80fabe2c8da7ac2f001ce6edb54ab378b7fb13487->leave($__internal_ed668f6bc945e551c9e0c0c80fabe2c8da7ac2f001ce6edb54ab378b7fb13487_prof);

        
        $__internal_f8e33743fbd5baa2a4dc13136f17f56a04147714c9d04ab9dbc7a86800392384->leave($__internal_f8e33743fbd5baa2a4dc13136f17f56a04147714c9d04ab9dbc7a86800392384_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c187df769ac5dd95e93a6b16fdadee791a3a3caa04ca119b291abfb29cb13f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c187df769ac5dd95e93a6b16fdadee791a3a3caa04ca119b291abfb29cb13f58->enter($__internal_c187df769ac5dd95e93a6b16fdadee791a3a3caa04ca119b291abfb29cb13f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_769b0a601c673bde96ecd882a2119d48b8dc83ef13996a2da8970294870cbd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769b0a601c673bde96ecd882a2119d48b8dc83ef13996a2da8970294870cbd13->enter($__internal_769b0a601c673bde96ecd882a2119d48b8dc83ef13996a2da8970294870cbd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_769b0a601c673bde96ecd882a2119d48b8dc83ef13996a2da8970294870cbd13->leave($__internal_769b0a601c673bde96ecd882a2119d48b8dc83ef13996a2da8970294870cbd13_prof);

        
        $__internal_c187df769ac5dd95e93a6b16fdadee791a3a3caa04ca119b291abfb29cb13f58->leave($__internal_c187df769ac5dd95e93a6b16fdadee791a3a3caa04ca119b291abfb29cb13f58_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_042740cbfd31e0c45c47a5efe82a867980b2521010fbf454aff26f7f6b146fb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042740cbfd31e0c45c47a5efe82a867980b2521010fbf454aff26f7f6b146fb3->enter($__internal_042740cbfd31e0c45c47a5efe82a867980b2521010fbf454aff26f7f6b146fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bfed9d84d5fc9caacd4918292cae963ff1f8de1b70d464fe45022d0b77cf62f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfed9d84d5fc9caacd4918292cae963ff1f8de1b70d464fe45022d0b77cf62f1->enter($__internal_bfed9d84d5fc9caacd4918292cae963ff1f8de1b70d464fe45022d0b77cf62f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bfed9d84d5fc9caacd4918292cae963ff1f8de1b70d464fe45022d0b77cf62f1->leave($__internal_bfed9d84d5fc9caacd4918292cae963ff1f8de1b70d464fe45022d0b77cf62f1_prof);

        
        $__internal_042740cbfd31e0c45c47a5efe82a867980b2521010fbf454aff26f7f6b146fb3->leave($__internal_042740cbfd31e0c45c47a5efe82a867980b2521010fbf454aff26f7f6b146fb3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e414cb4c78e4c982853c9d3914f2264bd943ab0a2d86835531c18ec2fe8bc91d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e414cb4c78e4c982853c9d3914f2264bd943ab0a2d86835531c18ec2fe8bc91d->enter($__internal_e414cb4c78e4c982853c9d3914f2264bd943ab0a2d86835531c18ec2fe8bc91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_20364fe3614001fb94aca519fab5ec9a2d222544896fb7194efa3b379ba1602c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20364fe3614001fb94aca519fab5ec9a2d222544896fb7194efa3b379ba1602c->enter($__internal_20364fe3614001fb94aca519fab5ec9a2d222544896fb7194efa3b379ba1602c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_20364fe3614001fb94aca519fab5ec9a2d222544896fb7194efa3b379ba1602c->leave($__internal_20364fe3614001fb94aca519fab5ec9a2d222544896fb7194efa3b379ba1602c_prof);

        
        $__internal_e414cb4c78e4c982853c9d3914f2264bd943ab0a2d86835531c18ec2fe8bc91d->leave($__internal_e414cb4c78e4c982853c9d3914f2264bd943ab0a2d86835531c18ec2fe8bc91d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/app/Resources/views/base.html.twig");
    }
}
