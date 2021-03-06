<?php

namespace Api\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
   * {@inheritdoc}
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
      $builder->add('firstname')
      ->add('lastname')
      ->add('email', EmailType::class)
      ->add('plainPassword');
  }

  /**
   * {@inheritdoc}
   */
  public function configureOptions(OptionsResolver $resolver)
  {
      $resolver->setDefaults(array(
      'data_class' => 'Api\UserBundle\Entity\User',
      'csrf_protection' => false,
    ));
  }

  /**
   * {@inheritdoc}
   */
  public function getBlockPrefix()
  {
      return 'api_userbundle_user';
  }
}
