<?php

return [
    /* ------------------------------------------------------------------------------------------------
     |  Title
     | ------------------------------------------------------------------------------------------------
     */
    'title' => [
        'default'   => 'Default title',
        'site-name' => '',
        'separator' => '-',
        'first'     => true,
        'max'       => 55,
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Description
     | ------------------------------------------------------------------------------------------------
     */
    'description' => [
        'default'   => 'Default description',
        'max'       => 155,
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Keywords
     | ------------------------------------------------------------------------------------------------
     */
    'keywords'  => [
        'default'   => [],
    ],

    /* ------------------------------------------------------------------------------------------------
     |  Miscellaneous
     | ------------------------------------------------------------------------------------------------
     */
    'misc'      => [
        'canonical' => true,
        'robots'    => ! app()->environment('production'),  // Tell robots not to index the content if it's not on production
        'default'   => [
            'viewport'  => 'width=device-width, initial-scale=1', // Responsive design thing
            'author'    => '', // https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]
            'publisher' => '', // https://plus.google.com/[YOUR PERSONAL G+ PROFILE HERE]
        ],
    ],
];
