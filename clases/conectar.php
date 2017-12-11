<?php
	//crear la clase conectar
	class conectar
	{
		private $cn;//declarar variable ambito privado
		//funcion publica conectar
		public function conectar(){
			//utilizar la clase msqli p' conectarnos
			$this->cn=new mysqli('us-cdbr-iron-east-05.cleardb.net','ba78fed948b3f9','4bf7c3d3','heroku_bed8d7e563b7b30');
			//retornamos (devolver) la conexion
        	return $this->cn;
		}
		//funcion para controlar caracteres espciales
		public function setNames(){
			return $this->cn->query("SET NAMES 'utf8'");
		}
	}
 ?>
