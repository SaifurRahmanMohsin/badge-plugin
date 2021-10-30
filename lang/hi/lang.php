<?php

return [
    'plugin' => [
        'name' => 'बैज',
        'description' => 'बैज शील्ड बनाएं।'
    ],
    'badge' => [
        'plural' => 'बैज',
        'singular' => 'बैज',
        'subject' => [
            'label' => 'विषय',
            'comment' => 'वह विषय जो बैज के बाएँ भाग में दिखाई देता है।'
        ],
        'badge_preview' => [
            'label' => 'बैज पूर्वावलोकन',
            'comment' => 'रेंडर किए गए बैज का पूर्वावलोकन।'
        ],
        'status' => [
            'label' => 'स्थिति',
            'comment' => 'वह स्थिति जो बैज के दाहिने हिस्से में दिखाई देती है।'
        ],
        'color' => [
            'label' => 'पृष्ठभूमि',
            'comment' => 'पृष्ठभूमि का रंग जो बैज के दाहिने हिस्से का दिखाई देता है।'
        ],
        'style' => [
            'label' => 'प्रारूप',
            'comment' => 'बैज का प्रकटन स्वरूप.'
        ],
        'hits' => [
            'label' => 'हिट्स'
        ]
    ],
    'controller' => [
        'new_badge' => 'नया बैज',
        'invalid_badge' => 'अमान्य बैज',
        'return_to_list' => 'बैज सूची पर लौटें',
        'delete_confirm' => 'यह बैज हटाएं?',
        'form' => [
            'create_badge' => 'बैज बनाएं',
            'edit_badge' => 'बैज संपादित करें'
        ],
        'list' => [
            'manage_badges' => 'बैज प्रबंधित करें',
        ]
    ],
    'component' => [
        'description' => 'पेज पर बैज जोड़ें'
    ]
];
