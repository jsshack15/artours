<!DOCTYPE html>
<html>
<head> <meta charset="utf-8"> </head>
<?php
	include 'db-config.php';
    require_once ('codebird.php');
	//include 'class.smtp.php';
	//include 'class.phpmailer.php';
	
	// $mail = new PHPMailer();
	// $mail->IsSMTP();
	// $mail->CharSet = 'UTF-8';
// 
	// $mail->Host       = "mail.google.com"; // SMTP server example
	// $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
	// $mail->SMTPAuth   = true;                  // enable SMTP authentication
	// $mail->Port       = 25;                    // set the SMTP port for the GMAIL server
	// $mail->Username   = "tiehackreview@gmail.com"; // SMTP account username example
	// $mail->Password   = ".bugspot.";
	

    $cb = \Codebird\Codebird::getInstance();
    $cb->setConsumerKey('lzt2EUiD1erIjqigJi7ZwWVzQ', 'u5UN9HtBwp2LahvnGUsInCQc04vaq1s5BqWX6C6cUPur94QMMo');
    $cb->setToken('3914190079-ISMYVuhr4ftoNIt7DYelEuJWEjeSj83InO0MKNZ', 'SzofNRVJl6TGKG4epNeSx9d4IJ797ZwemWpoqIiUntz3c');
	
	
	
	//data retrieval shit starts from here...
	
	$params = array('q'=>'#Ardours');    
	$reply = (array) $cb->search_tweets($params);
	
	$data = (array) $reply['statuses'];
	
	
	$s = count($reply['statuses']);
	//print_r ($data);
	
	//returning username
	for ($a = 0; $a < $s; $a++) {
		
	    $status = $data[$a];
	    $tid= $status->user->screen_name ;
		echo $tid;
		$status_date=$status->created_at;
		$status_date= substr($status_date, 4);
		$mon=substr($status_date, 0,3);
		switch($mon){
			case 'Jan':
				$mon=1;
				break;
			case 'Feb':
				$mon=2;
				break;
			case 'Mar':
				$mon=3;
				break;
			case 'Apr':
				$mon=4;
				break;
			case 'May':
				$mon=5;
				break;
			case 'Jun':
				$mon=6;
				break;
			case 'Jul':
				$mon=7;
				break;
			case 'Aug':
				$mon=8;
				break;
			case 'Sep':
				$mon=9;
				break;
			case 'Oct':
				$mon=10;
				break;
			case 'Nov':
				$mon=11;
				break;
			case 'Dec':
				$mon=12;
				break;
			
			
		}
		$date=trim(substr($status_date,3,4));
		$time=trim(substr($status_date, 7,9));
		$time=strtr($time, array(':' => ''));
		
		$year=substr($status_date, -4);
		$tweet_date=$time.$year.$mon.$date;
		
		
		echo $tweet_date;
		
		//$current_date=date(d/m/y);
		$tweet= $status->text;
		echo $tweet;
		echo "<br>";
		// $sqlDate="SELECT created_at FROM tweets ORDER BY id DESC LIMIT 1;";
		// $daters=mysqli_query($connection, $sqlDate);
		// $resdate=mysqli_fetch_assoc($daters);
		// $db_date= $resdate['created_at'];
// 	
		// $db_time=substr($db_date,-8);
		// $db_time=strtr($db_time,array(':'=>''));
		// $db_dat=substr($db_date,0,10);
		// $db_dat=strtr($db_dat,array('-'=>''));
		// $db_date=$db_time.$db_dat;
		
		// if($tweet_date>$db_date){
// 		
// 		
		$sqlemail="SELECT `email` FROM register WHERE `tid`='$tid'";
		$rsemail=mysqli_query($connection, $sqlemail)or die('sqlsdvksn');
		$resemail=mysqli_fetch_array($rsemail);
// 		
		$useremail=$resemail['email'];
// 		
		 // $admin_email = "tiehackreview@gmail.com";
		  // $text=chop($tweet,'#TieHackReview');
		  // $subject = $text." Easy Review ";
// 		  
		  // $sqlDes="SELECT `desc` FROM reviews where `item`='$text'";
		  // $rsDes=mysqli_query($connection, $sqlDes);
		  // $resDes=mysqli_fetch_assoc($rsDes);
// 		  
// 		  
		  // $comment = $resDes['desc'];
  
  //send email
  //mail($admin_email, "$subject", $comment, "From:" . $useremail);
		
		
		//$sqltweet="INSERT INTO tweets(`tid`,`tweets`,`text`,`created_at`) VALUES ('$tid','$tweet','$text',now())";
		//$sqlrs=mysqli_query($connection, $sqltweet);
	//returning tweets
	 
		}

	//}
	require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'prashantpreetam@gmail.com';                 // SMTP username
$mail->Password = 'sofunkysocool';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('prashantpreetam@gmail.com', 'Ardours Health Service');
$mail->addAddress($useremail, 'Ardour');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@ardour.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $tweet.' Details ';
$mail->Body    = "<h1>DIABETES</h1>
	<h2>Description</h2>
	<p>
		Diabetes is a problem with your body that causes blood glucose (sugar) levels to rise higher than normal. This is also called hyperglycemia. 
		Type 2 diabetes is the most common form of diabetes.
		If you have type 2 diabetes your body does not use insulin properly. This is called insulin resistance. 
		At first, your pancreas makes extra insulin to make up for it. 
		But, over time it is not able to keep up and can't make enough insulin to keep your blood glucose at normal levels.
	</p>
	
	<h2>Prevention</h2>
	<ul>
		<li>Get more physical activity</li>
		<li>Get plenty of fibre</li>
		<li>Go for whole grains</li>
		<li>Skip fad diets and just make healthier choices</li>
		<li>Lose extra weight</li>
	</ul>

	<h2>Causes</h2>
	<p>
	The exact cause of type 1 diabetes is unknown, What is known is that your immune system — which normally fights harmful bacteria or viruses — attacks and destroys your insulin-producing cells in the pancreas. 
	In prediabetes — which can lead to type 2 diabetes — and in type 2 diabetes, your cells become resistant to the action of insulin, and your pancreas is unable to make enough insulin to overcome this resistance.
	</p>
	
	<h2>Symptoms</h2>
	<ul>
		<li>Excessive thirst.</li>
		<li>Frequent or increased urination, especially at night.</li>
		<li>Excessive hunger.</li>
		<li>Fatigue.</li>
		<li>Blurry vision.</li>
		<li>Sores or cuts that won't heal.</li>
	</ul>	

	
	<h2>Nearest Hospitals treating Diabetes:</h2>
	
	<pre>
	<b>1. Diabetes Thyroid Hormone Centre</b>
	Medical Center · 8.2 km
	Address: No. 10, Surana Bhawan, Opp Metro Pillar No. 28, Vikas Marg, Laxmi Nagar Crossing, New Delhi, Delhi 110092
	Phone:085278 03615

	<b>2. Fortis C-Doc Hospital</b>
	Hospital : 12.9 km
	Address: B-16, Chirag Enclave, Opp. Devika Towers, Nehru Place, New Delhi, Delhi 110048
	Phone:011 4910 1222
	
	<b>3. Dr RK Lalwani's Diabetes Clinic</b>
	Distance : 16.6 km
	Address: 90/58-B Ground Floor, Malviya Nagar, Delhi, 110017
	Phone:097118 53374
	
	<b>4. Delhi Diabetes Research Centre</b>
	Diabetes Center : 20 km
	Address: J-136, Rajouri Gardan Marg, Block J, Rajouri Garden, New Delhi, Delhi 110027
	Phone:011 2541 9776
	</pre>";
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
	
?>


</html>