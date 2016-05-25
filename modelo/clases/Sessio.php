<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sessio
 *
 * @author Yaiza
 */
class Sessio 
{

//Constructor
//Funcionalitat:inici de sessió session_start()
    function __construct() 
    {
        session_start();
    }

//Funció que destrueix una sessió o sessions creades en un script
    function destruirSessio() 
    {
        return session_destroy();
    }

//Funció que afegeixi un contingut a un index determinat de $_SESSION.
//Tant l'index com el contingut s'han de passar com a paràmetres.
    function afegirContingutSessio($index, $contingut) 
    {
        $_SESSION[$index] = $contingut;
    }

//Funció que afegeixi un contingut al final d'un vector contingut d'un index 
//determinat de $_SESSION. Tant l'index com el contingut s'han de passar com a 
//paràmetres.
    function afegirContingutVectorSessio($index, $contingut) 
    {
        $_SESSION[$index][] = $contingut;
    }

//Funció que retorna el contingut de $_SESSION per l'index passat com a paràmetre. 
//Si no hi ha missatge guardat retorna null.
    function llegirContingutSessio($index) 
    {
        if ($_SESSION[$index]) 
        {
            return $_SESSION[$index];
        } 
        else 
        {
            return null;
        }
    }

//Funció per destruir una sessió, buidar la variable $_SESSION.
    function tancarSessio() 
    {
        $this->destruirSessio();
        unset($_SESSION);
    }

//Funció que inicia sessió amb un temps d'expiració de 15 minuts.
//Un cop finalitzada la sessió, ens retorna a index.php.
//Modifiqueu l'script perquè quan retorni a index.php, es mostri en index.php el
//missatge "La sessió ha caducat"
//El retorn l'he de fer mitjançant el mètode crearLocation de la classe Location
    function iniciarSessio() 
    {
        $inactiu = 60; //15 minuts en segons

        if ($this->llegirContingutSessio("temps") != null) 
        { //Si existeix l'index "temps"...
            $vidaSessio = time() - $this->llegirContingutSessio("temps");
            if ($vidaSessio > $inactiu) 
            {
                $this->destruirSessio();
                //Afegim missatge a sessió
                $this->afegirContingutSessio("missatge", "La sessió ha caducat");
                header("location:../vista/inici.php");
            }
        }

        $this->afegirContingutSessio("temps", time());
    }
    
    function mostrarContingut()
    {
        print_r($_SESSION);
    }
}

?>