<?php
        ob_start();
    ?>
    <main style="margin:40px;margin-left:250px">
        <?php require($_SESSION["nbquiz"].'.php');?>
    </main>
    <?php 

        $page = ob_get_clean();
        require './template/template.php';
       
     ?>