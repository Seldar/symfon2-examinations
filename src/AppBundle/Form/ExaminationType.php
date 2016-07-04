<?php
/**
 * Created by PhpStorm.
 * User: seldar
 * Date: 2.7.2016
 * Time: 23:55
 */

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Form;

use AppBundle\Entity\Post;
use AppBundle\Form\Type\DateTimePickerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Defines the form used to create and manipulate blog posts.
 *
 */
class ExaminationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // For the full reference of options defined by each form field type
        // see http://symfony.com/doc/current/reference/forms/types.html

        // By default, form fields include the 'required' attribute, which enables
        // the client-side form validation. This means that you can't test the
        // server-side validation errors from the browser. To temporarily disable
        // this validation, set the 'required' attribute to 'false':
        //
        //     $builder->add('title', null, ['required' => false, ...]);

        $builder
            ->add('symptoms', TextareaType::class, [
                'label' => 'label.symptoms',
            ])
            ->add('treatment', TextareaType::class, [
                'label' => 'label.treatment',
            ])
            ->add('examinationDate', DateTimePickerType::class, [
                'label' => 'label.examinationDate',
            ])
            ->add('doctor', EntityType::class, [
                'class' => 'AppBundle:Doctor',
                'label' => 'label.doctor',
            ])
            ->add('patient', EntityType::class, [
                'class' => 'AppBundle:Patient',
                'label' => 'label.patient',
            ])
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Examination::class,
        ]);
    }
}
