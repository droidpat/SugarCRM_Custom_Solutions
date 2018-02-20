<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class defaultUserClass
{
    function defaultUserMethod ($bean, $event, $arguments)
    {
        //check if this is a new record
        if (empty($bean->fetched_row['id'])) {
            //check if specific user is creating the record
            if ($bean->created_by == 'seed_will_id') {
                //assign the record to the desired user
                $bean->assigned_user_id = 'seed_chris_id';
            }
        }
    }
}

?>