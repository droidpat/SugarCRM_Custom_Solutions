<?php

    $manifest = array(
        'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
        'acceptable_sugar_versions' => array(
            'exact_matches' => array(),
            'regex_matches' => array('(.*?)\\.(.*?)\\.(.*?)$'),
        ),
        'author' => 'Patrick McQueen',
        'description' => 'Tasks related to Leads are automatically assigned to Lead owner upon creation',
        'icon' => '',
        'is_uninstallable' => true,
        'name' => 'Tasks Assigned to Lead Owner',
        'published_date' => '2018-2-9',
        'type' => 'module',
        'version' => '1.0',
    );

    $installdefs = array(
        'copy' => array(
            0 => array(
                'from' => '<basepath>/Files/reassignTaskHook.php',
                'to' => 'custom/Extension/modules/Tasks/Ext/LogicHooks/reassignTaskHook.php',
            ),
            1 => array(
                'from' => '<basepath>/Files/reassignTask.php',
                'to' => 'custom/modules/Tasks/reassignTask.php',
            ),
        ),
    );