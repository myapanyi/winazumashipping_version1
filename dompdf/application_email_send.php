<?php 
// include autoloader
require_once 'autoload.inc.php';
 
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$browseimg = $_FILES['browseimg'];

$img_name = $browseimg['name'];
  
  if (!(isset($img_name) && $img_name != '' && $img_name != ' ')) {

  $img_name = "user.png";
   
  }
  else{
    $imgtype =  $_FILES["browseimg"]["type"];

  $tmp = $_FILES["browseimg"]["tmp_name"];

  if($imgtype == "image/jpeg" ||  $imgtype == "image/jpg" || $imgtype == "image/png")
  {

    //save imge to desire folder...
    $uploaddir = 'images/employee/';
    $uploadfile = $uploaddir . basename($img_name);

    $fuploadfile = fopen($uploadfile,'w+');




    move_uploaded_file($tmp, $uploadfile);


    fclose($fuploadfile);
}


  }

   $position = $_POST['position']; // required
  if (!(isset($position) && $position != '' && $position != ' ')) {

  $position = "Not Fill";
   
  }


$date = $_POST['date']; // required
if (!(isset($date) && $date != '' && $date != ' ')) {
$date = "Not Fill";
  }

   $specify1 = $_POST['specify1']; // required
   
   if (!(isset($specify1) && $specify1 != '' && $specify1 != ' ')) {
$specify1 ="Not Fill";
  }

  

$specify2 = $_POST['specify2']; // required

   if (!(isset($specify2) && $specify2 != '' && $specify2 != ' ')) {
$specify2 ="Not Fill";
  }

  $specify3 = $_POST['specify3']; // required
  
   if (!(isset($specify3) && $specify3 != '' && $specify3 != ' ')) {
$specify3 ="Not Fill";
  }

$specify4 = $_POST['specify4']; // required

   if (!(isset($specify4) && $specify4 != '' && $specify4 != ' ')) {
$specify4 ="Not Fill";
  }

   $full_name = $_POST['full_name']; // required
   
   if (!(isset($full_name) && $full_name != '' && $full_name != ' ')) {
$full_name ="Not Fill";
  }

$nrc = $_POST['nrc']; // required

   if (!(isset($nrc) && $nrc != '' && $nrc != ' ')) {
$nrc ="Not Fill";
  }

  $passport = $_POST['passport']; // required
  
   if (!(isset($passport) && $passport != '' && $passport != ' ')) {
$passport ="Not Fill";
  }

$present_add = $_POST['present_add']; // required

   if (!(isset($present_add) && $present_add != '' && $present_add != ' ')) {
$present_add ="Not Fill";
  }

   $tel = $_POST['tel']; // required
     if (!(isset($tel) && $tel != '' && $tel != ' ')) {
$tel ="Not Fill";
  }

$postal = $_POST['postal']; // required
  
   if (!(isset($postal) && $postal != '' && $postal != ' ')) {
$postal ="Not Fill";
  }
  $email = $_POST['email']; // required
    
   if (!(isset($email) && $email != '' && $email != ' ')) {
$email ="Not Fill";
  }
$birth = $_POST['birth']; // required
  
   if (!(isset($birth) && $birth != '' && $birth != ' ')) {
$birth ="Not Fill";
  }

$pBirth = $_POST['pBirth']; // required
  
   if (!(isset($pBirth) && $pBirth != '' && $pBirth != ' ')) {
$pBirth ="Not Fill";
  }
$age = $_POST['age']; // required
  
   if (!(isset($age) && $age != '' && $age != ' ')) {
$age ="Not Fill";
  }
   $nationality = $_POST['nationality']; // required
    
   if (!(isset($nationality) && $nationality != '' && $nationality != ' ')) {
$nationality ="Not Fill";
  }
$religion = $_POST['religion']; // required
  
   if (!(isset($religion) && $religion != '' && $religion != ' ')) {
$religion ="Not Fill";
  }
  $race = $_POST['race']; 
    
   if (!(isset($race) && $race != '' && $race != ' ')) {
$race ="Not Fill";
  }
  $spe_class = $_POST['spe_class'];
     
   if (!(isset($spe_class) && $spe_class != '' && $spe_class != ' ')) {
$spe_class ="Not Fill";
  }
$father = $_POST['father']; 
  
   if (!(isset($father) && $father != '' && $father != ' ')) {
$father ="--";
  }
   $relationship = $_POST['relationship']; 
     
   if (!(isset($relationship) && $relationship != '' && $relationship != ' ')) {
$relationship ="--";
  }
$age = $_POST['age']; 
 
   if (!(isset($age) && $age != '' && $age != ' ')) {
$age ="--";
  }
  $employer = $_POST['employer']; 
    
   if (!(isset($employer) && $employer != '' && $employer != ' ')) {
$employer ="--";
  }
$occupation = $_POST['occupation']; 
  
   if (!(isset($occupation) && $occupation != '' && $occupation != ' ')) {
$occupation ="--";
  }
$mother = $_POST['mother']; 
  
   if (!(isset($mother) && $mother != '' && $mother != ' ')) {
$mother ="--";
  }
   $relationship2 = $_POST['relationship2']; 
     
   if (!(isset($relationship2) && $relationship2 != '' && $relationship2 != ' ')) {
$relationship2 ="--";
  }
$age2 = $_POST['age2']; 
 
   if (!(isset($age2) && $age2 != '' && $age2 != ' ')) {
$age2 ="--";
  }
  $employer2 = $_POST['employer2']; 
   
   if (!(isset($employer2) && $employer2 != '' && $employer2 != ' ')) {
$employer2 ="--";
  }
$occupation2 = $_POST['occupation2']; 
  
   if (!(isset($occupation2) && $occupation2 != '' && $occupation2 != ' ')) {
$occupation2 ="--";
  }
$n3 = $_POST['3']; 
  
   if (!(isset($n3) && $n3 != '' && $n3 != ' ')) {
$n3 ="--";
  }
   $relationship3 = $_POST['relationship3']; 
   
   if (!(isset($relationship3) && $relationship3 != '' && $relationship3 != ' ')) {
$relationship3 ="--";
  }

$age3 = $_POST['age3']; 
  
   if (!(isset($age3) && $age3 != '' && $age3 != ' ')) {
$age3 ="--";
  }

  $employer3 = $_POST['employer3']; 
 
   if (!(isset($employer3) && $employer3 != '' && $employer3 != ' ')) {
$employer3 ="--";
  }
$occupation3 = $_POST['occupation3']; 
  
   if (!(isset($occupation3) && $occupation3 != '' && $occupation3 != ' ')) {
$occupation3 ="--";
  }
$n4 = $_POST['4']; 
 
   if (!(isset($n4) && $n4 != '' && $n4 != ' ')) {
$n4 ="--";
  }
   $relationship4 = $_POST['relationship4']; 
    
   if (!(isset($relationship4) && $relationship4 != '' && $relationship4 != ' ')) {
$relationship4 ="--";
  }
$age4 = $_POST['age4']; 
  
   if (!(isset($age4) && $age4 != '' && $age4 != ' ')) {
$age4 ="--";
  }
  $employer4 = $_POST['employer4']; 
 
   if (!(isset($employer4) && $employer4 != '' && $employer4 != ' ')) {
$employer4 ="--";
  }
$occupation4 = $_POST['occupation4']; 
  
   if (!(isset($occupation4) && $occupation4 != '' && $occupation4 != ' ')) {
$occupation4 ="--";
}
  
  $n5 = $_POST['5'];
   if (!(isset($n5) && $n5 != '' && $n5 != ' ')) {
$n5 ="--";
  }
   $relationship5 = $_POST['relationship5']; 
    
   if (!(isset($relationship5) && $relationship5 != '' && $relationship5 != ' ')) {
$relationship5 ="--";
  }
$age5 = $_POST['age5'];
   if (!(isset($age5) && $age5 != '' && $age5 != ' ')) {
$age5 ="--";
  }
  $employer5 = $_POST['employer5']; 
 
   if (!(isset($employer5) && $employer5 != '' && $employer5 != ' ')) {
$employer5 ="--";
  }
$occupation5 = $_POST['occupation5']; 

   if (!(isset($occupation5) && $occupation5 != '' && $occupation5 != ' ')) {
$occupation5 ="--";
  }
$n6 = $_POST['6'];
   if (!(isset($n6) && $n6 != '' && $n6 != ' ')) {
$n6 ="--";
  }
   $relationship6 = $_POST['relationship6']; 
     
   if (!(isset($relationship6) && $relationship6 != '' && $relationship6 != ' ')) {
$relationship6 ="--";
  }
$age6 = $_POST['age6'];
   if (!(isset($age6) && $age6 != '' && $age6 != ' ')) {
$age6 ="--";
  }
  $employer6 = $_POST['employer6']; 
 
   if (!(isset($employer6) && $employer6 != '' && $employer6 != ' ')) {
$employer6 ="--";
  }
$occupation6 = $_POST['occupation6']; 

   if (!(isset($occupation6) && $occupation6 != '' && $occupation6 != ' ')) {
$occupation6 ="--";
}
  $n7 = $_POST['7'];
   if (!(isset($n7) && $n7 != '' && $n7 != ' ')) {
$n7 ="--";
  }
   $relationship7 = $_POST['relationship7']; 
    
   if (!(isset($relationship7) && $relationship7 != '' && $relationship7 != ' ')) {
$relationship7 ="--";
  }
$age7 = $_POST['age7'];
   if (!(isset($age7) && $age7 != '' && $age7 != ' ')) {
$age7 ="--";
  }
  $employer7 = $_POST['employer7']; 
 
   if (!(isset($employer7) && $employer7 != '' && $employer7 != ' ')) {
$employer7 ="--";
  }
$occupation7 = $_POST['occupation7']; 
 
   if (!(isset($occupation7) && $occupation7 != '' && $occupation7 != ' ')) {
$occupation7 ="--";
  }


    $institution1 = $_POST['institution1']; 
   
   if (!(isset($institution1) && $institution1 != '' && $institution1 != ' ')) {
$institution1 ="--";
  }
$date_from_1 = $_POST['date_from_1']; 
 
   if (!(isset($date_from_1) && $date_from_1 != '' && $date_from_1 != ' ')) {
$date_from_1 ="--";
  }
$date_to_1 = $_POST['date_to_1']; 
   if (!(isset($date_to_1) && $date_to_1 != '' && $date_to_1 != ' ')) {
$date_to_1 ="--";
  }
   $duration1 = $_POST['duration1']; 
  
   if (!(isset($duration1) && $duration1 != '' && $duration1 != ' ')) {
$duration1 ="--";
  }
$standard1 = $_POST['standard1']; 
   if (!(isset($standard1) && $standard1 != '' && $standard1 != ' ')) {
$standard1 ="--";
  }
  $institution2 = $_POST['institution2']; 

   if (!(isset($institution2) && $institution2 != '' && $institution2 != ' ')) {
$institution2 ="--";
  }
$date_from_2 = $_POST['date_from_2']; 

   if (!(isset($date_from_2) && $date_from_2 != '' && $date_from_2 != ' ')) {
$date_from_2 ="--";
  }
$date_to_2 = $_POST['date_to_2']; 
   if (!(isset($date_to_2) && $date_to_2 != '' && $date_to_2 != ' ')) {
$date_to_2 ="--";
  }
   $duration2 = $_POST['duration2']; 
  
   if (!(isset($duration2) && $duration2 != '' && $duration2 != ' ')) {
$duration2 ="--";
  }
$standard2 = $_POST['standard2']; 
   if (!(isset($standard2) && $standard2 != '' && $standard2 != ' ')) {
$standard2 ="--";
  }
  $institution3 = $_POST['institution3']; 
    
   if (!(isset($institution3) && $institution3 != '' && $institution3 != ' ')) {
$institution3 ="--";
  }
$date_from_3 = $_POST['date_from_3']; 
 
   if (!(isset($date_from_3) && $date_from_3 != '' && $date_from_3 != ' ')) {
$date_from_3 ="--";
  }
$date_to_3 = $_POST['date_to_3']; 
   if (!(isset($date_to_3) && $date_to_3 != '' && $date_to_3 != ' ')) {
$date_to_3 ="--";
  }
   $duration3 = $_POST['duration3']; 
  
   if (!(isset($duration3) && $duration3 != '' && $duration3 != ' ')) {
$duration3 ="--";
  }
$standard3 = $_POST['standard3']; 
   if (!(isset($standard3) && $standard3 != '' && $standard3 != ' ')) {
$standard3 ="--";
  }
  $institution4 = $_POST['institution4']; 
    
   if (!(isset($institution4) && $institution4 != '' && $institution4 != ' ')) {
$institution4 ="--";
  }
$date_from_4 = $_POST['date_from_4']; 
  
   if (!(isset($date_from_4) && $date_from_4 != '' && $date_from_4 != ' ')) {
$date_from_4 ="--";
  }
$date_to_4 = $_POST['date_to_4']; 
   if (!(isset($date_to_4) && $date_to_4 != '' && $date_to_4 != ' ')) {
$date_to_4 ="--";
  }
   $duration4 = $_POST['duration4']; 
  
   if (!(isset($duration4) && $duration4 != '' && $duration4 != ' ')) {
$duration4 ="--";
  }
$standard4 = $_POST['standard4']; 
   if (!(isset($standard4) && $standard4 != '' && $standard4 != ' ')) {
$standard4 ="--";
  }
  $institution5 = $_POST['institution5']; 
   
   if (!(isset($institution5) && $institution5 != '' && $institution5 != ' ')) {
$institution5 ="--";
  }
$date_from_5 = $_POST['date_from_5']; 
 
   if (!(isset($date_from_5) && $date_from_5 != '' && $date_from_5 != ' ')) {
$date_from_5 ="--";
  }



  $date_to_5 = $_POST['date_to_5']; 
   if (!(isset($date_to_5) && $date_to_5 != '' && $date_to_5 != ' ')) {
$date_to_5 ="--";
  }
  $duration5 = $_POST['duration5']; 
 
   if (!(isset($duration5) && $duration5 != '' && $duration5 != ' ')) {
$duration5 ="--";
  }
$standard5 = $_POST['standard5']; 
   if (!(isset($standard5) && $standard5 != '' && $standard5 != ' ')) {
$standard5 ="--";
  }
$institution6 = $_POST['institution6']; 

   if (!(isset($institution6) && $institution6 != '' && $institution6 != ' ')) {
$institution6 ="--";
  }
   $date_from_6 = $_POST['date_from_6']; 
    
   if (!(isset($date_from_6) && $date_from_6 != '' && $date_from_6 != ' ')) {
$date_from_6 ="--";
  }
$date_to_6 = $_POST['date_to_6']; 
   if (!(isset($date_to_6) && $date_to_6 != '' && $date_to_6 != ' ')) {
$date_to_6 ="--";
  }
  $duration6 = $_POST['duration6']; 
 
   if (!(isset($duration6) && $duration6 != '' && $duration6 != ' ')) {
$duration6 ="--";
  }
$standard6 = $_POST['standard6']; 
   if (!(isset($standard6) && $standard6 != '' && $standard6 != ' ')) {
$standard6 ="--";
  }
$institution7 = $_POST['institution7']; 
  
   if (!(isset($institution7) && $institution7 != '' && $institution7 != ' ')) {
$institution7 ="--";
  }
   $date_from_7 = $_POST['date_from_7']; 
   
   if (!(isset($date_from_7) && $date_from_7 != '' && $date_from_7 != ' ')) {
$date_from_7 ="--";
  }
$date_to_7 = $_POST['date_to_7']; 
   if (!(isset($date_to_7) && $date_to_7 != '' && $date_to_7 != ' ')) {
$date_to_7 ="--";
  }
  $duration7 = $_POST['duration7']; 
 
   if (!(isset($duration7) && $duration7 != '' && $duration7 != ' ')) {
$duration7 ="--";
  }
$standard7 = $_POST['standard7']; 
   if (!(isset($standard7) && $standard7 != '' && $standard7 != ' ')) {
$standard7 ="--";
  }



  $institution8 = $_POST['institution8']; 

   if (!(isset($institution8) && $institution8 != '' && $institution8 != ' ')) {
$institution8 ="--";
  }
  $date_from_8 = $_POST['date_from_8']; 
  
   if (!(isset($date_from_8) && $date_from_8 != '' && $date_from_8 != ' ')) {
$date_from_8 ="--";
  }
$date_to_8 = $_POST['date_to_8']; 
   if (!(isset($date_to_8) && $date_to_8 != '' && $date_to_8 != ' ')) {
$date_to_8 ="--";
  }
$duration8 = $_POST['duration8']; 
   if (!(isset($duration8) && $duration8 != '' && $duration8 != ' ')) {
$duration8 ="--";
  }
   $standard8 = $_POST['standard8']; 
  
   if (!(isset($standard8) && $standard8 != '' && $standard8 != ' ')) {
$standard8 ="--";
  }

$language1 = $_POST['language1']; 
   if (!(isset($language1) && $language1 != '' && $language1 != ' ')) {
$language1 ="--";
  }
  $speak1 = $_POST['speak1'];
   if (!(isset($speak1) && $speak1 != '' && $speak1 != ' ')) {
$speak1 ="--";
  }
$read1 = $_POST['read1'];
   if (!(isset($read1) && $read1 != '' && $read1 != ' ')) {
$read1 ="--";
  }



  $write1 = $_POST['write1'];
   if (!(isset($write1) && $write1 != '' && $write1 != ' ')) {
$write1 ="--";
  }
  $language2 = $_POST['language2']; 
 
   if (!(isset($language2) && $language2 != '' && $language2 != ' ')) {
$language2 ="--";
  }
$speak2 = $_POST['speak2'];
   if (!(isset($speak2) && $speak2 != '' && $speak2 != ' ')) {
$speak2 ="--";
  }
$read2 = $_POST['read2'];
   if (!(isset($read2) && $read2 != '' && $read2 != ' ')) {
$read2 ="--";
  }
   $write2 = $_POST['write2'];
   if (!(isset($write2) && $write2 != '' && $write2 != ' ')) {
$write2 ="--";
  }
$language3 = $_POST['language3']; 
   if (!(isset($language3) && $language3 != '' && $language3 != ' ')) {
$language3 ="--";
  }
  $speak3 = $_POST['speak3'];
   if (!(isset($speak3) && $speak3 != '' && $speak3 != ' ')) {
$speak3 ="--";
  }
$read3 = $_POST['read3'];
   if (!(isset($read3) && $read3 != '' && $read3 != ' ')) {
$read3 ="--";
  }
$write3 = $_POST['write3'];
   if (!(isset($write3) && $write3 != '' && $write3 != ' ')) {
$write3 ="--";
  }
   $language4 = $_POST['language4']; 
  
   if (!(isset($language4) && $language4 != '' && $language4 != ' ')) {
$language4 ="--";
  }
$speak4 = $_POST['speak4'];
   if (!(isset($speak4) && $speak4 != '' && $speak4 != ' ')) {
$speak4 ="--";
  }
  $read4 = $_POST['read4'];
   if (!(isset($read4) && $read4 != '' && $read4 != ' ')) {
$read4 ="--";
  }
$write4 = $_POST['write4'];
   if (!(isset($write4) && $write4 != '' && $write4 != ' ')) {
$write4 ="--";
  }





   $company1 = $_POST['company1']; 
   if (!(isset($company1) && $company1 != '' && $company1 != ' ')) {
$company1 ="--";
  }
$position1 = $_POST['position1']; 
   if (!(isset($position1) && $position1 != '' && $position1 != ' ')) {
$position1 ="--";
  }
  $date_f1 = $_POST['date_f1'];
   if (!(isset($date_f1) && $date_f1 != '' && $date_f1 != ' ')) {
$date_f1 ="--";
  }
$date_t1 = $_POST['date_t1'];
   if (!(isset($date_t1) && $date_t1 != '' && $date_t1 != ' ')) {
$date_t1 ="--";
  }



  $salary1 = $_POST['salary1'];
   if (!(isset($salary1) && $salary1 != '' && $salary1 != ' ')) {
$salary1 ="--";
  }
  $leaving1 = $_POST['leaving1'];
   if (!(isset($leaving1) && $leaving1 != '' && $leaving1 != ' ')) {
$leaving1 ="--";
  }
$company2 = $_POST['company2'];
   if (!(isset($company2) && $company2 != '' && $company2 != ' ')) {
$company2 ="--";
  }
$position2 = $_POST['position2']; 
   if (!(isset($position2) && $position2 != '' && $position2 != ' ')) {
$position2 ="--";
  }
   $date_f2 = $_POST['date_f2'];
   if (!(isset($date_f2) && $date_f2 != '' && $date_f2 != ' ')) {
$date_f2 ="--";
  }
$date_t2 = $_POST['date_t2'];
   if (!(isset($date_t2) && $date_t2 != '' && $date_t2 != ' ')) {
$date_t2 ="--";
  }
  $salary2 = $_POST['salary2'];
   if (!(isset($salary2) && $salary2 != '' && $salary2 != ' ')) {
$salary2 ="--";
  }
$leaving2 = $_POST['leaving2'];
   if (!(isset($leaving2) && $leaving2 != '' && $leaving2 != ' ')) {
$leaving2 ="--";
  }
$company3 = $_POST['company3'];
   if (!(isset($company3) && $company3 != '' && $company3 != ' ')) {
$company3 ="--";
  }
   $position3 = $_POST['position3']; 
  
   if (!(isset($position3) && $position3 != '' && $position3 != ' ')) {
$position3 ="--";
  }
$date_f3 = $_POST['date_f3'];
   if (!(isset($date_f3) && $date_f3 != '' && $date_f3 != ' ')) {
$date_f3 ="--";
  }
  $date_t3 = $_POST['date_t3'];
   if (!(isset($date_t3) && $date_t3 != '' && $date_t3 != ' ')) {
$date_t3 ="--";
  }
$salary3 = $_POST['salary3'];
   if (!(isset($salary3) && $salary3 != '' && $salary3 != ' ')) {
$salary3 ="--";
  }



  $leaving3 = $_POST['leaving3'];
   if (!(isset($leaving3) && $leaving3 != '' && $leaving3 != ' ')) {
$leaving3 ="--";
  }
  $company4 = $_POST['company4'];
   if (!(isset($company4) && $company4 != '' && $company4 != ' ')) {
$company4 ="--";
  }
$position4 = $_POST['position4']; 
   if (!(isset($position4) && $position4 != '' && $position4 != ' ')) {
$position4 ="--";
  }
$date_f4 = $_POST['date_f4'];
   if (!(isset($date_f4) && $date_f4 != '' && $date_f4 != ' ')) {
$date_f4 ="--";
  }
   $date_t4 = $_POST['date_t4'];
   if (!(isset($date_t4) && $date_t4 != '' && $date_t4 != ' ')) {
$date_t4 ="--";
  }
$salary4 = $_POST['salary4'];
   if (!(isset($salary4) && $salary4 != '' && $salary4 != ' ')) {
$salary4 ="--";
  }
  $leaving4 = $_POST['leaving4'];
   if (!(isset($leaving4) && $leaving4 != '' && $leaving4 != ' ')) {
$leaving4 ="--";
  }
$company5 = $_POST['company5'];
   if (!(isset($company5) && $company5 != '' && $company5 != ' ')) {
$company5 ="--";
  }
$position5 = $_POST['position5']; 
   if (!(isset($position5) && $position5 != '' && $position5 != ' ')) {
$position5 ="--";
  }
   $date_f5 = $_POST['date_f5'];
   if (!(isset($date_f5) && $date_f5 != '' && $date_f5 != ' ')) {
$date_f5 ="--";
  }
$date_t5 = $_POST['date_t5'];
   if (!(isset($date_t5) && $date_t5 != '' && $date_t5 != ' ')) {
$date_t5 ="--";
  }
  $salary5 = $_POST['salary5'];
   if (!(isset($salary5) && $salary5 != '' && $salary5 != ' ')) {
$salary5 ="--";
  }
$leaving5 = $_POST['leaving5'];
   if (!(isset($leaving5) && $leaving5 != '' && $leaving5 != ' ')) {
$leaving5 ="--";
  }


  
  $company6 = $_POST['company6'];
   if (!(isset($company6) && $company6 != '' && $company6 != ' ')) {
$company6 ="--";
  }
  $position6 = $_POST['position6']; 
 
   if (!(isset($position6) && $position6 != '' && $position6 != ' ')) {
$position6 ="--";
  }
$date_f6 = $_POST['date_f6'];
   if (!(isset($date_f6) && $date_f6 != '' && $date_f6 != ' ')) {
$date_f6 ="--";
  }
$date_t6 = $_POST['date_t6'];
   if (!(isset($date_t6) && $date_t6 != '' && $date_t6 != ' ')) {
$date_t6 ="--";
  }
   $salary6 = $_POST['salary6'];
   if (!(isset($salary6) && $salary6 != '' && $salary6 != ' ')) {
$salary6 ="--";
  }
$leaving6 = $_POST['leaving6'];
   if (!(isset($leaving6) && $leaving6 != '' && $leaving6 != ' ')) {
$leaving6 ="--";
  }
  $company7 = $_POST['company7'];
   if (!(isset($company7) && $company7 != '' && $company7 != ' ')) {
$company7 ="--";
  }
$position7 = $_POST['position7']; 
   if (!(isset($position7) && $position7 != '' && $position7 != ' ')) {
$position7 ="--";
  }
$date_f7 = $_POST['date_f7'];
   if (!(isset($date_f7) && $date_f7 != '' && $date_f7 != ' ')) {
$date_f7 ="--";
  }
   $date_t7 = $_POST['date_t7'];
   if (!(isset($date_t7) && $date_t7 != '' && $date_t7 != ' ')) {
$date_t7 ="--";
  }
$salary7 = $_POST['salary7'];
   if (!(isset($salary7) && $salary7 != '' && $salary7 != ' ')) {
$salary7 ="--";
  }
  $leaving7 = $_POST['leaving7'];
   if (!(isset($leaving7) && $leaving7 != '' && $leaving7 != ' ')) {
$leaving7 ="--";
  }
$res_name1 = $_POST['res_name1']; 
   if (!(isset($res_name1) && $res_name1 != '' && $res_name1 != ' ')) {
$res_name1 ="--";
  }


  ///
    $address1 = $_POST['address1'];
   if (!(isset($address1) && $address1 != '' && $address1 != ' ')) {
$address1 ="--";
  }
  $telno1 = $_POST['telno1'];
   if (!(isset($telno1) && $telno1 != '' && $telno1 != ' ')) {
$telno1 ="--";
  }
$occupation1 = $_POST['occupation1']; 

   if (!(isset($occupation1) && $occupation1 != '' && $occupation1 != ' ')) {
$occupation1 ="--";
  }
$since1 = $_POST['since1'];
   if (!(isset($since1) && $since1 != '' && $since1 != ' ')) {
$since1 ="--";
  }
   $res_name2 = $_POST['res_name2']; 
  
   if (!(isset($res_name2) && $res_name2 != '' && $res_name2 != ' ')) {
$res_name2 ="--";
  }
$address2 = $_POST['address2'];
   if (!(isset($address2) && $address2 != '' && $address2 != ' ')) {
$address2 ="--";
  }
  $telno2 = $_POST['telno2'];
   if (!(isset($telno2) && $telno2 != '' && $telno2 != ' ')) {
$telno2 ="--";
  }
$occupation2 = $_POST['occupation2']; 

   if (!(isset($occupation2) && $occupation2 != '' && $occupation2 != ' ')) {
$occupation2 ="--";
  }
$since2 = $_POST['since2'];
   if (!(isset($since2) && $since2 != '' && $since2 != ' ')) {
$since2 ="--";
  }
   $res_name3 = $_POST['res_name3']; 
  
   if (!(isset($res_name3) && $res_name3 != '' && $res_name3 != ' ')) {
$res_name3 ="--";
  }
$address3 = $_POST['address3'];
   if (!(isset($address3) && $address3 != '' && $address3 != ' ')) {
$address3 ="--";
  }
  $telno3 = $_POST['telno3'];
   if (!(isset($telno3) && $telno3 != '' && $telno3 != ' ')) {
$telno3 ="--";
  }
$occupation3 = $_POST['occupation3']; 
   if (!(isset($occupation3) && $occupation3 != '' && $occupation3 != ' ')) {
$occupation3 ="--";
  }


  
  $since3 = $_POST['since3'];
   if (!(isset($since3) && $since3 != '' && $since3 != ' ')) {
$since3 ="--";
  }
  $y_specify = $_POST['y_specify']; 
 
   if (!(isset($y_specify) && $y_specify != '' && $y_specify != ' ')) {
$y_specify ="Not Fill";
  }
$n_specify = $_POST['n_specify']; 
   if (!(isset($n_specify) && $n_specify != '' && $n_specify != ' ')) {
$n_specify ="Not Fill";
  }
$expected = $_POST['expected'];
   if (!(isset($expected) && $expected != '' && $expected != ' ')) {
$expected ="Not Fill";
  }
   $available = $_POST['available']; 
  
   if (!(isset($available) && $available != '' && $available != ' ')) {
$available ="Not Fill";
  }
$signature = $_POST['signature']; 
   if (!(isset($signature) && $signature != '' && $signature != ' ')) {
$signature ="Not Fill";
  }
  $apply_date = $_POST['apply_date']; 
    
   if (!(isset($apply_date) && $apply_date != '' && $apply_date != ' ')) {
$apply_date ="Not Fill";
  }

     if (isset($_POST['male'])) {
  $male = "checked"; 
  }else
  {
    $male = " ";
  }
    if (isset($_POST['female'])) {
  $female = "checked"; 
  }
  else {
   $female = " ";
  }

     if (isset($_POST['single'])) {
  $single = "checked"; 
  }else
  {
    $single = " ";
  }
    if (isset($_POST['divorced'])) {
  $divorced = "checked"; 
  }
  else {
   $divorced = " ";
  }
   if (isset($_POST['married'])) {
  $married = "checked"; 
  }else
  {
    $married = " ";
  }
    if (isset($_POST['window'])) {
  $window = "checked"; 
  }
  else {
   $window = " ";
  }


     if (isset($_POST['a'])) {
  $a = "checked"; 
  }else
  {
    $a = " ";
  }
    if (isset($_POST['b'])) {
  $b = "checked"; 
  }
  else {
   $b = " ";
  }

     if (isset($_POST['o'])) {
  $o = "checked"; 
  }else
  {
    $o = " ";
  }
    if (isset($_POST['ab'])) {
  $ab = "checked"; 
  }
  else {
   $ab = " ";
  }
   if (isset($_POST['yes'])) {
  $yes = "checked"; 
  }else
  {
    $yes = " ";
  }
    if (isset($_POST['no'])) {
  $no = "checked"; 
  }
  else {
   $no = " ";
  }


    if (isset($_POST['cobol'])) {
  $cobol = "checked"; 
  }
  else {
   $cobol = " ";
  }

     if (isset($_POST['vb'])) {
  $vb = "checked"; 
  }else
  {
    $vb = " ";
  }
    if (isset($_POST['java_script'])) {
  $java_script = "checked"; 
  }
  else {
   $java_script = " ";
  }
   if (isset($_POST['intranet'])) {
  $intranet = "checked"; 
  }else
  {
    $intranet = " ";
  }
    if (isset($_POST['asembly'])) {
  $asembly = "checked"; 
  }
  else {
   $asembly = " ";
  }
  
       if (isset($_POST['asp'])) {
  $asp = "checked"; 
  }else
  {
    $asp = " ";
  }
    if (isset($_POST['uml'])) {
  $uml = "checked"; 
  }
  else {
   $uml = " ";
  }
   if (isset($_POST['network'])) {
  $network = "checked"; 
  }else
  {
    $network = " ";
  }
    if (isset($_POST['perl'])) {
  $perl = "checked"; 
  }
  else {
   $perl = " ";
  }


    if (isset($_POST['net'])) {
  $net = "checked"; 
  }
  else {
   $net = " ";
  }

     if (isset($_POST['mssql'])) {
  $mssql = "checked"; 
  }else
  {
    $mssql = " ";
  }
    if (isset($_POST['lan'])) {
  $lan = "checked"; 
  }
  else {
   $lan = " ";
  }
   if (isset($_POST['linux'])) {
  $linux = "checked"; 
  }else
  {
    $linux = " ";
  }
    if (isset($_POST['csharp'])) {
  $csharp = "checked"; 
  }
  else {
   $csharp = " ";
  }
    if (isset($_POST['oracle'])) {
  $oracle = "checked"; 
  }
  else {
   $oracle = " ";
  }
   if (isset($_POST['protocol'])) {
  $protocol = "checked"; 
  }else
  {
    $protocol = " ";
  }
    if (isset($_POST['unix'])) {
  $unix = "checked"; 
  }
  else {
   $unix = " ";
  }


    if (isset($_POST['java'])) {
  $java = "checked"; 
  }
  else {
   $java = " ";
  }

     if (isset($_POST['oracle1'])) {
  $oracle1 = "checked"; 
  }else
  {
    $oracle1 = " ";
  }
    if (isset($_POST['hardware'])) {
  $hardware = "checked"; 
  }
  else {
   $hardware = " ";
  }
   if (isset($_POST['corba'])) {
  $corba = "checked"; 
  }else
  {
    $corba = " ";
  }
    if (isset($_POST['servlet'])) {
  $servlet = "checked"; 
  }
  else {
   $servlet = " ";
  }



      if (isset($_POST['db2'])) {
  $db2 = "checked"; 
  }
  else {
   $db2 = " ";
  }
    if (isset($_POST['dream'])) {
  $dream = "checked"; 
  }
  else {
   $dream = " ";
  }
   if (isset($_POST['c'])) {
  $c = "checked"; 
  }else
  {
    $c = " ";
  }
    if (isset($_POST['javabean'])) {
  $javabean = "checked"; 
  }
  else {
   $javabean = " ";
  }


    if (isset($_POST['websphere'])) {
  $websphere = "checked"; 
  }
  else {
   $websphere = " ";
  }

     if (isset($_POST['photoshop'])) {
  $photoshop = "checked"; 
  }else
  {
    $photoshop = " ";
  }
    if (isset($_POST['cplus'])) {
  $cplus = "checked"; 
  }
  else {
   $cplus = " ";
  }
   if (isset($_POST['jsp'])) {
  $jsp = "checked"; 
  }else
  {
    $jsp = " ";
  }
    if (isset($_POST['access'])) {
  $access = "checked"; 
  }
  else {
   $access = " ";
  }

 


      if (isset($_POST['illustrator'])) {
  $illustrator = "checked"; 
  }
  else {
   $illustrator = " ";
  }
    if (isset($_POST['vc'])) {
  $vc = "checked"; 
  }
  else {
   $vc = " ";
  }
   if (isset($_POST['ejb'])) {
  $ejb = "checked"; 
  }else
  {
    $ejb = " ";
  }
    if (isset($_POST['html'])) {
  $html = "checked"; 
  }
  else {
   $html = " ";
  }


    if (isset($_POST['oa'])) {
  $oa = "checked"; 
  }
  else {
   $oa = " ";
  }

     if (isset($_POST['vcplus'])) {
  $vcplus = "checked"; 
  }else
  {
    $vcplus = " ";
  }
    if (isset($_POST['jdbc'])) {
  $jdbc = "checked"; 
  }
  else {
   $jdbc = " ";
  }
   if (isset($_POST['xml'])) {
  $xml = "checked"; 
  }else
  {
    $xml = " ";
  }
    if (isset($_POST['adobe'])) {
  $adobe = "checked"; 
  }
  else {
   $adobe = " ";
  }

        if (isset($_POST['vb_script'])) {
  $vb_script = "checked"; 
  }
  else {
   $vb_script = " ";
  }
    if (isset($_POST['j2se'])) {
  $j2se = "checked"; 
  }
  else {
   $j2se = " ";
  }
   if (isset($_POST['sgml'])) {
  $sgml = "checked"; 
  }else
  {
    $sgml = " ";
  }
    if (isset($_POST['vba'])) {
  $vba = "checked"; 
  }
  else {
   $vba = " ";
  }


    if (isset($_POST['jdk'])) {
  $jdk = "checked"; 
  }
  else {
   $jdk = " ";
  }

     if (isset($_POST['internet'])) {
  $internet = "checked"; 
  }else
  {
    $internet = " ";
  }
    

      if (isset($_POST['y_illness'])) {
  $y_illness = "checked"; 
  }
  else {
   $y_illness = " ";
  }

        if (isset($_POST['n_illness'])) {
  $n_illness = "checked"; 
  }
  else {
   $n_illness = " ";
  }
    if (isset($_POST['y_crime'])) {
  $y_crime = "checked"; 
  }
  else {
   $y_crime = " ";
  }
   if (isset($_POST['n_crime'])) {
  $n_crime = "checked"; 
  }else
  {
    $n_crime = " ";
  }
    
 $y_specify = $_POST['y_specify'];
   if (!(isset($y_specify) && $y_specify != '' && $y_specify != ' ')) {
$y_specify ="Not Fill";
  }
   $n_specify = $_POST['n_specify'];
   if (!(isset($n_specify) && $n_specify != '' && $n_specify != ' ')) {
$n_specify ="Not Fill";
  }
   $expected = $_POST['expected'];
   if (!(isset($expected) && $expected != '' && $expected != ' ')) {
$expected ="Not Fill";
  }
   $available = $_POST['available'];
   if (!(isset($available) && $available != '' && $available != ' ')) {
$available ="Not Fill";
  }
     $signature = $_POST['signature'];
   if (!(isset($signature) && $signature != '' && $signature != ' ')) {
$signature ="Not Fill";
  }
     $apply_date = $_POST['apply_date'];
   if (!(isset($apply_date) && $apply_date != '' && $apply_date != ' ')) {
$apply_date ="Not Fill";
  }
    
$dompdf->loadHtml('  <br/>
<br/>
<br/>               
                <table style="border: 1px solid gray;width:40%;height:100px;float:left;">
                 <tr style="border: 1px solid gray;">
                 <th style="border: 1px solid gray;">For Internal Reference Only!</th></tr>
                 <tr>
                 <td>
                    <input type="checkbox" name="azurenet">Azurenet</checkbox><br/>
                    <input type="checkbox" name="sto">STO</checkbox><br/>
                    <input type="checkbox" name="waec">WAEC</checkbox><br/>
                 </td>
                 </tr>
                </table>
                <table style="border: 1px solid gray;width:40%;float:left;height:100px;margin-left:100px;">
                <tr>
                  <td>
                    File No   :  &nbsp;:</b>
       <input name="fileno" class="app_form_textbox" maxlength="100" style="border:0px;height:25px;width:100px">
       </input><br/>

                    Received By :  <input name="receivedby" class="app_form_textbox" maxlength="100" style="border:0px;height:25px;width:100px">
       </input>
       <br/>
                    Received Date :  <input name="receiveddate" class="app_form_textbox" maxlength="100" style="border:0px;height:25px;width:100px">
       </input><br/>
                    Remarks : <input name="remarks" class="app_form_textbox" maxlength="100" style="border:0px;height:25px;width:100px">
       </input><br/>
                  </td>
                  </tr>
                </table>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
  <h2 class="app_title">Employment Application</h2>


            <table style="width:450px;float:left;margin-top:35px;" >
             <tr><td>
        
        <b>Position Applied :</b>
       
    <label style="border:0px" class="app_form_textbox" maxlength="50" style="width:260px" >'.$position.' 
    </td>
    
        </tr>

        <tr>
            <td style="padding-top:40px;">
        <b>Date Applied &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
       
        <label style="border:0px" class="app_form_textbox" maxlength="50" style="width:260px" >'.$date.'
        </td>
         
        </tr>

            </table>


            <div class="col-md-55">
                        <div class="thumbnail" id="fileList">
                          <div class="view view-first">


                           <img src="images/employee/'.$img_name.'" style="float:right;margin-right: 200px;width: 250px;
margin-top:-150px;padding-top: 100px;position: absolute;width:240px;height:240px">
                            

                          </div>
                        </div>
                       

                        </div>
          

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

            <h4 class="ask_title">How you come to know of this position open?</h4>
        <input type="checkbox" name="ask" value="newspaper" checked> Through Newspaper&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Please Specify :&nbsp;&nbsp;&nbsp;<label name="specify1" class="app_form_textbox" maxlength="50" style="width:650px">'.$specify1.'<br>
          <input type="checkbox" name="ask" value="employment" > Through Employment Agency&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Please Specify :&nbsp;&nbsp;&nbsp;<label name="specify2" class="app_form_textbox" maxlength="50" style="width:650px">'.$specify2.'<br>
          <input type="checkbox" name="ask" value="friend" > Friend Recommend&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Please Specify :&nbsp;&nbsp;&nbsp;&nbsp;<label name="specify3" class="app_form_textbox" maxlength="50" style="width:650px">'.$specify3.'<br>
          <input type="checkbox" name="ask" value="internet" > Others(Internet Job Search,etc)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Please Specify :&nbsp;&nbsp;&nbsp;&nbsp;<label name="specify4" class="app_form_textbox" maxlength="50" style="width:650px">'.$specify4.'<br>
         
<hr/>
        <div style="height:800px;">
        <h2 class="detail_title">(A)PERSONAL DETAILS</h2>
       <table cellpadding="5" cellspacing="0" style="border: 1px solid gray;width:100%;">
        <tr>
        <td colspan="2">
        <label>Full Name (as in NRC;) 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
       </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label name="full_name" class="app_form_textbox" maxlength="50" style="border:0px;width:900px">
        '.$full_name.'</label>
        </td>       

        </tr>
        <tr>
        <td>
        <b>NRC No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;
       <label name="nrc" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
        '.$nrc.'</label>
        </td>
         <td>
        <b>Passport No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
       
        <label name="passport" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
        '.$passport.'</label>
        </td>
        </tr>
        <tr>
            <td colspan="2">
        <label>Present Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label name="present_add" class="app_form_textbox" maxlength="50" style="border:0px;width:835px"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <label class="app_form_textbox" maxlength="50" style="border:0px;width:835px">'.$present_add.'</label>
        </td>
        </tr>
        <tr>
        <td>
        <b>Telephone No&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<label name="tel" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
        '.$tel.'</label>
        </td>
         <td>
        <b>Postal Code&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
        <label name="postal" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
        '.$postal.'</label>
        </td>
        </tr>

        <tr>
        <td>
        <b>E-mail&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<label name="email" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
         '.$email.'</label><td>
        <b>Sex&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
        <input type="checkbox" name="sex" value="male" '.$male.' > Male
         <input type="checkbox" name="sex" value="female" '.$female.' > Female
        </td>
        </tr>

        <tr>
        <td>
        <b>Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<label name="birth" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
       '.$birth.'</label>
        </td>
         <td>
        <b>Marital&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
         <input type="checkbox" name="marital" value="single" '.$single.' > Single&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="marital" value="divorced" '.$divorced.'> Divorced&nbsp;&nbsp;&nbsp;&nbsp;
         <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="checkbox" name="marital" value="married" '.$married.'> Married&nbsp;&nbsp;
         <input type="checkbox" name="marital" value="window" '.$window.'> Widow
        </td>
        </tr>

        <tr>
        <td>
        <b>Place of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<label name="pBirth" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
        '.$pBirth.'</label>
        </td>
         <td>
        <b>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
       <label name="age" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
        '.$age.'</label>
        </td>
        </tr>

        <tr>
        <td>
        <b>Nationality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<label name="nationality" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
        '.$nationality.'</label>
        </td>
         <td>
        <b>Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
        <label name="religion" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
        '.$religion.'</label>
        </td>
        </tr>

        <tr>
        <td>
        <b>Race&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;<label name="race" class="app_form_textbox" maxlength="100" style="border:0px;width:340px">
        '.$race.'</label>
        </td>
        <td>
        <b>Blood Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
         <input type="checkbox" name="blood" value="a" '.$a.'> A&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="blood" value="o" '.$o.'> O&nbsp;&nbsp;&nbsp;&nbsp;
         <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;<input type="checkbox" name="blood" value="b" '.$b.'> B&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="blood" value="ab" '.$ab.'> AB
        </td>
        </tr>
         <tr>
        <td>
        <b>Valid Driving License&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="checkbox" name="license" value="yes" '.$yes.'> YES&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="license" value="no" '.$no.'> NO&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td>
        <b>If yes,please specify what class:</b>
         <label name="spe_class" maxlength="100" style="border:0px;width:270px">
        '.$spe_class.'</label>
        </td>
        </tr>
        </table>

        <hr/>
          </div>
        <div style="height:800px;">
<h2 class="detail_title">(B)FAMILY BACKGROUND</h2>
        <table style="padding-bottom: 12px;width:100%;">
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Name</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Relationship</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Age</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Employer</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Occupation</th>
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">Father:<label name="father" class="b_table_texbox">'.$father.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="relationship" class="b_table_texbox">&nbsp;'.$relationship.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="age" class="b_table_texbox">&nbsp;'.$age.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="employer" class="b_table_texbox">&nbsp;'.$employer.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="occupation" class="b_table_texbox">&nbsp;'.$occupation.'</label></td>
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">Mother:<label name="mother" class="b_table_texbox">'.$mother.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="relationship2" class="b_table_texbox">&nbsp;'.$relationship2.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="age2" class="b_table_texbox">&nbsp;'.$age2.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="employer2" class="b_table_texbox">&nbsp;'.$employer2.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="occupation2" class="b_table_texbox">&nbsp;'.$occupation2.'</label></td>       
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="3" class="b_table_texbox">'.$n3.'</label></td>
               <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="relationship3" class="b_table_texbox">&nbsp;'.$relationship3.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="age3" class="b_table_texbox">&nbsp;'.$age3.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="employer3" class="b_table_texbox">&nbsp;'.$employer3.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="occupation3" class="b_table_texbox">&nbsp;'.$occupation3.'</label></td>
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="4" class="b_table_texbox">'.$n4.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="relationship4" class="b_table_texbox">&nbsp;'.$relationship4.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="age4" class="b_table_texbox">&nbsp;'.$age4.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="employer4" class="b_table_texbox">&nbsp;'.$employer4.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="occupation4" class="b_table_texbox">&nbsp;'.$occupation4.'</label></td>
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="5" class="b_table_texbox">'.$n5.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="relationship5" class="b_table_texbox">&nbsp;'.$relationship5.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="age5" class="b_table_texbox">&nbsp;'.$age5.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="employer5" class="b_table_texbox">&nbsp;'.$employer5.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="occupation5" class="b_table_texbox">&nbsp;'.$occupation5.'</label></td>
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="6" class="b_table_texbox">'.$n6.'</label></td>
               <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="relationship6" class="b_table_texbox">&nbsp;'.$relationship6.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="age6" class="b_table_texbox">&nbsp;'.$age6.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="employer6" class="b_table_texbox">&nbsp;'.$employer6.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="occupation6" class="b_table_texbox">&nbsp;'.$occupation6.'</label></td>
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="7" class="b_table_texbox">'.$n7.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="relationship7" class="b_table_texbox">&nbsp;'.$relationship7.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="age7" class="b_table_texbox">&nbsp;'.$age7.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="employer7" class="b_table_texbox">&nbsp;'.$employer7.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="occupation7" class="b_table_texbox">&nbsp;'.$occupation7.'</label></td>
            </tr>
        </table>
        </div>
        <hr/>
        <div style="height:800px;">
        <h2 class="detail_title">(C)EDUCATION BACKGROUND<span style="font-size:large;padding-left:10px">(from elementary school)</span></h2>
        <table style="width:100%">
           <tr style="border:1px solid gray;padding-bottom: 12px;">
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: large;font-weight: 500;">Name of Insitution</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: large;font-weight: 500;">Date From</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: large;font-weight: 500;">Date To</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: large;font-weight: 500;">Duration</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: large;font-weight: 500;">Standard/Certificate<br>Attained</th>
            </tr>
             <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="institution1" class="b_table_texbox">'.$institution1.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_from_1" class="b_table_texbox">'.$date_from_1.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_to_1" class="b_table_texbox">'.$date_to_1.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="duration1" class="b_table_texbox">'.$duration1.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="standard1" class="b_table_texbox">'.$standard1.'</label></td>
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="institution2" class="b_table_texbox">'.$institution2.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_from_2" class="b_table_texbox">'.$date_from_2.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_to_2" class="b_table_texbox">'.$date_to_2.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="duration2" class="b_table_texbox">'.$duration2.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="standard2" class="b_table_texbox">'.$standard2.'</label></td>
            </tr>
            
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="institution3" class="b_table_texbox">'.$institution3.'</label></td>
               <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_from_3" class="b_table_texbox">'.$date_from_3.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_to_3" class="b_table_texbox">'.$date_to_3.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="duration3" class="b_table_texbox">'.$duration3.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="standard3" class="b_table_texbox">'.$standard3.'</label></td>
            </tr>
            
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="institution4" class="b_table_texbox">'.$institution4.'</label></td>
               <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_from_4" class="b_table_texbox">'.$date_from_4.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_to_4" class="b_table_texbox">'.$date_to_4.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="duration4" class="b_table_texbox">'.$duration4.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="standard4" class="b_table_texbox">'.$standard4.'</label></td>
            </tr>
           
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="institution5" class="b_table_texbox">'.$institution5.'</label></td>
               <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_from_5" class="b_table_texbox">'.$date_from_5.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_to_5" class="b_table_texbox">'.$date_to_5.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="duration5" class="b_table_texbox">'.$duration5.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="standard5" class="b_table_texbox">'.$standard5.'</label></td>
            </tr>
         
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="institution6" class="b_table_texbox">'.$institution6.'</label></td>
               <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_from_6" class="b_table_texbox">'.$date_from_6.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_to_6" class="b_table_texbox">'.$date_to_6.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="duration6" class="b_table_texbox">'.$duration6.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="standard6" class="b_table_texbox">'.$standard6.'</label></td>
            </tr>
           
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="institution7" class="b_table_texbox">'.$institution7.'</label></td>
               <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_from_7" class="b_table_texbox">'.$date_from_7.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_to_7" class="b_table_texbox">'.$date_to_7.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="duration7" class="b_table_texbox">'.$duration7.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="standard7" class="b_table_texbox">'.$standard7.'</label></td>
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label name="institution8" class="b_table_texbox">'.$institution8.'</label></td>
               <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_from_8" class="b_table_texbox">'.$date_from_8.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="date_to_8" class="b_table_texbox">'.$date_to_8.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="duration8" class="b_table_texbox">'.$duration8.'</label></td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="standard8" class="b_table_texbox">'.$standard8.'</label></td>
            </tr>
        </table>
        </div>
       <hr/>
        <div style="height:800px;">
        <h2 class="detail_title">(D)LANGUAGES<span style="font-size:large;padding-left:10px">(Please indicate Slight/Fair/Fluent)</span></h2>
        <table style="width:100%">
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">&nbsp;</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Speak</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Read</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Write</th>
                
            </tr>
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="language1" class="d_table_textbox">'.$language1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="speak1" class="d_table_textbox">'.$speak1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="read1" class="d_table_textbox">'.$read1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="write1" class="d_table_textbox">'.$write1.'</td>
               
            </tr>
              <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="language2" class="d_table_textbox">'.$language2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="speak2" class="d_table_textbox">'.$speak2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="read2" class="d_table_textbox">'.$read2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="write2" class="d_table_textbox">'.$write2.'</td>
               
            </tr>
              <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="language3" class="d_table_textbox">'.$language3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="speak3" class="d_table_textbox">'.$speak3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="read3" class="d_table_textbox">'.$read3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="write3" class="d_table_textbox">'.$write3.'</td>
               
            </tr>
              <tr style="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="language4" class="d_table_textbox">'.$language4.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="speak4" class="d_table_textbox">'.$speak4.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="read4" class="d_table_textbox">'.$read4.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label name="write4" class="d_table_textbox">'.$write4.'</td>
               
            </tr>
        </table>
        </div>
        <hr/>
        <div style="height:800px;">
        <h2 class="detail_title">(E)KNOWLEDGE/SKILLS with</h2>
        <table class="b_table" style="width:100%">
        
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$cobol.'>&nbsp;&nbsp;COBOL
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$vb.'>&nbsp;&nbsp;VB</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$java_script.'>&nbsp;&nbsp;Java Script</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$intranet.'>&nbsp;&nbsp;Intranet</td>
            </tr>
             <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$asembly.'>&nbsp;&nbsp;Asembly
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$asp.'>&nbsp;&nbsp;ASP</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$uml.'>&nbsp;&nbsp;UML</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$network.'>&nbsp;&nbsp;Network & Security Management</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$perl.'>&nbsp;&nbsp;Perl
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$net.'>&nbsp;&nbsp;.Net</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$mssql.'>&nbsp;&nbsp;MS SQL</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$lan.'>&nbsp;&nbsp;LAN & WAN Technology</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$linux.'>&nbsp;&nbsp;Linux
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$csharp.'>&nbsp;&nbsp;C#</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$oracle.'>&nbsp;&nbsp;Oracle 8.0</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$protocol.'>&nbsp;&nbsp;Communication Protocol(SAM,TCP/IP,CAFIS,X25,etc)</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$unix.'>&nbsp;&nbsp;Unix
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$java.'>&nbsp;&nbsp;Java</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$oracle1.'>&nbsp;&nbsp;Oracle 9i</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$hardware.'>&nbsp;&nbsp;Hardware</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$corba.'>&nbsp;&nbsp;CORBA
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$servlet.'>&nbsp;&nbsp;Servlet</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$db2.'>&nbsp;&nbsp;DB2</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$dream.'>&nbsp;&nbsp;Dreamweaver</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$c.'>&nbsp;&nbsp;C
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$javabean.'>&nbsp;&nbsp;JavaBeans</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$websphere.'>&nbsp;&nbsp;WebSphere</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$photoshop.'>&nbsp;&nbsp;Photoshop</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$cplus.'>&nbsp;&nbsp;C++
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$jsp.'>&nbsp;&nbsp;JSP</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$access.'>&nbsp;&nbsp;Access</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$illustrator.'>&nbsp;&nbsp;Illustrator</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$vc.'>&nbsp;&nbsp;VC
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$ejb.'>&nbsp;&nbsp;EJB</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$html.'>&nbsp;&nbsp;HTML</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$oa.'>&nbsp;&nbsp;OA Tools(Excel,Word,Power Point)</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$vcplus.'>&nbsp;&nbsp;VC++
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$jdbc.'>&nbsp;&nbsp;JDBC</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$xml.'>&nbsp;&nbsp;XML</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$adobe.'>&nbsp;&nbsp;Adobe Page Maker</td>
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$vb_script.'>&nbsp;&nbsp;VB Script
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$j2se.'>&nbsp;&nbsp;J2SE</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$sgml.'>&nbsp;&nbsp;SGML</td>
                <td class="b_table" style="padding-left:10px;">
            </tr>
            <tr class="b_table">
                <td class="b_table" style="padding-left:10px;">
                    <input type="checkbox" style="padding-left:10px;" '.$vba.'>&nbsp;&nbsp;VBA
                </td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$jdk.'>&nbsp;&nbsp;JDK</td>
                <td class="b_table" style="padding-left:10px;"><input type="checkbox" style="padding-left:10px;" '.$internet.'>&nbsp;&nbsp;Internet</td>
                <td class="b_table" style="padding-left:10px;">
            </tr>

        </table>
        </div>
        <hr/>
         <div style="height:800px;">
        <h2 class="detail_title">(F)EMPLOYMENT HISTORY<span style="font-size:large;padding-left:10px">(If you have working experience)</span></h2>
        <table class="border:1px solid gray;padding-bottom: 12px;" style="width:100%">
            <tr style="border:1px solid gray;padding-bottom: 12px;">
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Name of Company<br>or Employer</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Position Held</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Date From</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Date To</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Salary</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Reason for<br>Leaving</th>
            </tr>
            <tr class="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$company1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$position1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_f1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_t1.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$salary1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$leaving1.'</td>
            </tr>
            <tr class="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$company2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$position2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_f2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_t2.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$salary2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$leaving2.'</td>
            </tr>
            <tr class="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$company3.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$position3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_f3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_t3.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$salary3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$leaving3.'</td>
            </tr>
            <tr class="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$company4.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$position4.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_f4.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_t4.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$salary4.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$leaving4.'</td>
            </tr>
            <tr class="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$company5.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$position5.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_f5.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_t5.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$salary5.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$leaving5.'</td>
            </tr>
            <tr class="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$company6.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$position6.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_f6.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_t6.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$salary6.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$leaving6.'</td>
            </tr>
            <tr class="border:1px solid gray;padding-bottom: 12px;">
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$company7.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$position7.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_f7.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$date_t7.'</td>
                 <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="f_table_textbox add_adjust">'.$salary7.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$leaving7.'</td>
            </tr>
            
        </table>
        </div>
        <div style="height:800px;">
         <hr/>
        <h2 class="detail_title">(G)REFERENCES</h2>
        <h4>List at least 2 references below.Relatives should not be included.</h4>
        <table class="border:1px solid gray;padding-bottom: 12px;" style="width:100%">
            <tr class="border:1px solid gray;padding-bottom: 12px;">
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Name</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Address</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Tel No</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Occupation</th>
                <th style="border:1px solid gray;padding-bottom: 12px;text-align:center;background-color:#dddddd;padding-top:5px;padding-bottom:5px;font-family: -webkit-pictograph;font-size: x-large;font-weight: 500;">Year Known<br> Since</th>
            </tr>
            <tr>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$res_name1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$address1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$telno1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$occupation1.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$since1.'</td>
            </tr>
            <tr>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$res_name2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$address2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$telno2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$occupation2.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$since2.'</td>
            </tr>
            <tr>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$res_name3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$address3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$telno3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$occupation3.'</td>
                <td style="border:1px solid gray;text-align:center;padding-bottom: 12px;"><label class="d_table_textbox add_adjust">'.$since3.'</td>
            </tr>
        </table>
        </div>
 <div style="height:800px;">
       <hr/>
        <h2 class="detail_title">(H)GENERAL</h2>
        <ol>
            <li>
                Have you ever suffered from any major illness? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
        <input type="checkbox" name="y_illness" value="y_illness" '.$y_illness.'> Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="n_illness" value="n_illness" '.$n_illness.'> No<br>
                If yes, please specify:<label name="y_specify" class="d_table_textbox" style="width:600px">'.$y_specify.'
            </li>
            <li>
                Have you ever been convicted of any criminal offence? &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
        <input type="checkbox" name="y_crime" value="y_crime" '.$y_crime.'> Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         <input type="checkbox" name="n_crime" value="n_crime" '.$n_crime.'> No<br>
                If yes, please specify:<label name="n_specify" class="d_table_textbox" style="width:600px">'.$n_specify.'
            </li>
        </ol>
       Remuneration Expected&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<label name="expected" class="d_table_textbox" style="width:300px">'.$expected.'
        
        <br><br>Earliest Available Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <label name="available" class="d_table_textbox" style="width:300px">'.$available.'
        <br /><br />
        <br><br>
        I hereby declare that the information given by me in this form is correct and true to the best of my knowledge.
        I understand and accept that if at any time after engagement it is found that a false declaration has been made 
        in this form, the employer has the absolute right to terminate my employment forthwith.
        <br>
        <br>
        <br>
        Signature of Applicant&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<label name="signature" class="d_table_textbox" style="width:300px">'.$signature.'
        <br><br>
        Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
        <label name="apply_date" class="d_table_textbox" style="width:300px">'.$apply_date.'
        <br>
        <br>
        <br>
        </div>');




// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

$canvas =$dompdf->get_canvas();
    $date = date("d/m/Y");
  
    $output = $dompdf->output();
    $file_to_save = 'ApplicationForm.pdf';
    file_put_contents($file_to_save, $output);

$name        = "Name goes here";
$email       = "someome@anadress.com";
$to          = "myapanyi.az@gmail.com";
$from        = "John-Smith ";
$subject     = "Here is ApplicationForm";
$mainMessage = "Hi, here's the file.";
$fileatt     = "ApplicationForm.pdf";
$fileatttype = "application/pdf";
$fileattname = "ApplicationForm.pdf";
$headers = "From: mya.pan.yi.mpy@gmail.com";
// File
$file = fopen($fileatt, 'rb');
$data = fread($file, filesize($fileatt));
fclose($file);
// This attaches the file
$semi_rand     = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
$headers      .= "\nMIME-Version: 1.0\n" .
"Content-Type: multipart/mixed;\n" .
" boundary=\"{$mime_boundary}\"";
$message = "This is a multi-part message in MIME format.\n\n" .
"-{$mime_boundary}\n" .
"Content-Type: text/plain; charset=\"iso-8859-1\n" .
"Content-Transfer-Encoding: 7bit\n\n" .
$mainMessage  . "\n\n";
$data = chunk_split(base64_encode($data));
$message .= "--{$mime_boundary}\n" .
"Content-Type: {$fileatttype};\n" .
" name=\"{$fileattname}\"\n" .
"Content-Disposition: attachment;\n" .
" filename=\"{$fileattname}\"\n" .
"Content-Transfer-Encoding: base64\n\n" .
$data . "\n\n" .
"-{$mime_boundary}-\n";
// Send the email
if(mail($to, $subject, $message, $headers)) {
    echo "The email was sent.";
}
else {
    echo "There was an error sending the mail.";
}

?>