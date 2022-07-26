<?php
class usuario
{
    private $conn, $id, $nombre, $apellidos, $email, $password, $rol, $imagen;

    public function __construct()
    {
        $this->conn = database::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $this->conn->real_escape_string($nombre);
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $this->conn->real_escape_string($apellidos);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $this->conn->real_escape_string($email);
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = password_hash($this->conn->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    public function save()
    {
        $query = "INSERT INTO usuarios values(NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', NULL)";
        $register = $this->conn->query($query);

        $result = false;
        if ($register) {
            $result = true;
       }
       return $result;
    }
}
