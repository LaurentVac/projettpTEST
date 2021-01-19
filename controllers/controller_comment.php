<?php
$arrayComment=[];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $comment = trim(filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING));

            if( !empty($comment)){
                
                array_push($arrayComment,$comment);
                // $_SESSION['arrayComment'] = $arrayComment;
                 
            }
    }
?>