<?php

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
define("_SDU_CURRENTVER", "Versão atual: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "Versão do Banco de Dados %s");
define("_SDU_MSG_ADD_DATA", "Dados adicionado na tabela %s");
define("_SDU_MSG_ADD_DATA_ERR", "Erro em adicionar dados na tabela %s");
define("_SDU_MSG_CHGFIELD", "Atualização no campo %s na tabela %s");
define("_SDU_MSG_CHGFIELD_ERR", "Erro de atualização no campo %s na tabela %s");
define("_SDU_MSG_CREATE_TABLE", "Tabela %s criada");
define("_SDU_MSG_CREATE_TABLE_ERR", "Erro em adicionar tabela %s");
define("_SDU_MSG_NEWFIELD", "Sucesso em adiciona o campo %s");
define("_SDU_MSG_NEWFIELD_ERR", "Erro que adiciona o campo %s");
define("_SDU_NEEDUPDATE", "Seu Banco de Dados não é atualizado. Por favor atualize sua tabela do Banco de Dados!<br><b>Nota: O SmartFactory recomenda o backup de todas as tabelas de SmartSection antes de funcionar este script de atualização.</b><br>");
define("_SDU_NOUPDATE", "Sua Banco de Dados é atualizado. Não é necessario a atualização.");
define("_SDU_UPDATE_DB", "Atualizando Banco de Dados");
define("_SDU_UPDATE_ERR", "Erro na atualização da versão %s");
define("_SDU_UPDATE_NOW", "Atualizar agora!");
define("_SDU_UPDATE_OK", "Atualização da versão realizada com sucesso p/ %s");
define("_SDU_UPDATE_TO", "Atualizando para a versão %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Atualizando Banco de Dados...");


?>
