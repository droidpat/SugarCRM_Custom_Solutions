<?php

    $manifest = array(
        'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
        'acceptable_sugar_versions' => array(
            'exact_matches' => array(),
            'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
        ),
        'author' => 'Patrick McQueen',
        'description' => 'Default User. All modules. Will creates, Chris is assigned',
        'icon' => '',
        'is_uninstallable' => true,
        'name' => 'Will Default Assigned User: Chris',
        'published_date' => '2018-2-8',
        'type' => 'module',
        'version' => '1.0',
    );

    $installdefs = array(
        'copy' => array(
            0 => array(
                'from' => '<basepath>/Files/defaultUserHook.php',
                'to' => 'custom/Extension/application/Ext/LogicHooks/defaultUserHook.php',
            ),
            1 => array(
                'from' => '<basepath>/Files/defaultUser.php',
                'to' => 'custom/defaultUser.php',
            ),
        ),
    );