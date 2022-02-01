<?php
function sanitizeForUsername($inputText){
	$inputText=strip_tags($inputText);
	$inputText=str_replace(" ","",$inputText);
	return $inputText;
}

function sanitizeForPassword($inputText){
	$inputText=strip_tags($inputText);
	return $inputText;
}

function sanitizeForString($inputText){
	$inputText=strip_tags($inputText);
	$inputText=str_replace(" ","",$inputText);
	$inputText=ucfirst(strtolower($inputText));
	return $inputText;
}





if(isset($_POST['registerButton'])){
	//echo "REGISTER BUTTON IS PRESSED";
	$username=sanitizeForUsername($_POST['username']);
	$firstname=sanitizeForString($_POST['firstName']);
	$lastname=sanitizeForString($_POST['lastName']);
	$email=sanitizeForString($_POST['email']);
	$email2=sanitizeForString($_POST['email2']);
	$password=sanitizeForPassword($_POST['password']);
	$password2=sanitizeForPassword($_POST['password2']);

	
	



}


?>