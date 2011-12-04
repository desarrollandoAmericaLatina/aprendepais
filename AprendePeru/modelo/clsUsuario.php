<?php

    require_once("clsConexion.php");
    
    class Usuario{
        
        private $cnx;
        
        public $id;
        public $nombre;
        public $usuario;
        public $clave;
        public $tipo;
        public $email;
        
        public function __construct(){
            global $cad;
            global $usuario;
            global $clave;
            $this->cnx = new PDO($cad,$usuario,$clave);
        }
        
        public function Login(){
            $sql = "SELECT * FROM usuario WHERE usuario_user = '" . $this->usuario . "' AND usuario_pass  = '" . $this->clave ."'";
            $query = $this->cnx->query($sql);
            if($query->rowCount()>0){
                $r = $query->fetchObject();
                $_SESSION['login'] = true;
                $_SESSION['nombre'] = $r->usuario_nombres;
                $_SESSION['usuario'] = $r->usuario_user;
                $_SESSION['idUsuario'] = $r->usuario_id;
                $_SESSION['tipousuario'] = $r->tipousuario_id;
                return true;
            }else{
                return false; 
            }
        }
        
        public function Registrar(){
            $sw = true;
            $sql = "INSERT INTO usuario(usuario_nombres,usuario_user,usuario_pass,tipousuario_id,usuario_email) VALUES( '".$this->nombre."','".$this->usuario."','".md5($this->clave)."',".$this->tipo.".'".$this->email."')";
            $this->cnx->query($sql) or $sw = false;
            return $sw;
        }
        
        public function Consultar(){
            $sql = "SELECT * FROM usuario";
            return $this->cnx->query($sql);
        }
        
        public function Eliminar(){
            $sw = false;
            $sql = "DELETE FROM usuario WHERE id = " . $this->id;
            $this->cnx->query($sql) or $sw = false;
            return $sw;
        }
        
        public function Actualizar(){
            $sw = true;
            $sql = "UPDATE  usuario SET (nombres = '".$this->nombre."',user = '".$this->usuario."',pass = '".md5($this->clave)."',tipo = ".$this->tipo.") ";
            $this->cnx->query($sql) or $sw = false;
            return $sw;
        }
    }
    
?>