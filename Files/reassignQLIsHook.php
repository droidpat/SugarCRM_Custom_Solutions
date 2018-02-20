<?php
    $hook_array['before_save'][] = Array(
        1,
        'QLIs Auto-Assigned to Quote Owner',
        'custom/modules/Quotes/reassignQLIs.php',
        'reassignQLIsClass',
        'reassignQLIsMethod'
    );
?>