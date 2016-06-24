<?php

	include_once 'controlador/conexion.php';
	include_once 'functions.php';

	class Mventa extends Funciones
	{
		public function __construct(){}
		
        /*
		 *función para el ingreso de los datos de la tabla
		 */
		function insertar_venta($fechasalida, $idvendedor, $idcomprador, $total)
		{
			$sql = "INSERT INTO tbventa (idfechasalida, idvendedor, idcomprador, total)
						VALUES ('".$fechasalida."','".$idvendedor."','".$idcomprador."','".$total."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla
		 */
		function  actualizar_venta($idventa, $fechasalida, $idvendedor, $idcomprador,$total)
		{
			$sql = "UPDATE tbventa SET idfechasalida = '".$fechasalida."',idvendedor = '".$idvendedor."',idcomprador = '".$idcomprador."',total = '".$total."' WHERE idventa = '".$idventa."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla
		 */
		/*function eliminar_venta($idventa)
		{
			$sql = "DELETE FROM `tbventa` WHERE `idventa` = '$idventa'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla
		 */
		function consultar_venta()
		{
			$sql = "SELECT * FROM tbventa ORDER BY idventa DESC LIMIT 1";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbventa	
         */
		function consultar_venta_id($idventa)
		{
			$sql = "SELECT * FROM tbventa WHERE idventa = '$idventa' ";
			return $this -> SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion de la tabla fechasalida
		 */
		function sel_fechasalida()        
		{
            $sql = "SELECT * FROM `tbfechasalida`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla fechasalida
		 */
		function sel_fechasalida1($idfechasalida)
		{
			$sql = "SELECT * FROM tbfechasalida WHERE idfechasalida='".$idfechasalida."';";
			return $this->SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion de la tabla idcomprador
		 */
		function sel_idcomprador()        
		{
            $sql = "SELECT * FROM `tbidcomprador`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla idcomprador
		 */
		function sel_idcomprador1($idcomprador)
		{
			$sql = "SELECT * FROM tbidcomprador WHERE idcomprador='".$idcomprador."';";
			return $this->SeleccionDatos($sql);
		}

	}