<?php
    /**
     * Created by PhpStorm.
     * User: mike
     * Date: 30.07.19
     * Time: 13:49
     */

    namespace App\Form;

    use App\Entity\User;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\OptionsResolver\OptionsResolver;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\FormBuilderInterface;

    class RegistrationForm1 extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
          $builder
                ->add('firstName', TextType::class)
                ->add('lastName', TextType::class)
                ->add('telNumber')
                ->add('Next', SubmitType::class);
    }
        public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults([
                'data_class' => User::class,
            ]);
        }
    }