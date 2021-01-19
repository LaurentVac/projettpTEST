<?php

    include('utils/regexp.php');
    $errorsArray = array();
    $usersArray =[];
    // Contrôle du formulaire d'inscription
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // EMAIL
         // On verifie l'existance et on nettoie
         $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));
     
         //On test si le champ n'est pas vide
         if(!empty($loginMail)){
             // On test la valeur
             $testMail = filter_var($loginMail, FILTER_VALIDATE_EMAIL);
     
             if($testMail == false){
                 $errorsArray['mail_error'] = 'Le mail n\'est pas valide';
             }
         }else{
             $errorsArray['mail_error'] = 'Le champ n\'est pas rempli';
         }

         /*********************************************************** */
         /*Mot de passe*/
         $loginPassword =  trim(filter_input(INPUT_POST, 'loginPassword', FILTER_SANITIZE_STRING));
        if(!empty($loginPassword)){ 
            $testRegexPassword = preg_match( '/^(?=.{10,}$)(?=(?:.*?[A-Z]){2})(?=.*?[a-z])(?=(?:.*?[0-9]){2}).*$/',$loginPassword);
            if($testRegexPassword == false){

                $errorsArray['password_error'] = 'Le mot de passe doit contenir au minimum 10 caractères dont au moins 2 majuscules, 1minuscule et 2 chiffres. Les caractères spéciaux ne sont pas autorisés';

            }
        }else{
            $errorsArray['password_error'] = 'Le champ n\'est pas rempli';
        }