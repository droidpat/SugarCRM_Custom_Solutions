<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class reassignQLIsClass
{
    function reassignQLIsMethod ($bean, $event, $arguments)
    {
        $link = "products";
        if ($bean->load_relationship($link)) {
            //retrieve all related QLIs
            $QLIs = $bean->$link->getBeans(); 
            $parentBean = false;
            if (!empty($QLIs)) {
                //iterate through each related QLI
                foreach ($QLIs as $QLI) { 
                    //confirm whether change will have any effect to stop infinite looping
                    if ($QLI->assigned_user_id != $bean->assigned_user_id) {
                        //change the QLI's owner
                        $QLI->assigned_user_id = $bean->assigned_user_id;
                        //trigger save of the QLI record
                        $QLI->save();
                    }
                }
            }
        }
    }
}

?>