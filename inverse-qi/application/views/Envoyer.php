<?php
//$db = new PDO('mysql:host=localhost;dbname=base_inverse_qi','root','');

if ( isset($_POST["question"]) && !empty($_POST["question"]) ){

	$canvas0 = str_replace('data:image/png;base64,', '', $_POST['canvas0']);
	$canvas0 = str_replace(' ', '+', $canvas0);
	$canvas0 = base64_decode($canvas0);

	$canvas1 = str_replace('data:image/png;base64,', '', $_POST['canvas1']);
	$canvas1 = str_replace(' ', '+', $canvas1);
	$canvas1 = base64_decode($canvas1);

	$canvas2 = str_replace('data:image/png;base64,', '', $_POST['canvas2']);
	$canvas2 = str_replace(' ', '+', $canvas2);
	$canvas2 = base64_decode($canvas2);

	$canvas3 = str_replace('data:image/png;base64,', '', $_POST['canvas3']);
	$canvas3 = str_replace(' ', '+', $canvas3);
	$canvas3 = base64_decode($canvas3);

	$canvas4 = str_replace('data:image/png;base64,', '', $_POST['canvas4']);
	$canvas4 = str_replace(' ', '+', $canvas4);
	$canvas4 = base64_decode($canvas4);

	$canvas5 = str_replace('data:image/png;base64,', '', $_POST['canvas5']);
	$canvas5 = str_replace(' ', '+', $canvas5);
	$canvas5 = base64_decode($canvas5);

	$canvas6 = str_replace('data:image/png;base64,', '', $_POST['canvas6']);
	$canvas6 = str_replace(' ', '+', $canvas6);
	$canvas6 = base64_decode($canvas6);

	$canvas7 = str_replace('data:image/png;base64,', '', $_POST['canvas7']);
	$canvas7 = str_replace(' ', '+', $canvas7);
	$canvas7 = base64_decode($canvas7);

	$canvas8 = str_replace('data:image/png;base64,', '', $_POST['canvas8']);
	$canvas8 = str_replace(' ', '+', $canvas8);
	$canvas8 = base64_decode($canvas8);

	$canvas9 = str_replace('data:image/png;base64,', '', $_POST['canvas9']);
	$canvas9 = str_replace(' ', '+', $canvas9);
	$canvas9 = base64_decode($canvas9);

	$canvas10 = str_replace('data:image/png;base64,', '', $_POST['canvas10']);
	$canvas10 = str_replace(' ', '+', $canvas10);
	$canvas10 = base64_decode($canvas10);

	$canvas11 = str_replace('data:image/png;base64,', '', $_POST['gicanvas11']);
	$canvas11 = str_replace(' ', '+', $canvas11);
	$canvas11 = base64_decode($canvas11);

	$canvas12 = str_replace('data:image/png;base64,', '', $_POST['canvas12']);
	$canvas12 = str_replace(' ', '+', $canvas12);
	$canvas12 = base64_decode($canvas12);

	$canvas13 = str_replace('data:image/png;base64,', '', $_POST['canvas13']);
	$canvas13 = str_replace(' ', '+', $canvas13);
	$canvas13 = base64_decode($canvas13);

	$canvas14 = str_replace('data:image/png;base64,', '', $_POST['canvas14']);
	$canvas14 = str_replace(' ', '+', $canvas14);
	$canvas14 = base64_decode($canvas14);

	$canvas15 = str_replace('data:image/png;base64,', '', $_POST['canvas15']);
	$canvas15 = str_replace(' ', '+', $canvas15);
	$canvas15 = base64_decode($canvas15);

	$question = $_POST['question'];
	$ident = $_POST['ident'];

	$DIR_REP=mkdir("./Image/$ident", 0700);

	// Requires php5
//define('UPLOAD_DIR', 'images/');

//$file = UPLOAD_DIR . uniqid() . '.png';
	$fille="id.png";
	$name = array("canvas0.png", "canvas1.png", "canvas2.png", "canvas3.png", "canvas4.png", "canvas5.png","canvas6.png", "canvas7.png", "canvas8.png", "canvas9.png", "canvas10.png", "canvas11.png", "canvas12.png", "canvas13.png", "canvas14.png", "canvas15.png", );

	file_put_contents('./Image/'.$ident.'/'.$name[0], $canvas0);
	file_put_contents('./Image/'.$ident.'/'.$name[1], $canvas1);
	file_put_contents('./Image/'.$ident.'/'.$name[2], $canvas2);
	file_put_contents('./Image/'.$ident.'/'.$name[3], $canvas3);
	file_put_contents('./Image/'.$ident.'/'.$name[4], $canvas4);
	file_put_contents('./Image/'.$ident.'/'.$name[5], $canvas5);
	file_put_contents('./Image/'.$ident.'/'.$name[6], $canvas6);
	file_put_contents('./Image/'.$ident.'/'.$name[7], $canvas7);
	file_put_contents('./Image/'.$ident.'/'.$name[8], $canvas8);
	file_put_contents('./Image/'.$ident.'/'.$name[9], $canvas9);
	file_put_contents('./Image/'.$ident.'/'.$name[10], $canvas10);
	file_put_contents('./Image/'.$ident.'/'.$name[11], $canvas11);
	file_put_contents('./Image/'.$ident.'/'.$name[12], $canvas12);
	file_put_contents('./Image/'.$ident.'/'.$name[13], $canvas13);
	file_put_contents('./Image/'.$ident.'/'.$name[14], $canvas14);
	//print $success ? $name[0] : 'Unable to save the file.';

}






// $db->exec("INSERT INTO images_question(idImages,Image,nom) VALUES('','$fileData','$fileName')");

?>
