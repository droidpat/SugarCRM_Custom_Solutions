<?php

    $manifest = array(
        'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
        'acceptable_sugar_versions' => array(
            'exact_matches' => array(),
            'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
        ),
        'author' => 'Patrick McQueen',
        'description' => 'Turns off Assignment Notifications for QLIs.',
        'icon' => '',
        'is_uninstallable' => true,
        'name' => 'Assignment Notifications for QLI: Off',
        'published_date' => '2018-2-12',
        'type' => 'module',
        'version' => '1.0',
    );

    $installdefs = array(
        'copy' => array(
            0 => array(
                'from' => '<basepath>/Files/noProductNotificationBeanExt.php',
                'to' => 'custom/Extension/application/Ext/Include/customProductBean.php',
            ),
            1 => array(
                'from' => '<basepath>/Files/noProductNotification.php',
                'to' => 'custom/modules/Products/Product.php',
            ),
        ),
    );