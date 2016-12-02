<?php
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


?>

            <div class="container" id="contact-page">
                <?php if(!empty($errors)) : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php foreach($errors as $error) : ?>
                                    <p><strong>Attention ! </strong><?= $error; ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="container" id="contact-page">
            <!-- CONTENT -->
            <div class="row">
                <div class="col-md-4 col-xs-12">
                      <!-- MAPS -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.1742100724227!2d4.887650015629318!3d45.76769882116144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c036c89784f3%3A0xb6b1722dc00a5225!2sFlachet!5e0!3m2!1sfr!2sfr!4v1479308280112" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-8 col-xs-12" id="form-contact">
                    <h2 class="text-center">Formulaire de contact</h2>
                    <form action="" method="post">
                        <label for="name">Votre nom :</label>
                        <input type="text" class="form-control" name="name" id="name">
                        <label for="email">Votre Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <label for="message">Votre message :</label>
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea><br>
                        <input type="submit" class="btn btn-primary text-center" name="submit" id="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>