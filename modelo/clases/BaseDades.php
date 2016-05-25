<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseDades
 *
 * @author Yaiza
 */
class BaseDades 
{
    private $connexio; //Atribut que definira la connexió a una base de dades

    //Constructor de la connexió
    function __construct($servidor, $usuari, $contrasenya, $baseDades) 
    {
        //Realitzem connexió
        $this->connexio = new mysqli($servidor, $usuari, $contrasenya, $baseDades);

        //Si la connexió no s'ha creat
        if ($this->connexio->connect_errno) 
        {
            //Imprimim un missatge amb l'últim error produit per la connexió
            echo "Connexió fallida: " . $connexio->connect_error;
            exit();
        }
    }

    //Cerramos la conexión
    function tancarConnexio() 
    {
        $this->connexio->close();
    }
    
    //Liberamos memoria
    function alliberarMemoria($consulta)
    {
        $consulta->free();
    }

    //retornem una consulta a la base de dades
    function consultar($sentenciSql) 
    {
        return $this->connexio->query($sentenciSql);
    }

    //Obtenir registres d'una consulta
    function obtenirRegistres($consulta) 
    {
        return $consulta->fetch_array(MYSQLI_ASSOC);
    }
}

?>