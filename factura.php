<?php 
require_once('conexion.php');
function insertar($id,$docu,$serial,$cant,$precio,$nombre,$fecha){
	
		
		$base=new conexion();
		$base->constructor("localhost","root","123456", "ejercicio");
		$base->conectar();
		$base->insertar ($id,$docu,$serial,$cant,$precio,$nombre,$fecha);
		}
		
function inventario(){
	
		
		$id=$_POST["id"];
		$docu=$_POST["docu"];
		$serial=$_POST["serial"];
		$cant=$_POST["cant"];
		$precio=$_POST["pre"];
		$nombre=$_POST["nom"];
		$fecha=$_POST["fecha"];
		
	insertar ($id,$docu,$serial,$cant,$precio,$nombre,$fecha);
		}
	
	inventario();
	
?>
	
	





