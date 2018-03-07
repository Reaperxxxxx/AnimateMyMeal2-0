<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class MealForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'rules' => 'required|min:5'
            ])
            ->add('description', 'text', [
                'rules' => 'max:5000'
            ])
            ->add('publish', 'checkbox');
    }
}
