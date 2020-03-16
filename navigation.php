<?php

return [
    'Tablets' => 'docs/tablets',
    'Conferencing' => 'docs/conferencing',
    'Torah Learning' => 'docs/torah',
    'General Studies' => 'docs/general',
    'Kosher Entertainment' => 'docs/kosher-entertainment',
    'Other' => 'docs/other',
    'Food' => [
//        'url' => 'docs/tablets',
        'children' => [
            'Groceries' => 'docs/groceries',
            'Restaurants / Cafes' => 'docs/restaurants',
        ],
    ],
];
