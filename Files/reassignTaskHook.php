<?php
    $hook_array['after_save'][] = Array(
        1,
        'Tasks Assigned to Lead Owner',
        'custom/modules/Tasks/reassignTask.php',
        'reassignTaskClass',
        'reassignTaskMethod'
    );
?>