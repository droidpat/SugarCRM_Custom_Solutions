<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class reassignTaskClass
{
    function reassignTaskMethod ($bean, $event, $arguments)
    {
        $link = "leads";
        if ($bean->load_relationship($link)) {
            //retrieve all related Leads
            $Leads = $bean->$link->getBeans(); 
            $parentBean = false;
            if (!empty($Leads)) {
                //order the results
                reset($Leads);
                //first record in the list is the parent
                $parentBean = current($Leads);
            }
            //confirm whether change will have any effect to stop infinite looping
            if ($bean->assigned_user_id != $parentBean->assigned_user_id) {
                //change the Task's owner to that of Lead
                $bean->assigned_user_id = $parentBean->assigned_user_id;
                $bean->save();
            }
        }
    }
}

?>