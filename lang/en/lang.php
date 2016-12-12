<?php

return [
    'plugin' => [
        'name' => 'Badges',
        'description' => 'Create badge shields.'
    ],
    'badge' => [
        'plural' => 'Badges',
        'singular' => 'Badge',
        'subject' => [
            'label' => 'Subject',
            'comment' => 'The subject which appears of left part of badge.'
        ],
        'badge_preview' => [
            'label' => 'Badge Preview',
            'comment' => 'A preview of the rendered badge.'
        ],
        'status' => [
            'label' => 'Status',
            'comment' => 'The status which appears of right part of badge.'
        ],
        'color' => [
            'label' => 'Background',
            'comment' => 'The background color which appears of right part of badge.'
        ],
        'style' => [
            'label' => 'Format',
            'comment' => 'The appearance format of the badge.'
        ],
        'hits' => [
            'label' => 'Hits'
        ]
    ],
    'controller' => [
        'new_badge' => 'New Badge',
        'invalid_badge' => 'Invalid Badge',
        'return_to_list' => 'Return to badges list',
        'delete_confirm' => 'Delete this badge?',
        'form' => [
            'create_badge' => 'Create Badge',
            'edit_badge' => 'Edit Badge'
        ],
        'list' => [
            'manage_badges' => 'Manage Badges',
        ]
    ],
    'component' => [
        'description' => 'Add a badge to the page'
    ]
];
