<?php
    require_once '_inc/config.php';


    $item = get_item();
    if (! $item) {show_404();}

    include_once "_partials/header.php" ?>

    <div class="page-header">
        <h1>VERY MUCH EDIT</h1>
    </div>

    <?php include_once "_partials/form.php"; 
        form_case('edit');
    ?>

<?php include_once "_partials/footer.php" ?>
