<?php

# controller/contact.php

    if(isset($_POST['submit'])){

        extract($_POST);
        $errors = [];

        if(empty($name)){
            $errors[] = 'Veuillez remplir votre nom s\'il vout plaît'; 
        }

        if(empty($email)){
            $errors[] = 'Veuillez remplir votre email s\'il vout plaît';
        }

        if(empty($message)){
            $errors[] = 'Veuillez remplir votre message s\'il vout plaît';
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors[] = 'Votre email doit être valide';
        }

        if(empty($errors)){
            $to = 'postmaster@trochain-dylan.fr';
            $subject = 'PORTFOLIO - '. $name .' from '.$email;

            mail($to, $subject, $message);

        }

    }

include('view/pages/contact.php');