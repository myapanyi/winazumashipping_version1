<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "az.osdev@gmail.com";
    $email_subject = "Inquiry for WinAzumaShipping";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }     
 
   
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
 
 
    $email_message = "Inquiry Detail Information ....\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Customer Name                : ".clean_string($name)."\n\n";
    $email_message .= "Customer Email               : ".clean_string($email_from)."\n\n";
    $email_message .= "Telephone No                 : ".clean_string($telephone)."\n\n";
    $email_message .= "Customer Inquiry             : ".clean_string($comments)."\n\n";
 
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!DOCTYPE html>
<!--
TEMPLATE
Name: Zoo Planet
Version: 1.0
Created: 23 January 2014

AUTHOR
Design and code by: http://www.bootshape.com
Free stock photos by: http://www.bootshape.com

Read full license: http://www.bootshape.com/license.php

CREDITS
Background: http://subtlepatterns.com/ (extra_clean_paper)
Fonts: http://www.google.com/fonts (Actor, Duru_Sans)

SUPPORT
E-mail: bootshape.com@gmail.com
Contact: http://www.bootshape.com/contact.php
-->
<html>
  <head>
    <title>Win Azuma Shipping Co.ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         
         <a class="navbar-brand" href="index.html"><img src="images/winazumashippinglogo.gif"></a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li><a href="index.html">Home</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="service.html" class="dropdown-toggle">Services <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="domesticservice.html">Domestic Transportation Services</a></li>
                <li><a href="exportimport.html">Export/Import-Related Services</a></li>
                <li><a href="international.html">International Multimodal Transportation Services</a></li>
                
              </ul>
            </li>
               <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Company <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="msgpresident.html">Message from the President</a></li>
                 <li><a href="objbusiness.html">Business Objectives</a></li>
                <li><a href="companyprofile.html">Company Profile</a></li>              
             
              </ul>
            </li>
             <li class="active"><a href="contact.html">Contacts</a></li>
           
           
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->

    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-12 col-md-12" style="margin-top: 100px;">
        <div class="bg">

        <div class="row">
          <div class="col-sm-8 contact_us" style="padding-top: 30px;height:448px">
            <div class="contact-form">
             
              <div class="status alert alert-success" style="display: none"></div>

              
        
          <div style="color:#598ad7;font-style:italic;font-family:serif;font-size:x-large;">
       
           <ul style="list-style-image:url(images/images.png);padding-left:150px;">
           <li> Email have send to WinAzumaShipping Co.ltd.<br><br>
            Thanks for your Inquiry.<br><br>
           We will be contact you soon.
           </li>
           </ul>
           
</div>
        </div>
      </div>
      </div>
    </div><!-- End Thumbnails -->
  </div>
</div>
  
    <!-- Footer -->
    <div class="footer text-center">
        <p>&copy; All Rights Reserved. Win Azuma Shipping Co.ltd.</p>
    </div><!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>

<?php


$subject = "Thanks for your Inquiry.";
$txt ="Dear Customer;
                     Thanks for your Inquiry in our WinAzumaShipping Co.ltd.
                     We will contact you soon.
";
$headers = "From: myapanyi.az@example.com";

mail($email_from,$subject,$txt,$headers);

}
?>