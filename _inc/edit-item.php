<?php

    //include
    require 'config.php';

    // update
    $affected = $database->update('items',
        ['text' => $_POST['message']],
        ['id' => $_POST['id']]
    );

    //success

    if ($affected) {
        gtb ($base_url);
    }