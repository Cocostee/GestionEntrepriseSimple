<?php

namespace App\Form;

use App\Entity\Users;
use PharIo\Manifest\Email;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'placeholder' => 'Enter your email',
                    'class' => 'form-control mb-2'
                ],
                'label' => 'Email : '
            ])
            ->add('lastname', TextType::class, [
                'attr' => [
                    'placeholder' => 'Enter your lastname',
                    'class' => 'form-control mb-2'
                ],
                'label' => 'Nom : '
            ])
            ->add('firstname', TextType::class, [
                'attr' => [
                    'placeholder' => 'Enter your firstname',
                    'class' => 'form-control mb-2'
                ],
                    'label' => 'Prenom : '
            ])
            ->add('adress', TextType::class, [
                'attr' => [
                    'placeholder' => 'Enter your adress',
                    'class' => 'form-control mb-2'
                ],
                'label' => 'Adresse : '
            ])
            ->add('city', TextType::class, [
                'attr' => [
                    'placeholder' => 'Enter your city',
                    'class' => 'form-control mb-2'
                ],
                'label' => 'Ville : '
            ])
            ->add('zipcode', TextType::class, [
                'attr' => [
                    'placeholder' => 'Enter your zipcode',
                    'class' => 'form-control mb-2'
                ],
                'label' => 'Code postal : '
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => ['autocomplete' => 'new-password', 'class' => 'form-control'],
                'label' => 'Password : ',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
