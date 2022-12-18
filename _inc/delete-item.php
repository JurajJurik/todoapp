<?php

    //include
    require 'config.php';
    // delete
    $affected = $database->delete('items',
        ['id' => $_POST['id']]
    );

    //success

    if ($affected) {
       gtb ($base_url);

    }