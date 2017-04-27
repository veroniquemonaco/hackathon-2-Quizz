<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_cfc281957affe760700d03ddb0be7e8d39c7872eaac2adebd74b98c052471095 extends Twig_Template
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
        $__internal_1efc8f958b0e22c79667d718d6c0a204c300f512376c33ab255609d4f023de2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1efc8f958b0e22c79667d718d6c0a204c300f512376c33ab255609d4f023de2c->enter($__internal_1efc8f958b0e22c79667d718d6c0a204c300f512376c33ab255609d4f023de2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_672d50542ea06adca11cb58ac670addcef311ca93edd9d69885737a65b7112e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_672d50542ea06adca11cb58ac670addcef311ca93edd9d69885737a65b7112e3->enter($__internal_672d50542ea06adca11cb58ac670addcef311ca93edd9d69885737a65b7112e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1efc8f958b0e22c79667d718d6c0a204c300f512376c33ab255609d4f023de2c->leave($__internal_1efc8f958b0e22c79667d718d6c0a204c300f512376c33ab255609d4f023de2c_prof);

        
        $__internal_672d50542ea06adca11cb58ac670addcef311ca93edd9d69885737a65b7112e3->leave($__internal_672d50542ea06adca11cb58ac670addcef311ca93edd9d69885737a65b7112e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/fanny/Documents/HACKATHON/Questions pour un hackathon/hackathon-2-Quizz/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
