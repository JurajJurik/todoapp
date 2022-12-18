<?php

    //include
    require 'config.php';

    // Enjoy
    $id = $database->insert('items', [
        'text' => $_POST['message']
    ]);

    //success

    if (!$id) die('error');
    

    if (is_ajax())
    {
        $message = json_encode([
            'status' => 'success',
            'id' => $database->id()
        ]);
        
        die($message);
    }
    else {
        gtb ($base_url);
    }