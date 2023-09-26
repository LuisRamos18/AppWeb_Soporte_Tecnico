<?php 

  class Conexion
 {
     
     public static function conectar()
     {
         
         try{
            $host='localhost';
            $dname='soporte';
            $user='root';
            $password='';
             /*conecta a la base de datos */
             $conex=new PDO("mysql:host=$host; dbname=$dname","$user","$password");
             $conex->exec("set names utf8");
             return $conex;
             

         }catch(PDOException $e){
             /*devuelve el error si no se conecta en la base de datos */
             die($e->getMessage());

         }
     }    
 }
 ?>