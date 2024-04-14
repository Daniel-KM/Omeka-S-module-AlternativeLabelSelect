<?php declare(strict_types=1);

namespace AlternativeLabelSelect;

return [
    'form_elements' => [
        'factories' => [
            Form\Element\OptionalPropertySelect::class => Service\Form\Element\OptionalPropertySelectFactory::class,
            Form\Element\PropertySelect::class => Service\Form\Element\PropertySelectFactory::class,
        ],
    ],
];
