<?php
    include './phpmail/PHPMailerAutoload.php';

    $mail = new PHPMailer();
 
$mail->IsSMTP(); // telling the class to use SMTP
//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "projetomusicme@gmail.com";  // GMAIL username
$mail->Password   = "musicme2015";            // GMAIL password

$mail->SetFrom('projetomusicme@gmail.com', 'Capsula do tempo');
$mail->AddReplyTo("projetomusicme@gmail.com","Capsula do tempo");
$mail->Subject    = "Uma pessoa se cadastrou na lp capsula do tempo";

$mail->AltBody    = "Segue os cadastros!"; // optional, comment out and test

 

$mail->MsgHTML("<div>Nome: " . $_POST['name'] ." <br> E-mail ". $_POST['email'] ." <br> " . $_POST['path'] .  "  </div>");

$address = "projetomusicme@gmail.com";

$mail->AddAddress($address, "Capsula do tempo");

if(!$mail->Send()) {
    echo "Mailer Error: ";
} else {
    echo "Message sent!";
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    header{
    }

        @media (min-width: 991px){
            h1#homeHeading{
                font-size: 40px;
                color: white;
            }            

            #main-form{
                margin-top: 0px;
            }

            .form-control{
                background-color: rgba(255,255,255, 0.85);
                font-family: arial;
            }

            .form-label{
                font-family: arial;
                font-weight: 500;
            }

            .form-radio-label{
                display: block;

            }

            *{
                color: rgba(255,255,255,0.9);
            }

            #main-footer{
                position: absolute;
                width: 100%;
                height: 65px;
                line-height: 65px;
                background-color: rgba(0,0,0,.8);
                bottom: 0;
                padding-left: 15px;
                font-family: arial;
                left: 0;
            }

            body{
                background-image: url(img/header.jpg);
                background-size: cover;
                background-position: center;
            }

            header{
                background-image: none;
            }
        }
    </style>

</head>

<body id="page-top">

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="row">
                    <div class="col-md-7">
                        <h1 id="homeHeading">Envie a sua mensagem no tempo!</h1>
                        <hr>
                        <p>E se você pudesse deixar uma mensagem em uma capsula do tempo para ser entrege aos seus familiares depois da sua morte?  </p>
                    </div>
                    <div class="col-md-5">
                        <form id="main-form">
                            <div class="form-group">
                                <input class="form-control" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail">
                            </div>
                            <div class="form-group text-left">
                                <label class="form-radio-label">
                                    <input name="value" type="radio" placeholder="E-mail">
                                    <span class="form-label">R$40,00 - <small>Envio de áudio e text</small></span>
                                </label>
                                <label class="form-radio-label">
                                    <input name="value" type="radio" placeholder="E-mail">
                                    <span class="form-label">R$45,00 - <small>Envio de vídeo (até 5 min)</small></span>
                                </label>
                            </div>
                            <div class="text-left">
                                <button style="border-radius: 5px" class="btn-success btn btn-xl">Gerar boleto</button>
                            </div>
                            <div class="text-left" style="margin-top: 15px">
                                * As instruções de envio e uso serão enviadas juntamente com o boleto bancário  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer id="main-footer">
        Endereço: Rua Nelson Catalan 543, Bairro Efap, Chápeco - SC
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>