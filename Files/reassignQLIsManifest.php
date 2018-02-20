<?php

    $manifest = array(
        'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
        'acceptable_sugar_versions' => array(
            'exact_matches' => array(),
            'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
        ),
        'author' => 'Patrick McQueen',
        'description' => 'All QLIs are automatically assigned to Quote owner',
        'icon' => '',
        'is_uninstallable' => true,
        'name' => 'QLIs Auto-Assigned to Quote Owner',
        'published_date' => '2018-2-9',
        'type' => 'module',
        'version' => '1.0',
    );

    $installdefs = array(
        'copy' => array(
            0 => array(
                'from' => '<basepath>/Files/reassignQLIsHook.php',
                'to' => 'custom/Extension/modules/Quotes/Ext/LogicHooks/reassignQLIsHook.php',
            ),
            1 => array(
                'from' => '<basepath>/Files/reassignQLIs.php',
                'to' => 'custom/modules/Quotes/reassignQLIs.php',
            ),
        ),
    );