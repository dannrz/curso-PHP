<?php 
interface Ordernador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}


class iMac implements Ordernador{
    private $modelo;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function encender(){
        return 'Lo que sea';
    }
    public function apagar(){
        return 'Lo que sea';
    }
    public function reiniciar(){
        return 'Lo que sea';
    }
    public function desfragmentar(){
        return 'Lo que sea';
    }
    public function detectarUSB(){
        return 'Lo que sea';
    }
}


$mac = new iMac();
$mac->setModelo('Macbook Pro');
echo $mac->getModelo();

?>