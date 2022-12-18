<?php 

// global functions

function show_404()
{
    header("HTTP/1.0 404 Not Found");
        include_once "404.php";
        die();
}

function get_item ()
{
    if (! isset($_GET['id']) || empty($_GET['id'])) {
        return false;
    }

    global $database;
    $item = $database->get("items","text", [
        "id" => $_GET['id']
    ]);

    if (! $item )
    {
        return false;
    }
    return $item;
    
}

function is_ajax()
{
    return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && 
        strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest');
    }

// Function definition
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

function gtb ($url)
{
    header("Location: $url/index.php");
    die('success');
}

function is_even($number)
{
    $class = $number % 2 == 0;
    return $class;
}

function get_parity($number)
{
   return is_even($number) ? 'even' : 'odd';
}

function money( $sum )
{
    return number_format( $sum, 2, ',', '&nbsp;');
}


function discount ( $selling_price, $discount_percent, $format = FALSE)
{
    $actual_price = $selling_price - $selling_price * ($discount_percent / 100);

    if ($format) {
        $actual_price = money ( $actual_price);
    }
}

function redirect( $page, $status_code = 302 )
{
    global $base_url;

    
    if ($page == 'back') {
        $location = $_SERVER['HTTP_REFERER'];
    } else {
        $page = ltrim($page , '/');
        $location = "$base_url/$page";
    }

    header("Location: $location", true, $status_code);
    die('success');
}