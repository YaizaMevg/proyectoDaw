<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Yaiza
 */
class Usuario 
{
    private $usuario;
    private $contrasena;
    

    function getUsuario() 
    {
        return $this->usuario;
    }

    function getContrasena() 
    {
        return $this->contrasena;
    }

    function setUsuario($usuario) 
    {
        $this->usuario = $usuario;
    }

    function setContrasena($contrasena) 
    {
        $this->contrasena = $contrasena;
    }
    
    static public function login($usuario, $contrasena)
    {
            $user = new Usuario($usuario, $contrasena);
            $_SESSION['usuario'] = $usuario;
    }

    static public function salir()
    {
            $_SESSION['usuario'] = "";
    }
    function compruebaUsuario($taula, $connexio, $nomUsuari, $contrasenya) 
    {
          // $connexio = new BaseDades("localhost","root", "", "penjat");
        $consulta = $connexio ->consultar("select email, contrasena from $taula");
        $cont = 0;
        while ($vectorRegistres = $connexio ->obtenirRegistres($consulta))
        {
           $nomUsu = $vectorRegistres["email"];
           $contra = $vectorRegistres["contrasena"];

            if (($nomUsu == $nomUsuari) && ($contra == $contrasenya))
            {
                $cont++;
            }
            else if (($nomUsu == $nomUsuari) && ($contrasenya == null))
            {
                $cont++;
            }
        }

        if ($cont!=0)
        {
           return true;
        }
        else
        {
           return false;
        } 

    }
}



?>