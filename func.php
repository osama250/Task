<?php

    function showMessage($msg) {
        echo '<div class="container">';
            echo '<div class="alert alert-danger text-center" role="alert" style="margin-top:80px;">' .  $msg  . '</div>'; 
        echo '</div>';
    }
