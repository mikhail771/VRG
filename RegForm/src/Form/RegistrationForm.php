<?php

    namespace App\Form;

    use App\Entity\Client;
    use Symfony\Component\Form\Extension\Core\Type\IntegerType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TelType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;;

    class RegistrationForm extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('firstName', TextType::class)
                ->add('lastName', TextType::class)
                ->add('telNumber', TelType::class)
                ->add('city', TextType::class)
                ->add('street', TextType::class)
                ->add('homeNumber', IntegerType::class)
                ->add('comment', TextareaType::class)
                ->add('Finish', SubmitType::class)
          ;
        }

        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' => Client::class,
            ]);
        }
    }
