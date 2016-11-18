<?php
    if(isset($_POST['submit'])){

        extract($_POST);
        $errors = [];

        if(empty($name)){
            $errors[] = 'Votre nom doit être complété'; 
        }

        if(empty($email)){
            $errors[] = 'Votre email doit être complété';
        }

        if(empty($message)){
            $errors[] = 'Votre message doit être complété';
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

<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
                <link rel="icon" href="../favicon.ico">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-offset-1 col-md-1">
                        <a class="navbar-brand" href="../index.html"><i class="fa fa-home"></i></a>
                    </div>
                    <div class="col-md-offset-4 col-md-6">
                        <ul class="nav nav-tabs nav-border-colorcenter-block" id="myTab">
                            <li><a data-toggle="tab" href="about.html">About</a></li>
                            <li><a data-toggle="tab" href="formation.html">Formation</a></li>
                            <li><a data-toggle="tab" href="projects.html">Projects</a></li>
                            <li><a data-toggle="tab" href="skills.html">Skills</a></li>
                            <li class="active"><a data-toggle="tab" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>


            <div class="container" id="contact-page">
                <?php if(!empty($errors)) : ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <?php foreach($errors as $error) : ?>
                                    <p><?= $error; ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <div class="container" id="contact-page">
            <!-- CONTENT -->
            <div class="row">
                <div class="col-md-5">
                      <!-- MAPS -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.1742100724227!2d4.887650015629318!3d45.76769882116144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4c036c89784f3%3A0xb6b1722dc00a5225!2sFlachet!5e0!3m2!1sfr!2sfr!4v1479308280112" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-md-7" id="form-contact">
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


        <!-- SCRIPT -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-87468727-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
