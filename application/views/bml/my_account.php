<?php

include("button_template.php");

function iterate_button_list($arguments) {
    $button_names = array('Check Balance', 'View Statement','Change Pin');

    $destination_urls = array('capturebalance', 'viewstatement|selectstatement','changepin');
    $generated_list = '';

    foreach ($button_names as $button_name) {
        $arguments['destination_url'] = $destination_urls[array_search($button_name, $button_names)];
        $generated_list .= display_button($button_name, $arguments);
    }
    return $generated_list;
}

?>