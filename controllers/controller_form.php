<?php
    include('utils/regexp.php');
    $errorsArray = array();
    $usersArray =[];
    // Contrôle du formulaire d'inscription
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // NAME
            // On verifie l'existance et on nettoie
            $name = trim(filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING));
            //On test si le champ n'est pas vide
            if(!empty($name)){
                // On test la valeur
                $testRegex = preg_match(REGEXP_STR_NO_NUMBER,$name);
                
                if($testRegex == false){
                    $errorsArray['name_error'] = 'Le nom n\'est pas valide';
                }
            }else{
                $errorsArray['name_error'] = 'Le champ n\'est pas rempli';
            }
            //******************************************************************** */
            // FIRSTNAME
            // On verifie l'existance et on nettoie
            $firstName = trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING));
            //On test si le champ n'est pas vide
            if(!empty($firstName)){
                // On test la valeur
                $testRegex = preg_match(REGEXP_STR_NO_NUMBER,$firstName);

                if($testRegex == false){
                    $errorsArray['firstname_error'] = 'Le prénom n\'est pas valide';
                }
            }else{
                $errorsArray['firstname_error'] = 'Le champ n\'est pas rempli';
            }
            // ***************************************************************
            //pseudo
            // On verifie l'existance et on nettoie
            $pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES));        
            //On test si le champ n'est pas vide
            if(!empty($pseudo)){
                // On test la valeur
                $testRegex = preg_match('/^([a-zA-Z0-9-_]{2,36})$/',$pseudo);
        
                if($testRegex == false){
                    $errorsArray['pseudo_error'] = 'Le pseudo n\'est pas valide';
                }
            }else{
                $errorsArray['pseudo_error'] = 'Le champ n\'est pas rempli';
            }
         // ***********************************************************
         // EMAIL
         // On verifie l'existance et on nettoie
         $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));
     
         //On test si le champ n'est pas vide
         if(!empty($mail)){
             // On test la valeur
             $testMail = filter_var($mail, FILTER_VALIDATE_EMAIL);
     
             if($testMail == false){
                 $errorsArray['mail_error'] = 'Le mail n\'est pas valide';
             }
         }else{
             $errorsArray['mail_error'] = 'Le champ n\'est pas rempli';
         }
        // **************************************************************
        // confirmation d'email
        $confirmMail = trim(filter_input(INPUT_POST, 'confirmMail', FILTER_SANITIZE_EMAIL));

        if(!empty($confirmMail)){

            $testConfirmMail = filter_var($confirmMail, FILTER_VALIDATE_EMAIL);

            if($confirmMail != $testMail){
                $errorsArray['confirm_mail_error'] = 'Les champs mail doivent être identique';
            }
        }else{
            $errorsArray['confirm_mail_error'] = 'Le champ n\'est pas rempli';
        }

        //**********************************************
        //Mot de passe
        $password =  trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
        if(!empty($password)){ 
            $testRegexPassword = preg_match( '/^(?=.{10,}$)(?=(?:.*?[A-Z]){2})(?=.*?[a-z])(?=(?:.*?[0-9]){2}).*$/',$password);
            if($testRegexPassword == false){

                $errorsArray['password_error'] = 'Le mot de passe doit contenir au minimum 10 caractères dont au moins 2 majuscules, 1minuscule et 2 chiffres. Les caractères spéciaux ne sont pas autorisés';

            }
        }else{
            $errorsArray['password_error'] = 'Le champ n\'est pas rempli';
        }
        //Confirmation de mot de passe
        $confirmPassword = trim(filter_input(INPUT_POST, 'confirmPassword', FILTER_SANITIZE_STRING));
        if(!empty($confirmPassword)){
            $testRegexPassword = preg_match( '/^(?=.{10,}$)(?=(?:.*?[A-Z]){2})(?=.*?[a-z])(?=(?:.*?[0-9]){2}).*$/',$confirmPassword);
            if($testRegexPassword == false){
                $errorsArray['confirm_password_error'] = 'Le mot de passe doit contenir au moins 10 caractères dont 2 majuscules, 1minuscule et 2 chiffres. Les caractères spéciaux ne sont pas autorisés';
            }

            if($confirmPassword != $password){
                $errorsArray['confirm_password_error'] = 'Les champs mot de passe doivent être identiques';
            }
        }else{
            $errorsArray['confirm_password_error'] = 'Le champ n\'est pas rempli';
        }
    }
     //var_dump($usersArray);
    //  include(dirname(__FILE__).'fichier atrouver');

     
     ?>
