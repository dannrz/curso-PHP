<?php
require_once 'modeloBase.php';
class Nota extends ModeloBase
{
    private $userId, $content, $title;

    public function __construct()
    {
        parent::__construct();
    }

    public function getUserId()
    {
        return $this->userId;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function saveNote()
    {
        $sql = "INSERT INTO notas (usuario_id,titulo,descripcion,fecha) VALUES (?,?,?,now())";
        $save = $this->db->prepare($sql);
        $save->bind_param("sss", $this->userId, $this->title, $this->content);
        $save->execute();

        return $save;
    }
}
