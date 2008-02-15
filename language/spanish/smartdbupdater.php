<?php
//Traducción inicial por w4z004; actualización para posteriores versiones del módulo por Riosoft
/**
* $Id: smartdbupdater.php,v 1.1 2006/09/03 12:27:15 malanciault Exp $
* Module: SmartContent
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}

define("_SDU_IMPORT", "Importar");
define("_SDU_CURRENTVER", "Versión Actual: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "Versión de la Base de Datos %s");
define("_SDU_MSG_ADD_DATA", "Datos añadidos a la tabla %s");
define("_SDU_MSG_ADD_DATA_ERR", "Error añadiendo datos a la tabla %s");
define("_SDU_MSG_CHGFIELD", "Modificando campo %s en la tabla %s");
define("_SDU_MSG_CHGFIELD_ERR", "Error cambiando campo %s en la tabla %s");
define("_SDU_MSG_CREATE_TABLE", "Tabla %s creada");
define("_SDU_MSG_CREATE_TABLE_ERR", "Error creando la tabla %s");
define("_SDU_MSG_NEWFIELD", "Campo %s correctamente añadido");
define("_SDU_MSG_NEWFIELD_ERR", "Error al añadir el campo %s");
define("_SDU_NEEDUPDATE", "Base de datos obsoleta. por favor, actualize las tablas de la misma.<br><b>Nota : Recomendamos fervientemente que haga copia de seguridad de todas las tablas del módulo antes de aplicar esta actualización.</b><br>");
define("_SDU_NOUPDATE", "Su base de datos está actualizada. No necesita actualizarla.");
define("_SDU_UPDATE_DB", "Actualizando la Base de Datos");
define("_SDU_UPDATE_ERR", "Errores actualizando a la versión %s");
define("_SDU_UPDATE_NOW", "¡Actualizar Ahora!");
define("_SDU_UPDATE_OK", "Actualizada correctamente a la versión %s");
define("_SDU_UPDATE_TO", "Actualizando a la versión %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Actualizando la base de datos...");


?>