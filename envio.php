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
    <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet”>

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
        html, body{
            min-height: 100%;
            height: 100%;
        }
    header{
    }

        h1#homeHeading{
            font-size: 40px;
            margin-top: 20px;
            color: #fff;
            width: 95%;
            text-align: left;
        }            

        #main-form{
            margin-top: 0px;
            padding: 25px;
            border-radius: 15px;
            background-color: rgba(255,255,255,.8);
        }

        .description{
            font-family: 'Oswald', sans-serif;
            text-align: left;
            font-weight: 700!important;
            color: white !important;
            max-width: 90% !important;
            margin-left: 0 !important; 
        }
        
        #main-form *{
            color: #1e3c70;
        }

        #main-form button{
            color: white;
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

        .header .header-content .header-content-inner p{
            max-width: 0;
            margin-left: 0;
        }            

        *{
            color: white;
        }

        #main-footer{
            position: absolute;
            width: 100%;
            height: 65px;
            line-height: 65px;
            background-color: rgba(108, 24, 113, 0.58) !important;
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

        @media (max-width: 860px){

        }

        @media (max-width: 992px){
            #main-footer{
                position: relative;
                background-color: rgba(108, 24, 113, 1) !important;
            } 

            h1#homeHeading{
                color: rgba(108, 24, 113, 1) !important;
                max-width: 100%;
                text-align: center;
            }

            header .header-content .header-content-inner p{
                max-width: 100% !important;
            }

            .description{
                font-size: 20px !important;
            }
        }

        @media (max-width: 768px) {
            header .header-content{
                padding-bottom: 0px !important;
            }

            #main-form{
                margin-bottom: 6px;
            }
        }

        @media (max-width: 710px){
            html, body{
                height: auto;
            }
        }

        @media (max-width: 440px){
            #main-footer{
                line-height: 1;
                padding-top: 15px;
                padding-right: 15px;
            }
        }

    </style>

</head>

<body id="page-top">

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 id="homeHeading">Obrigado! Em breve você receberá o boleto na sua conta de e-mail. :)</h1>
                        <hr>
                    </div>
            </div>
        </div>
    </header>

    <footer id="main-footer">
        Endereço: Rua Nelson Catalan 543, Bairro Efapi, Chápeco - SC
    </footer>

    </script>

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
