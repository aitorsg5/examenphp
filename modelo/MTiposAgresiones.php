<?php
namespace Modelo;

require_once 'Conexion.php';

class MtipoAgresiones extends Conexion {


    public function eliminarTips($idtipos) {
        $sentencia = $this->getCon()->prepare("DELETE FROM tipos_agresiones WHERE id = ?");
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $sentencia->close();
    }
    public function getTipoAgresiones() {
        $query = $this->getCon()->query("SELECT * FROM tipos_agresiones");
    
        $tipos = [];
        
        while ($fila = $query->fetch_assoc()) {
            $tipos[] = $fila;
        }
    
        return $tipos;
    }
    
    public function insertTipos($tiposnuevos) {
        $sentencia = $this->getCon()->prepare("INSERT nombre = ?,recursos = ?,observaciones FROM tipos_agresiones");
        $sentencia->bind_param("s", [$tiposnuevos = "nombre" ],);
        $sentencia->execute();
        $sentencia->close();
    }

    public function updateTipos($tiposmodiifcados) {
        $sentencia = $this->getCon()->prepare("UPDATE nombre = ?,recursos = ?,observaciones FROM tipos_agresiones WHERE id= ?");
        $sentencia->bind_param("s", [$tiposnuevos = "nombre" ],);
        $sentencia->execute();
        $sentencia->close();
    }

    public function gettipo($tipos){
       
        $sentencia = $this->getCon()->prepare("SELECT * FROM tipos_agresiones WHERE id = ?");
        $sentencia->bind_param("i", $tipos);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        if ($fila = $resultado->fetch_assoc()) {
            return $fila;
        }
        $sentencia->close();
       
    }
  


}
