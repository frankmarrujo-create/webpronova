<?php
    use Dotenv\Dotenv;
class Conexion{
	public $nombre_base_datos;
	private $host;
	private $user;
        private $pass;
	public $link;
	function __construct(){
            $dotenv = Dotenv::createImmutable(__DIR__. '/../');
            $dotenv->load();
            
            $this->nombre_base_datos = $_ENV['DB_BASE'];            
            $this->host = $_ENV['DB_HOST'];
            $this->user = $_ENV['DB_USER'];
            $this->pass = $_ENV['DB_PASS'];
            
            $this->link = mysqli_connect($this->host, $this->user, $this->pass);
            mysqli_set_charset($this->link, "utf8");
	}
	public function selecciona_base_datos($nombre_base_datos=false){
		if($nombre_base_datos){
			$this->nombre_base_datos = $nombre_base_datos;
		}
		$consulta = "USE ".$this->nombre_base_datos;
		$this->link->query($consulta);
		if($this->link->error){
			return array('mensaje' => $this->link->error, 'error' => True );
		}
		else{
			return true;
		}
	}
}