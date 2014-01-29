<?php
return array(
    'name'    => 'Kiwi &#187; Sidebar',
    'version' => 'WIP', //@todo: to be defined
    'provider' => array(
        'name' => 'Unknown', //@todo: to be defined
    ),
    'namespace' => "Kiwi\Sidebar",
    'permission' => array(
    ),
    'icons' => array( //@todo: to be defined
        64 => 'static/apps/kiwi_sidebar/img/64/icon.png',
        32 => 'static/apps/kiwi_sidebar/img/32/icon.png',
        16 => 'static/apps/kiwi_sidebar/img/16/icon.png',
    ),
    'launchers' => array(
        'Kiwi\Sidebar::Sidebar' => array(
            'name'    => 'Sidebars', // displayed name of the launcher
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/kiwi_sidebar/sidebar/appdesk', // url to load
                ),
            ),
        ),
    ),
    /* Launcher configuration sample
    'launchers' => array(
        'key' => array( // key must be defined
            'name'    => 'name of the launcher', // displayed name of the launcher
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'url to load', // URL to load
                ),
            ),
        ),
    ),
    */
    // Enhancer configuration sample
    'enhancers' => array(
        'kiwi_sidebar_sidebar' => array( // key must be defined
            'title' => 'Kiwi Sidebar Sidebar',
            'desc'  => '',
            'enhancer' => 'kiwi_sidebar/front/display', // URL of the enhancer
            'previewUrl' => 'admin/kiwi_sidebar/enhancer/preview', // URL of preview
            'dialog' => array(
                'contentUrl' => 'admin/kiwi_sidebar/enhancer/popup',
                'width' => 450,
                'height' => 400,
                'ajax' => true,
            ),
        ),
    ),
    /* Data catcher configuration sample
    'data_catchers' => array(
        'key' => array( // key must be defined
            'title' => 'title',
            'description'  => '',
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/kiwi_sidebar/post/insert_update/?context={{context}}&title={{urlencode:'.\Nos\DataCatcher::TYPE_TITLE.'}}&summary={{urlencode:'.\Nos\DataCatcher::TYPE_TEXT.'}}&thumbnail={{urlencode:'.\Nos\DataCatcher::TYPE_IMAGE.'}}',
                    'label' => 'label of the data catcher',
                ),
            ),
            'onDemand' => true,
            'specified_models' => false,
            // data examples
            'required_data' => array(
                \Nos\DataCatcher::TYPE_TITLE,
            ),
            'optional_data' => array(
                \Nos\DataCatcher::TYPE_TEXT,
                \Nos\DataCatcher::TYPE_IMAGE,
            ),
        ),
    ),
    */
);
