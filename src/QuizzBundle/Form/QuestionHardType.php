<?php

namespace QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class QuestionHardType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
            ->add('answer1')
            ->add('answer2')
            ->add('answer3')
            ->add('answer4')
            ->add('goodanswer')
            ->add('category', EntityType::class, [
                'class'=>'QuizzBundle:Category',
                'choice_label'=>'name',
                'expanded'=>true,
                'multiple'=>false
            ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'QuizzBundle\Entity\QuestionHard'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'quizzbundle_questionhard';
    }


}
