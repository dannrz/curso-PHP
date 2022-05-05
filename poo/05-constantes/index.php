<?php 
class Usuario {
    const URL_COMPLETA = "192.168.68.19";
    public $email, $password;

    public function getEmail (){
        return $this->email;
    }
    public function setEmail ($email){
        $this->email = $email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setPassword($password){
        $this->password = $password;
    }
}

echo Usuario::URL_COMPLETA;
$user = new Usuario;
echo $user::URL_COMPLETA;
var_dump($user);

?>