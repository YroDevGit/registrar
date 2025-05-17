<?php
// Start code here...



function form_input(string $label, string $name, string $placeholder = ""){
    ?>
    <div class="row-y">
        <label for=""><?=$label?>: <small id="<?=$name?>" class="text-danger"></small></label>
        <input type="text" id="<?=$name?>" name="<?=$name?>" class="form-control" placeholder="<?=$placeholder == "" ? 'Enter '.$name : 'Enter '.$placeholder?>">
    </div>
    <?php
}

function form_input_edit(string $label, string $name, string $placeholder = ""){
    ?>
    <div class="row-y">
        <label for=""><?=$label?>: <small id="<?=$name?>" class="text-danger"></small></label>
        <input type="text" id="<?=$name?>1" name="<?=$name?>" class="form-control" placeholder="<?=$placeholder == "" ? 'Enter '.$name : 'Enter '.$placeholder?>">
    </div>
    <?php
}


if(! function_exists("code_library")){
    function code_library(){
        ?>
        <link rel="stylesheet" href="<?=assets('code/datatable.css')?>" />
        <script src="<?=assets('code/swal.js')?>"></script>
        <script src="<?=assets('code/jquery.js')?>"></script>
        <script src="<?=assets('code/datatable.js')?>"></script>
        <script src="<?=assets('code/jspost.js')?>"></script>
        <?php
    }
}



?>