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
define("_SDU_CURRENTVER", "Vers�o atual: <span class='currentVer'>%s</span>");
define("_SDU_DBVER", "Vers�o do Banco de Dados %s");
define("_SDU_MSG_ADD_DATA", "Dados adicionado na tabela %s");
define("_SDU_MSG_ADD_DATA_ERR", "Erro em adicionar dados na tabela %s");
define("_SDU_MSG_CHGFIELD", "Atualiza��o no campo %s na tabela %s");
define("_SDU_MSG_CHGFIELD_ERR", "Erro de atualiza��o no campo %s na tabela %s");
define("_SDU_MSG_CREATE_TABLE", "Tabela %s criada");
define("_SDU_MSG_CREATE_TABLE_ERR", "Erro em adicionar tabela %s");
define("_SDU_MSG_NEWFIELD", "Sucesso em adiciona o campo %s");
define("_SDU_MSG_NEWFIELD_ERR", "Erro que adiciona o campo %s");
define("_SDU_NEEDUPDATE", "Seu Banco de Dados n�o � atualizado. Por favor atualize sua tabela do Banco de Dados!<br><b>Nota: O SmartFactory recomenda o backup de todas as tabelas de SmartSection antes de funcionar este script de atualiza��o.</b><br>");
define("_SDU_NOUPDATE", "Sua Banco de Dados � atualizado. N�o � necessario a atualiza��o.");
define("_SDU_UPDATE_DB", "Atualizando Banco de Dados");
define("_SDU_UPDATE_ERR", "Erro na atualiza��o da vers�o %s");
define("_SDU_UPDATE_NOW", "Atualizar agora!");
define("_SDU_UPDATE_OK", "Atualiza��o da vers�o realizada com sucesso p/ %s");
define("_SDU_UPDATE_TO", "Atualizando para a vers�o %s");
define("_SDU_UPDATE_UPDATING_DATABASE", "Atualizando Banco de Dados...");


?>
