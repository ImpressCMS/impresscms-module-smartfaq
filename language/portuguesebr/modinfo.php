<?php

/**
* $Id$
* Module: SmartFAQ
* Translat: desus <desus@xoopscafe.org>
* Licence: GNU
*/

// Informa��es do Modulo
// O nome deste Modulo
global $xoopsModule;
define("_MI_SF_MD_NAME", "SmartFAQ");

//Uma breve descri��o deste m�dulo 
define("_MI_SF_MD_DESC", "Um �timo sistema de FAQ, que permite total administra��o de conteudos, tutoriais, manuais, ou o que sua imagina��o permitir ");
 
//Card�pios de substituto em bloco de card�pio principal 
define("_MI_SF_SUB_SMNAME1", "Criar Quest�o");
define("_MI_SF_SUB_SMNAME2", "Perguntar");
define("_MI_SF_SUB_SMNAME3", "D�vidas");
define("_MI_SF_SUB_SMNAME4", "Moderar");
 
//Op��es de Configura��o 
define("_MI_SF_ALLOWSUBMIT", "Envio de Usu�rios:");
define("_MI_SF_ALLOWSUBMITDSC", "Permitir que usu�rios enviem Quest�es ao site?");
 
define("_MI_SF_ALLOWREQUEST", "Sugest�es de Usu�rio:");
define("_MI_SF_ALLOWREQUESTDSC", "Permitir usu�rio fazer sugest�es?");
 
define("_MI_SF_ANONPOST", "Permitir envio an�nimo");
define("_MI_SF_ANONPOSTDSC", "Permitir quest�es de usu�rios an�nimos.");
 
define("_MI_SF_DATEFORMAT", "Formato da Data:");
define("_MI_SF_DATEFORMATDSC", "Usar o estilo de exibi��o do arquivo language/english/global.php para selecionar um .<br/>Exemplo: d-M-Y H:i <br/> Para ver: 04-Setembro-2004 21:35");
 
define("_MI_SF_DISPLAYTYPE", " Modo de exibi��o da Quest�o:");
define("_MI_SF_DISPLAYTYPEDSC", "Visualizar sum�rio selecionado, ser�o exibidos somente pergunta, Data e cliques de cada Quest�o do assunto selecionado. Visualiza��o total mostra dos completamente o assunto escolhido.");
define("_MI_SF_DISPLAYTYPE_SUMMARY", " Visualizar Sum�rio");
define("_MI_SF_DISPLAYTYPE_FULL", "Ver Todos");
 
define("_MI_SF_ORDERBYDATE", "Organizar por data:");
define("_MI_SF_ORDERBYDATEDSC", "Se voc� marcar a op��o como Sim", "As Quest�es ser�o organizados por data descendente.");
 
define("_MI_SF_USEIMAGENAVPAGE", "Navegar com imagens:");
define("_MI_SF_USEIMAGENAVPAGEDSC", "Marque Sim, para a p�gina de navega��o ser exibida com imagem."); 

define("_MI_SF_ALLOWCOMMENTS", "Coment�rios das Quest�es por importancia:");
define("_MI_SF_ALLOWCOMMENTSDSC", "Marque Sim, para exibir coment�rios das quest�es que foram previamente marcados na pr�pria quest�o.<br/> N�o, excluir� os coment�rios da exibi��o.");
 
define("_MI_SF_ALLOWADMINHITS", "Contar leituras do Administrador:");
define("_MI_SF_ALLOWADMINHITSDSC", "Permitir que os cliques do administrados sejam contabilizados?");
 
define("_MI_SF_AUTOAPPROVE_SUB_FAQ", "Auto-aprovar quest�o enviada:");
define("_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC", "Auto aprovar Quest�o enviado sem interven��o do admin.");
 
define("_MI_SF_AUTOAPPROVE_REQUEST", "Auto-aprovar quest�es pedidas:");
define("_MI_SF_AUTOAPPROVE_REQUEST_DSC", "Auto-aprovar pedido de Quest�es sem interven��o do admin.");
 
define("_MI_SF_AUTOAPPROVE_ANS", "Auto-aprovar respostas:");
define("_MI_SF_AUTOAPPROVE_ANS_DSC", "Auto-aprovar respostas enviadas para as d�vidas.");
 
define("_MI_SF_AUTOAPPROVE_ANS_NEW", "Auto-aprovar respostas:");
define("_MI_SF_AUTOAPPROVE_ANS_NEW_DSC", "Auto-aprovar respostas enviadas para Quest�es.");
 
define("_MI_SF_LASTFAQSPERCAT", "M�ximo de quest�es por assunto :");
define("_MI_SF_LASTFAQSPERCATDSC", "N�mero m�ximo de Quest�o ser exibido na coluna de Info de um assunto.");
 
define("_MI_SF_CATPERPAGE", "M�ximo de assuntos por p�gina (Usu�rio):");
define("_MI_SF_CATPERPAGEDSC", "N�mero m�ximo de assuntos exibidos por p�gina.");
 
define("_MI_SF_PERPAGE", "M�ximo de Quest�o por p�gina (Administrador):");
define("_MI_SF_PERPAGEDSC", "N�mero m�ximo de Quest�o exibidas por p�gina no Admin de Quest�es.");
 
define("_MI_SF_PERPAGEINDEX", "M�ximo de quest�es por p�gina (Usu�rio):");
define("_MI_SF_PERPAGEINDEXDSC", "N�mero m�ximo de Quest�o ser exibido por p�gina em usu�rio.");
 
define("_MI_SF_INDEXWELCOMEMSG", "Mensagem de boas vindas:");
define("_MI_SF_INDEXWELCOMEMSGDSC", "Mensagem de Boas-vinda exibida na p�gina do m�dulo.");
define("_MI_SF_INDEXWELCOMEMSGDEF", "Aqui est�o as D�vias Freq�entemente dos usu�rios<b>Coomo se faz...</b> e <b>Voc� sabia...</b>. Envie seu coment�rio em qualquer Quest�o.");
 
define("_MI_SF_REQUESTINTROMSG", "Mensagem de Introdu��o do Pedido:");
define("_MI_SF_REQUESTINTROMSGDSC", "Mensagem de introdu��o exibida na p�gina de envio de Quest�es.");
define('_MI_SF_REQUESTINTROMSGDEF', "Caso n�o tenha achado a resposta da pergunta, preencha o formulario abaixo, descrevendo sua d�vida. O moderador revisar� seu pedido antes de publica-lo na Se��o de D�vidas para que algu�m responda!"); 
 
define("_MI_SF_OPENINTROMSG", "Introdu��o da se��o de perguntas:");
define("_MI_SF_OPENINTROMSGDSC", "Mensagem de Introdu��o que ser� exibida na se��o de Perguntas do m�dulo.");
define("_MI_SF_OPENINTROMSGDEF", "Est� � a lista de d�vidas de usu�rios que esperam uma resposta. Clique na pergunta se quiser responde-la.");
 
define("_MI_SF_USEREALNAME", "Mostrar nome real dos usu�rios");
define("_MI_SF_USEREALNAMEDSC", "Mostrar o real nome do usu�rio se ele registrou algum.");
 
define("_MI_SF_HELP_PATH_SELECT", "Caminho do arquivo de ajuda do SmartFAQ arquiva");
define("_MI_SF_HELP_PATH_SELECT_DSC", "Selecione o caminho de acesso os arquivos de ajuda de SmartFAQ. Se voc� enviou tamb�m o pacote de Ajuda do SmartFAQ em modules/smartfaq/doc /,voc� pode selecionar ' Dentro do module'. Alternativamente, voc� pode ter acesso o arquivo de ajuda do m�dulo diretamente de docs.xoops.org atrav�s de chosing isto no seletor. Voc� tamb�m pode selecionar o caminho do arquivo de ajuda da op��o de config caminho do arquivo de ajuda de SmartFAQ");
 
define("_MI_SF_HELP_PATH_CUSTOM", "Localiza��o dos arqivos de ajuda de SmartFAQ");
define("_MI_SF_HELP_PATH_CUSTOM_DSC", "S um Caminho do arquivo de ajuda de SmartFAQ, coloque o endere�o URL do arquivo de ajuda de SmartFAQ. Ex: http://www.yoursite.com/doc");
 
define("_MI_SF_HELP_INSIDE", "Dentro do m�dulo");
define("_MI_SF_HELP_CUSTOM", " Caminho da Costume");
 
//define("_MI_SF_MODERATORSEDIT", "Permitir aos moderadores editar (Aumente os moderadores)");
// define("_MI_SF_MODERATORSEDITDSC", "Esta op��o permitir� aos moderadoras editar perguntas e Quest�o dentro dos assuntos nos quais eles s�o respons�veis. Caso contr�rio, os moderadores s� podem aprovar ou rejeitar perguntas e Quest�es.");
 
//Nomes de artigos de card�pio de admin 
define("_MI_SF_ADMENU1", "Principal");
define("_MI_SF_ADMENU2", "Assunto");
define("_MI_SF_ADMENU3", "Quest�o");
define("_MI_SF_ADMENU4", "Perguntas");
define("_MI_SF_ADMENU5", "Permiss�es");
define("_MI_SF_ADMENU6", "Blocos e Grupos");
define("_MI_SF_ADMENU7", "Ver na p�gina");
 
//Names de Blocos e Bloco informa��o 
define("_MI_SF_ARTSNEW", "Lista das Quest�es Recentes");
define("_MI_SF_ARTSRANDOM_DIDUNO", "Voc� sabia?");
define("_MI_SF_ARTSRANDOM_FAQ", "Pergunta Fortuita!");
define("_MI_SF_ARTSRANDOM_HOW", "Como fa�o para...");
define("_MI_SF_ARTSCONTEXT", "Contexto da Quest�o");
define("_MI_SF_RECENTFAQS", "Quest�o Recente (Detalhe)");
define("_MI_SF_RECENT_QUESTIONS", "Quest�es Recentes");
 
//Texto para notifica��es 
 
define("_MI_SF_GLOBAL_FAQ_NOTIFY", "Quest�es Globais");
define("_MI_SF_GLOBAL_FAQ_NOTIFY_DSC", "Op��es de notifica��o de todas os Quest�es.");
 
define("_MI_SF_CATEGORY_FAQ_NOTIFY", "Assunto da Quest�o");
define("_MI_SF_CATEGORY_FAQ_NOTIFY_DSC", "Op��es de notifica��o do Assunto atual.");
 
define("_MI_SF_FAQ_NOTIFY", "Quest�o");
define("_MI_SF_FAQ_NOTIFY_DSC", "Op��es de notifica��o desta Quest�o.");                  
 
define("_MI_SF_GLOBAL_QUESTION_NOTIFY", "Perguntas Globais");
define("_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC", "Op��es de notifica��o de todas perguntas sem resposta");
 
define("_MI_SF_CATEGORY_QUESTION_NOTIFY", "Assunto da Quest�o");
define("_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC", "Op��es de Notifica��o do assunto atual.");
 
define("_MI_SF_QUESTION_NOTIFY", "Pergunta Aberta");
define("_MI_SF_QUESTION_NOTIFY_DSC", "Op��es de Notifica��o das perguntas sem respostas.");
 
define("_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY", "Novo Assunto");
define("_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP", "Notificar-me quando um assunto for criado.");
define("_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC", "Notificar-me quando um assunto nova for criada.");
define("_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Novo Assunto");
 
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY", "Quest�o enviou");
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP", "Notificar-me quando qualquer Quest�o for enviado e espera aprova��o.");
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC", "Notificar-me quando qualquer Quest�o for enviada e espera aprova��o.");
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Quest�o enviada");
 
define("_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY", "Nova Quest�o publicada");
define("_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP", "Notificar-me quando qualquer Quest�o novo � publicado.");
define("_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC", "Notificar-me quando qualquer Quest�o novo � publicado.");
define("_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Quest�o novo publicou");
 
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY", "Nova Resposta prop�s");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP", "Notificar-me quando uma resposta for proposta em qualquer Quest�o.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC", "Notificar-me quando uma resposta for proposta em qualquer Quest�o.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta nova prop�s");
 
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY", "Nova Resposta publicada");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP", "Notificar-me quando uma resposta for publicada em qualquer Quest�o.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC", "Notificar-me quando uma resposta for publicada em qualquer Quest�o.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta nova publicou");
 
define("_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY", "Quest�o enviada");
define("_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP", "Notificar-me quando Quest�o for enviada no assunto atual.");
define("_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC", "Notificar-me quando Quest�o for enviada no assunto atual.");
define("_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Quest�o enviada no assunto");
 
define("_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY", "Nova Quest�o publicada");
define("_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP", "Notificar-me quando um Quest�o novo � publicado no assunto atual.");
define("_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC", "Notificar-me quando nova Quest�o for publicado no assunto atual.");
define("_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Quest�o publicada nos Assustos");
 
define("_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY", "Nova Resposta proposta");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP", "Notificar-me quando uma resposta for proposta para um Quest�o neste assunto.");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC", "Notificar-me quando uma resposta for proposta para um Quest�o neste assunto.");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Resposta proposta");
 
define("_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY", "Nova Resposta publicada");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP", "Notificar-me quando for publicada uma resposta uma quest�o nesse assunto.");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC", "Notificar-me quando for publicada uma resposta para um quest�o nesse assunto.");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Resposta publicada");
 
define("_MI_SF_FAQ_REJECTED_NOTIFY", "Quest�o Rejeitada");
define("_MI_SF_FAQ_REJECTED_NOTIFY_CAP", "Notificar-me se est� Quest�o for rejeitada.");
define("_MI_SF_FAQ_REJECTED_NOTIFY_DSC", "Notificar-me se est� Quest�o for rejeitada.");
define("_MI_SF_FAQ_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Quest�o Rejeitada");
 
define("_MI_SF_FAQ_APPROVED_NOTIFY", "Quest�o Aprovada");
define("_MI_SF_FAQ_APPROVED_NOTIFY_CAP", "Notificar-me quando est� Quest�o for aprovada.");
define("_MI_SF_FAQ_APPROVED_NOTIFY_DSC", "Notificar-me quando est� Quest�o for aprovada.");
define("_MI_SF_FAQ_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Quest�o Aprovada");
 
define("_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY", "Resposta Aprovada");
define("_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP", "Notificar-me quando est� resposta for aprovada.");
define("_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC", "Notificar-me quando est� resposta for aprovada.");
define("_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta Aprovada");
 
define("_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY", "Resposta Rejeitou");
define("_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP", "Notificar-me se est� resposta for rejeitada.");
define("_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC", "Notificar-me se est� resposta for rejeitada.");
define("_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta Rejeitada");
 
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY", "Pergunta enviou");
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP", "Notificar-me quando qualquer pergunta for enviada e espera aprova��o.");
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC", "Notificar-me quando qualquer pergunta for enviada e espera aprova��o.");
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta Enviada");
 
define("_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY", "Pergunta publicou");
define("_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP", "Notificar-me quando qualquer pergunta for publicada na se��o de Perguntas.");
define("_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC", "Notificar-me quando qualquer pergunta for publicada na se��o de Perguntas.");
define("_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Pergunta Nova Publicada");
 
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY", "Resposta Proposta");
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP", "Notificar-me quando uma resposta for proposta para qualquer pergunta.");
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC", "Notificar-me quando uma resposta for proposta para qualquer pergunta.");
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Resposta Proposta");
 
define("_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY", "Pergunta Enviada");
define("_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP", "Notificar-me quando uma pergunta for enviada no assunto atual.");
define("_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC", "Notificar-me quando uma pergunta for enviada no assunto atual.");
define("_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta Enviada");
 
define("_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY", "Pergunta Publicada");
define("_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP", "Notificar-me quando uma pergunta for publicada no assunto atual.");
define("_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC", "Notificar-me quando uma pergunta � publicada no assunto atual.");
define("_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta Publicada");
 
define("_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY", "Resposta Proposta");
define("_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP", "Notificar-me quando uma nova resposta for proposta para uma pergunta deste assunto.");
define("_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC", "Notificar-me quando uma nova resposta for proposta para uma pergunta desta assunto.");
define("_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Resposta Proposta");
 
define("_MI_SF_QUESTION_REJECTED_NOTIFY", "Pergunta Rejeitada");
define("_MI_SF_QUESTION_REJECTED_NOTIFY_CAP", "Notificar-me se esta pergunta for rejeitada.");
define("_MI_SF_QUESTION_REJECTED_NOTIFY_DSC", "Notificar-me se esta pergunta for rejeitada.");
define("_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Pergunta Rejeitada");
 
define("_MI_SF_QUESTION_APPROVED_NOTIFY", "Pergunta Aprovada");
define("_MI_SF_QUESTION_APPROVED_NOTIFY_CAP", "Avise-me quando est� pergunta for aprovada.");
define("_MI_SF_QUESTION_APPROVED_NOTIFY_DSC", "Notificar-me quando est� pergunta for aprovada.");
define("_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Pergunta Aprovada");
 
define("_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY", "Resposta Aprovada");
define("_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP", "Notificar-me quando est� resposta for aprovada.");
define("_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC", "Notificar-me quando est� resposta for aprovada.");
define("_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta Aprovada");
 
define("_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY", "Resposta Rejeitada");
define("_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP", "Notificar-me se est� resposta for rejeitada.");
define("_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC", "Notificar-me se est� resposta for rejeitada.");
define("_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta Rejeitada");

// About.php constants
define('_MI_SF_AUTHOR_INFO', "Infoma��es do Autor");
define('_MI_SF_AUTHOR_NAME', "Autor");
define('_MI_SF_AUTHOR_WEBSITE', "Autor's website");
define('_MI_SF_AUTHOR_EMAIL', "Eemail do Autor's");
define('_MI_SF_AUTHOR_CREDITS', "Creditos");
define('_MI_SF_DEMO_SITE', "Site Demo do SmartFactory");
define('_MI_SF_MODULE_INFO', "Informa��o dos Desenvolvedores do Modulo");
define('_MI_SF_MODULE_STATUS', "Status");
define('_MI_SF_MODULE_DEMO', "Site Demo");
define('_MI_SF_MODULE_SUPPORT', "Suporte Site Oficial");
define('_MI_SF_MODULE_BUG', "Relat�rio de bugs do modulo");
define('_MI_SF_MODULE_FEATURE', "Sugest�es para novos modulos");
define('_MI_SF_MODULE_DISCLAIMER', "Retrata��o");
define('_MI_SF_AUTHOR_WORD', "Palavras do Autor");
define('_MI_SF_WARNING', "Este m�dulo vem como �, sem qualquer garantia tudo que. Embora o m�dulo n�o seja um beta, ainda est� em pleno desenvolvimento. Esta vers�o pode ser usada em seu website ou em ambiente de produ��o, mas a responsabilidade � todas sua e significa que o autor n�o pode ser respons�bilizado..");

?>
