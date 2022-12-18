<?php include_once "_partials/header.php" ?>

    <div class="page-header">
        <h1>VERY MUCH TODO LIST</h1>

    </div>

    <?php $data = $database->select('items',['id','text']);?>

    <ul id="item-list" class="list-group col-sm-6">

        <?php
            if ($data) {
                
                foreach ($data as $i => $item) {

                    $row = $i;

                    echo '<li id="item-'. $item['id'].'" class="list-group-item '.get_parity($row).'">';
                    echo    $item['text'];
                    echo '    <div class="controls pull-right">';
                    echo '      <a href="edit.php?id='.$item['id'].'" class="edit-link">Edit</a>';
                    echo '      <a href="delete.php?id='.$item['id'].'" class="delete-link text-muted glyphicon glyphicon-remove"></a>';
                    echo '    </div>';
                    echo '</li>';
                }
            }
            else {
                    function_alert("Nothing to show! Please, add items using the form.");
            }

        ?>
    </ul>

    <?php include_once "_partials/form.php"; 
        form_case('add');
    ?>

<?php include_once "_partials/footer.php" ?>