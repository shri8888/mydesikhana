<html>

<body>

<?php

$sent="";







    if ($_REQUEST['name'] == "" ||  $_REQUEST['email'] == "" || $_REQUEST['message'] == "" ) {

 ?>

<script  type="text/javascript">

                                alert("ERROR: All fields are required!! Please fill the form and re-submit");

                                window.location="https://mydesikhana.herokuapp.com/";

</script>

<?php



 // echo "error: all fields are required";

		//exit();

    } 

	else {

        



$to = "shri.8888@gmail.com";

$name=$_REQUEST['name'];

$email = $_REQUEST['email'];

$message = $_REQUEST['message'];

$subject = "[My Desi Khana]Message from " . $email ; 

//$phone=$_REQUEST['phone'];

//$model=$_REQUEST['model'];

//$support=$_REQUEST['support'];

//$make=$_REQUEST['make'];

//$subject = "[Contact US Request] From:".$name. "<".$email.">";

$message = "Name: ".$name."<br /> Email: ".$email." <br />Message: " .$message;
$header = "From:" . $email."\r\n";
//$header = "From:" . $email."\r\n";

//$header = $header."From:".$email."\r\n";



   $header =$header. "MIME-Version: 1.0\r\n";
   $header = $header."Content-type: text/html\r\n";

$blocked_char = stripos($name, "www");
$blocked_char1 = stripos($name, "---");
$blocked_char2 = stripos($name, "girl");
$blocked_char3 = stripos($name, "penis");
$blocked_char4 = stripos($name, "fund");
$blocked_char5 = stripos($name, "carlson");
$blocked_char6 = stripos($name, "weaver");
$blockedname = stripos($name, "sarah");
$blocked_char8 = stripos($name, "hughes");
//$regexp = "/(https|http|ftp)\:\/\/|([a-z0-9A-Z]+\.[a-z0-9A-Z]+\.[a-zA-Z]{2,4})|([a-z0-9A-Z]+\.[a-zA-Z]{2,4})|\?([a-zA-Z0-9]+[\&\=\#a-z]+)/i"
//$reg_match = preg_match($regexp, $name);
if ($name != "Sarah Carlson" && $name != "Ann Weaver" && !$blocked_char && !$blocked_char1 && !$blocked_char2 && !$blocked_char3 && !$blocked_char4 && !$blocked_char5 && !$blocked_char6 && !$blockedname && !$blocked_char8 )
{
$sent = mail($to,$subject,$message,$header);
}
else
{
$sent = 1;
}


}

if($sent){

?>

<script  type="text/javascript">

                                alert("Contact US request is successfully submitted. We will get back to you shortly. Thank You!");

                                window.location="https://mydesikhana.herokuapp.com/";

</script>



<?php

}

else {

?>

<script  type="text/javascript">

//echo "Sorry! There was an error in submitting this form. Please try after some-time. We apolozise for any inconvinience";

alert("Sorry! There was an error in submitting this form. Please try after some-time. We apologize for any inconvinience caused");

                                window.location ="http://www.mybizmyweb.com/contact.php";

	</script>	

<?php	

} 

?>

</body>



</html>