<?php

class Validador{

    private $cantidadLetrasMinimas = 5;

    public function estaVacio($campo){
        return $campo == "";
    }

    public function tieneFormatoEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function cantidadMinimaLetras($campo){
        return strlen($campo) < $this->cantidadLetrasMinimas;
    }

    public function getCantidadLetrasMinimas(){
        return $this->cantidadLetrasMinimas;
    }

    public function contraseniasIguales($pass1,$pass2){
        return $pass1 == $pass2;
    }

    public function full_name($nombre){
        if($this->estaVacio($nombre)){
            return "El nombre es obligatorio.";
        }else if($this->cantidadMinimaLetras($nombre)){
            return "El nombre debe tener al menos 3 caracteres.";
        }
        return "#";
    }

    public function email($email){
        if($this->estaVacio($email)){
            return "El email es obligatorio.";
        }else if(!$this->tieneFormatoEmail($email)){
            return "El email no es válido.";
        }   
        return "#"; 
    }

    public function contrasenias($pass1,$pass2){

        if($this->estaVacio($pass1)){
            return "La contraseña es obligatoria.";
        }else if($this->cantidadMinimaLetras($pass1)){
            return "La cantidad minima de letras es de ".$this->cantidadLetrasMinimas;
        }else if(!$this->contraseniasIguales($pass1,$pass2)){
            return "Las contraseñas deben ser iguales.";
        }
        return "#";
    }

    public function login($email,$pass){
        if($this->estaVacio($email) || $this->estaVacio($pass)){
            return "Los campos son obligatorios.";
        }else if(!$this->tieneFormatoEmail($email)){
            return "El email es inválido.";
        }
        return "";
    }
}