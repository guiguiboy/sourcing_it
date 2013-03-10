<?php

namespace SourcingIt\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JobType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('created_at')
            ->add('company_id')
            ->add('status')
            ->add('source')
            ->add('contact_name')
            ->add('contact_email')
            ->add('contact_phone')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SourcingIt\SiteBundle\Entity\Job'
        ));
    }

    public function getName()
    {
        return 'sourcingit_sitebundle_jobtype';
    }
}
