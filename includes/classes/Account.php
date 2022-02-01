<?php
class Account{
private $errorArray;
	



public function __construct($un,$fn,$ln,$em,$em2,$pw,$pw2){
	$this->errorArray= array();
}
public function register(){
	$this->validateUsername($un);
	$this->validateFirstname($fn);
	$this->validateLastname($ln);
	$this->validateEmails($em,$em2);
	$this->validatePasswords($pw,$pw2);


}

private function validateUsername($un){
	if(strlen($un)>25|| strlen($un)<5){
		array_push($this->errorArray,"your username must be between 5 and 25 characters");
		return ;

	}
	//todo check if username exist

}
 private function validateFirstname($fn){
 	if(strlen($fn)>25|| strlen($fn)<2){
		array_push($this->errorArray,"your username must be between 2 and 25 characters");
		return ;
	}
}
   private function validateLastname($ln){
 	if(strlen($ln)>25|| strlen($ln)<2){
		array_push($this->errorArray,"your username must be between 2 and 25 characters");
		return ;

}
}
 private function validateEmails($em,$em2){
 	if($em !=$em2){
 		array_push($this->errorArray,"your email don't match");
 		return;
 	}
 	if(!filter_var($em,FILTER_VALIDATE_EMAIL)){
 		array_push($this->errorArray,"Email is invalid");
 		return;
 	}

}
 private function validatePasswords($pw,$pw2){
}
}
?>
