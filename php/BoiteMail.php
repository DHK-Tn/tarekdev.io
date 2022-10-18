<?php
@session_start();
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['subject'] = $_POST['subj'] ;
$_SESSION['Message'] = $_POST['msg'];
$_SESSION['email'] = $_POST['email'];
include('Email.php');
 
	$DHK_MESSAGE = $_SESSION['Message'];
    $DHK_SUBJECT = "NEW Portfolio Msg From : ".$_SESSION['nom']." For : ".$_SESSION['subject']." * ";
    $DHK_HEADERS = "From: <Portfolio MSG >";
    $DHK_HEADERS .= "Content-type: text/html; charset=UTF-8\n";
    if (mail($DHK_EMAIL, $DHK_SUBJECT, $DHK_MESSAGE, $DHK_HEADERS))
    {
        echo "
        <style>
         @import url('https://fonts.googleapis.com/css2?family=Bellota+Text:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap');
         *
         {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Bellota Text', cursive;
         }
         body
         {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            width: 100%;
            background:#22282a;
         }
         .valid-content{
            display: flex;
            width: 30%;
            height: 230px;
            color: #fff;
            border-radius: 15px;
            background-color: #171a1c;
            text-align: center;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            box-shadow:  0px 0px 10px 5px #6eff3e;
         }
         .valid-content h2{
            margin-bottom: 50px;
         }
         .valid-content a{
            position:absolute;
            background:#444;
            color:#fff;
            text-decoration:none;
            text-transform:uppercase;
            font-size:1.5em;
            letter-spacing:0.1em;
            font-weight:400;
            padding:10px 30px;
            transition:0.5s;
            margin-top: 7%;
            }

            .valid-content a:hover
            {
            letter-spacing:0.25em;
            background: var(--clr);
            color: var(--clr);
            box-shadow:0 0 35px var(--clr);
            }
            .valid-content a::before
            {

            content:'';
            position:absolute;
            inset:2px;
            background:#27282c;
            }
            .valid-content a span
            {
               position:relative;
               z-index:1;
            }
            .valid-content a i
            {

               position:absolute;
               inset:0;
               display:block;
            }
            .valid-content a i::before
            {

            content:'';
            position:absolute;
            top:-6px;
            left:100%;
            transform:translateX(-50%);
            width:10px;
            height:10px;
            background:#27282c;
            border:2px solid var(--clr);
            transition: 0.5s;
            }
            .valid-content a:hover i::before{
               left: 0%;
               transform:translateX(-50%) rotate(45deg);
               box-shadow:40px 39px var(--clr);
            }
            .valid-content a i::after
            {
            content:'';
            position:absolute;
            bottom:-6px;
            left:0;
            transform:translateX(-50%);
            width:10px;
            height:10px;
            background:#27282c;
            border:2px solid var(--clr);
            transition:0.5s;
            }
            .valid-content a:hover i::after
            {
            left:100%;
            transform:translateX(-50%)rotate(-45deg);
            box-shadow:38px -39px var(--clr);
            }
            @media screen and (max-width:575px) {
               html{
                  font-size: 13px;
               }
               .valid-content{
                  width: 90%;
               }
               .valid-content a{
                  margin-top: 25%;
               }
            }
            @media screen and (min-width:576px) and (max-width:767px){
               html{
                  font-size: 13px;
               }
               .valid-content{
                  width: 70%;
               }
               .valid-content a{
                  margin-top: 15%;
               }
            }
            @media screen and (min-width:768px) and (max-width:991px){
               html{
                  font-size: 13px;
               }
               .valid-content{
                  width: 70%;
               }
               .valid-content a{
                  margin-top: 10%;
               }
            }
            @media screen and (min-width:992px) and (max-width:1100px){
               html{
                  font-size: 13px;
               }
               .valid-content{
                  width: 80%;
               }
               .valid-content a{
                  margin-top: 10%;
               }
            }
            </style><div class='valid-content valid-content'>
        <h2>Congrats your Message Was Send Succefully I will response you soon <3 </h2>
           <a href='../' style='--clr:#6eff3e'><span>Home</span><i></i></a></div>";
    }
    else
    {
        echo "<html></html><style>.verif{background-color: limegreen;color: red;padding-top: 10px;padding-bottom: 17px;text-align: center;font-size: x-large;margin-left: auto;margin-right: auto;font-family: 'Times New Roman', Times, serif;border-radius: 5px;}</style><h5 class='verif'>Votre message n'a pas pu être envoyé</h5></html>";
    }
    
?>