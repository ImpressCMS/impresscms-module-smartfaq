<?php

/**
* $Id$
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/

// Module Info
// The name of this module
global $xoopsModule;
define("_MI_SF_MD_NAME", "SmartFAQ");

// A brief description of this module
define("_MI_SF_MD_DESC", "Um �timo sistema de FAQ, que permite total administra��o de conteudos, tutoriais, manuais, ou o que sua imagina��o permitir ");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "Criar Pergunta");
define("_MI_SF_SUB_SMNAME2", "Perguntar");
define("_MI_SF_SUB_SMNAME3", "D�vidas");
define("_MI_SF_SUB_SMNAME4", "Moderar");

// Config options
define("_MI_SF_ALLOWSUBMIT", "Envio de Usu�rios:");
define("_MI_SF_ALLOWSUBMITDSC", "Permitir que usu�rios enviem Perguntas ao site?");

define("_MI_SF_ALLOWREQUEST", "Sugest�es de Usu�rio:");
define("_MI_SF_ALLOWREQUESTDSC", "Permitir usu�rio fazer sugest�es?");

define("_MI_SF_NEWANSWER", "Permitir envio de novas respostas :");
define("_MI_SF_NEWANSWERDSC", "Selecione 'Sim' para permitir os usu�rios de enviar novas respostas paa Perguntas j� publicadas.");

define("_MI_SF_ANONPOST", "Permitir envio an�nimo:");
define("_MI_SF_ANONPOSTDSC", "Permitir Perguntas de usu�rios an�nimos.");

define('_MI_SF_DATEFORMAT', 'Formato da Data:');
define('_MI_SF_DATEFORMATDSC', 'Exemplo: d-M-Y H:i <br/> Para ver: <b>04-Feb-2008 12:58</b>');

define('_MI_SF_DISPLAY_COLLAPS', 'T�tulo e Descri��o nas Barras:');
define('_MI_SF_DISPLAY_COLLAPSDSC', "Em 'SIM' ir� mostrar o T�tulo e Descri��o sobre as barras de conte�do na pagina principal.");

define('_MI_SF_DISPLAYTYPE', " Modo de exibi��o da Pergunta:");
define('_MI_SF_DISPLAYTYPEDSC', "<b>Visualizar Sum�rio</b> selecionado, ser�o exibidos somente Pergunta, Data e Cliques de cada Pergunta na categoria selecionado.<br><b>Ver Todos</b> mostra completamente a categoria escolhido.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', " Visualizar Sum�rio");
define('_MI_SF_DISPLAYTYPE_FULL', "Ver Todos");

define('_MI_SF_DISPLAY_LAST_FAQ', 'Mostrar �ltimas FAQ em coluna?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "Em 'SIM' ir� mostrar as �ltimas Pergunta e Resposta em cada categoria na pagina principal do modulo.");

define('_MI_SF_DISPLAY_LAST_FAQS', 'Mostrar lista de �ltimas FAQs?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "Em 'SIM' mostrar uma lista �ltimas Pergunta e Resposta na pagina principal do modulo.");

define('_MI_SF_LAST_FAQ_SIZE', 'Tamanho da ultima FAQ:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "Defina o tamanho m�ximo da Pergunta na �ltima coluna.");

define('_MI_SF_QUESTION_SIZE', "Tamanho da Pergunta:");
define('_MI_SF_QUESTION_SIZEDSC', "Defina o tamanho m�ximo do t�tulo da Pergunta, em exibi��o na p�gina de FAQs.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX', 'Mostrar sub-categorias no �ndice:');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "Selecione 'Sim' para mostrar sub-categorias no �ndice da p�gina.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', 'Mostrar descri��o nas Categoria ?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "Em 'SIM' ir� mostrar a descri��o abaixo das categorias na p�gina inicial.");

define('_MI_SF_DISPLAY_SBCAT_DSC', 'Mostrar descri��o do sub-assunto ?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "Em 'SIM' ir� mostra a descri��o do sub-categoria na p�gina inicial.");

define('_MI_SF_ORDERBYDATE', 'Organizar por data:');
define('_MI_SF_ORDERBYDATEDSC', 'Se voc� marcar a op��o como Sim');

define('_MI_SF_DISPLAY_DATE_COL', "Mostrar coluna '�ltimas Publica��es' ?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "Em 'SIM' ir� mostrar a coluna '�ltimas Publica��es' na p�gina inicial.");

define('_MI_SF_DISPLAY_HITS_COL', "Mostrar coluna 'Popularidade' ?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "Em 'SIM' ir� mostrar a coluna 'Popularidade' na p�gina inicial.");

define('_MI_SF_USEIMAGENAVPAGE', 'Navegar com imagens:');
define('_MI_SF_USEIMAGENAVPAGEDSC', 'Marque Sim, para a p�gina de navega��o ser exibida com imagem.');

define('_MI_SF_ALLOWCOMMENTS', 'Coment�rios das Perguntas por importancia:');
define('_MI_SF_ALLOWCOMMENTSDSC', 'Marque Sim, para exibir coment�rios das Perguntas que foram previamente marcados na pr�pria Pergunta.<br/> N�o, excluir� os coment�rios da exibi��o.');

define('_MI_SF_ALLOWADMINHITS', 'Contar leituras do Administrador:');
define('_MI_SF_ALLOWADMINHITSDSC', 'Permitir que os cliques do administrados sejam contabilizados?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', 'Auto-aprovar Pergunta enviada:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', 'Auto aprovar Pergunta enviado sem interven��o do admin.');

define('_MI_SF_AUTOAPPROVE_REQUEST', 'Auto-aprovar Perguntas pedidas:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', 'Auto-aprovar pedido de Perguntas sem interven��o do admin.');

define('_MI_SF_AUTOAPPROVE_ANS', 'Auto-aprovar respostas:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', 'Auto-aprovar respostas enviadas para as d�vidas.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', 'Auto-aprovar respostas:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', 'Auto-aprovar respostas enviadas para Perguntas.');

define('_MI_SF_LASTFAQSPERCAT', 'M�ximo de Perguntas por categoria :');
define('_MI_SF_LASTFAQSPERCATDSC', 'N�mero m�ximo de Pergunta ser exibido na coluna de Info de uma Categoria.');

define('_MI_SF_CATPERPAGE', 'M�ximo de categorias por p�gina (Usu�rio):');
define('_MI_SF_CATPERPAGEDSC', 'N�mero m�ximo de categorias exibidos por p�gina.');

define('_MI_SF_PERPAGE', 'M�ximo de Pergunta por p�gina (Administrador):');
define('_MI_SF_PERPAGEDSC', 'N�mero m�ximo de Pergunta exibidas por p�gina no Admin de Perguntas.');

define('_MI_SF_PERPAGEINDEX', 'M�ximo de Perguntas por p�gina (Usu�rio):');
define('_MI_SF_PERPAGEINDEXDSC', 'N�mero m�ximo de Pergunta ser exibido por p�gina em usu�rio.');

define('_MI_SF_INDEXWELCOMEMSG', 'Mensagem de boas vindas:');
define('_MI_SF_INDEXWELCOMEMSGDSC', 'Mensagem de Boas-vinda exibida na p�gina do m�dulo.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "Aqui est�o as D�vidas Freq�entemente dos usu�rios<br><b>Como se faz...</b>  e  <b>Voc� sabia...</b><br/>Envie seu coment�rio em qualquer Pergunta relacionada.");

define('_MI_SF_REQUESTINTROMSG', 'Mensagem de Introdu��o do Pedido:');
define('_MI_SF_REQUESTINTROMSGDSC', 'Mensagem de introdu��o exibida na p�gina de envio de Perguntas.');
define('_MI_SF_REQUESTINTROMSGDEF', "Caso n�o tenha achado a resposta da pergunta, preencha o formulario abaixo, descrevendo sua d�vida. O moderador revisar� seu pedido antes de publica-lo na Se��o de D�vidas para que algu�m responda!"); 

define('_MI_SF_OPENINTROMSG', 'Introdu��o da se��o de perguntas:');
define('_MI_SF_OPENINTROMSGDSC', 'Mensagem de Introdu��o que ser� exibida na se��o de Perguntas do m�dulo.');
define('_MI_SF_OPENINTROMSGDEF', "Est� � a lista de d�vidas de usu�rios que esperam uma resposta. Clique na pergunta se quiser responde-la."); 

define('_MI_SF_USEREALNAME', 'Mostrar nome verdadeiro dos usu�rios:');
define('_MI_SF_USEREALNAMEDSC', 'Mostrar o nome verdadeiro do usu�rio, se ele registrou algum.');

define('_MI_SF_HELP_PATH_SELECT', "Caminho do arquivo de ajuda do SmartFAQ arquiva:");
define('_MI_SF_HELP_PATH_SELECT_DSC', "Informe a localiza��o caminho dos arquivos de ajuda de SmartFAQ. Se voc� enviou tamb�m o pacote de Ajuda do SmartFAQ em modules/smartfaq/doc /,voc� pode selecionar ' Dentro do module'. Alternativamente, voc� pode ter acesso o arquivo de ajuda do m�dulo diretamente de docs.xoops.org atrav�s de chosing isto no seletor. Voc� tamb�m pode selecionar o caminho do arquivo de ajuda da op��o de config caminho do arquivo de ajuda de SmartFAQ");

define('_MI_SF_HELP_PATH_CUSTOM', "Localiza��o dos arquivos de ajuda de SmartFAQ:");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "Informe a localiza��o do arquivo de ajuda de SmartFAQ, coloque o endere�o URL do arquivo de ajuda de SmartFAQ. Ex: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "Dentro do m�dulo");
define('_MI_SF_HELP_CUSTOM', " Caminho da Costume");

//define('_MI_SF_MODERATORSEDIT', 'Permitir aos moderadores de editar (moderatores confiaveis)');
//define('_MI_SF_MODERATORSEDITDSC', 'Esta op��o permite aos moderadores de editar Perguntas e respostas nos assuntos que eles s�o respons�veis. Usualmente os moderadores podem somente aprovar ou rejeitar quest�es e respostas.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "Principal");
define("_MI_SF_ADMENU2", "Categorias");
define("_MI_SF_ADMENU3", "Perguntas");
define("_MI_SF_ADMENU4", "D�vidas");
define("_MI_SF_ADMENU5", "Permiss�es");
define("_MI_SF_ADMENU6", "Blocos e Grupos");
define("_MI_SF_ADMENU7", "Ir a p�gina");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "Lista das Perguntas Recentes");
define("_MI_SF_ARTSRANDOM_DIDUNO", "Voc� sabia?");
define("_MI_SF_ARTSRANDOM_FAQ", "Pergunta aleat�rias!");
define("_MI_SF_ARTSRANDOM_HOW", "Como fa�o para...");
define("_MI_SF_ARTSCONTEXT", "Contexto da Pergunta");
define("_MI_SF_RECENTFAQS", "Pergunta Recente (Detalhe)");
define("_MI_SF_RECENT_QUESTIONS", "Perguntas Recentes");
define("_MI_SF_MOST_VIEWED", "Perguntas mais consultadas");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'Perguntas Globais');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', 'Op��es de notifica��o de todas os Perguntas.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', 'Categoria da Pergunta');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', 'Op��es de notifica��o da categoria atual.');

define('_MI_SF_FAQ_NOTIFY', 'Pergunta');
define('_MI_SF_FAQ_NOTIFY_DSC', 'Op��es de notifica��o desta Pergunta.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'Perguntas Globais');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', 'Op��es de notifica��o de todas perguntas sem resposta');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', 'Categoria da Pergunta');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', 'Op��es de Notifica��o da categoria atual.');

define('_MI_SF_QUESTION_NOTIFY', 'Pergunta Aberta');
define('_MI_SF_QUESTION_NOTIFY_DSC', 'Op��es de Notifica��o das perguntas sem respostas.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', 'Nova Categoria');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', 'Avisar-me quando uma categoria for criado.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', 'Avisar-me quando uma categoria nova for criada.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Categoria');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', 'Pergunta enviada');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', 'Avisar-me quando qualquer Pergunta for enviado e espera aprova��o.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', 'Avisar-me quando qualquer Pergunta for enviada e espera aprova��o.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta enviada');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', 'Nova Pergunta publicada');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando qualquer Pergunta novo � publicado.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando qualquer Pergunta novo � publicado.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta publicada');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nova Resposta adicionada');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Avisar-me quando uma resposta for adicionada em qualquer Pergunta.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Avisar-me quando uma resposta for adicionada em qualquer Pergunta.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta nova prop�s');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nova Resposta publicada');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando uma resposta for publicada em qualquer Pergunta.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando uma resposta for publicada em qualquer Pergunta.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Resposta publicada');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', 'Pergunta enviada');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', 'Avisar-me quando uma Pergunta for enviada na categoria atual.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'Avisar-me quando uma Pergunta for enviada na categoria atual.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta enviada na categoria');

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'Nova Pergunta publicada');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando uma nova Pergunta for publicada na categoria atual.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando uma nova Pergunta for publicada na categoria atual.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta publicada nos Assustos');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nova Resposta proposta');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Avisar-me quando uma resposta for adicionada para uma Pergunta nesta categoria.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Avisar-me quando uma resposta for adicionada para uma Pergunta nesta categoria.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Resposta proposta');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nova Resposta publicada');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando for publicada uma resposta para uma Pergunta nessa categoria.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando for publicada uma resposta para uma Pergunta nessa categoria.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Resposta publicada');

define('_MI_SF_FAQ_REJECTED_NOTIFY', 'Pergunta Rejeitada');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', 'Avisar-me se est� Pergunta for rejeitada.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'Avisar-me se est� Pergunta for rejeitada.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Pergunta Rejeitada');

define('_MI_SF_FAQ_APPROVED_NOTIFY', 'Pergunta Aprovada');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', 'Avisar-me quando est� Pergunta for aprovada.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'Avisar-me quando est� Pergunta for aprovada.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Pergunta Aprovada');

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'Resposta Aprovada');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', 'Avisar-me quando est� resposta for aprovada.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'Avisar-me quando est� resposta for aprovada.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta Aprovada'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'Resposta Rejeitada');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', 'Avisar-me se est� resposta for rejeitada.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'Avisar-me se est� resposta for rejeitada.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta Rejeitada'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'Pergunta enviada');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', 'Avisar-me quando qualquer pergunta for enviada e espera aprova��o.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', 'Avisar-me quando qualquer pergunta for enviada e espera aprova��o.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta Enviada');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'Pergunta publicada');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando qualquer pergunta for publicada na se��o de Perguntas.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando qualquer pergunta for publicada na se��o de Perguntas.');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Pergunta Nova Publicada');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Resposta Proposta');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Avisar-me quando uma resposta for proposta para qualquer pergunta.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Avisar-me quando uma resposta for proposta para qualquer pergunta.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Resposta Proposta');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'Pergunta Enviada');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', 'Avisar-me quando uma pergunta for enviada na categoria atual.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'Avisar-me quando uma pergunta for enviada na categoria atual.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta Enviada');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'Pergunta Publicada');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando uma pergunta for publicada na categoria atual.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando uma pergunta for publicada na categoria atual.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Pergunta Publicada');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Resposta Adicionada');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Avisar-me quando uma nova resposta for adicionada para uma pergunta desta categoria.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Avisar-me quando uma nova resposta for adicionada para uma pergunta desta categoria.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Nova Resposta Adicionada');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'Pergunta Rejeitada');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', 'Avisar-me se esta pergunta for rejeitada.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'Avisar-me se esta pergunta for rejeitada.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Pergunta Rejeitada');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'Pergunta Aprovada');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', 'Avisar-me quando est� pergunta for aprovada.');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', 'Avisar-me quando est� pergunta for aprovada.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Pergunta Aprovada');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'Resposta Aprovada');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', 'Avisar-me quando est� resposta for aprovada.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'Avisar-me quando est� resposta for aprovada.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta Aprovada');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'Resposta Rejeitada');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', 'Avisar-me se est� resposta for rejeitada.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'Avisar-me se est� resposta for rejeitada.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notifica��o: Resposta Rejeitada');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "Infoma��es do Autor");
define('_MI_SF_DEVELOPER_LEAD', "Lead developer(s)");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "Contributor(s)");
define('_MI_SF_DEVELOPER_WEBSITE', "Website");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "Credits");
define('_MI_SF_DEMO_SITE', "Site Demo do SmartFactory");
define('_MI_SF_MODULE_INFO', "Informa��o dos Desenvolvedores do Modulo");
define('_MI_SF_MODULE_STATUS', "Status");
define('_MI_SF_MODULE_RELEASE_DATE', "Release date");
define('_MI_SF_MODULE_DEMO', "Site Demo");
define('_MI_SF_MODULE_SUPPORT', "Suporte Site Oficial");
define('_MI_SF_MODULE_BUG', "Relat�rio de erros do modulo");
define('_MI_SF_MODULE_FEATURE', "Sugest�es para novos modulos");
define('_MI_SF_MODULE_DISCLAIMER', "Retrata��o");
define('_MI_SF_AUTHOR_WORD', "Palavras do Autor");
define('_MI_SF_VERSION_HISTORY', "Historico da vers�o");

// Beta
define('_MI_SF_WARNING_BETA', "This module comes as is, without any guarantees whatsoever. 
This module is BETA, meaning it is still under active development. This release is meant for
<b>testing purposes only</b> and we <b>strongly</b> recommend that you do not use it on a live 
website or in a production environment.");

// RC
define('_MI_SF_WARNING_RC', "This module comes as is, without any guarantees whatsoever. This module 
is a Release Candidate and should not be used on a production web site. The module is still under 
active development and its use is under your own responsibility, which means the author is not responsible.");

// Final
define('_MI_SF_WARNING_FINAL', "This module comes as is, without any guarantees whatsoever. Although this 
module is not beta, it is still under active development. This release can be used in a live website 
or a production environment, but its use is under your own responsibility, which means the author 
is not responsible.");

?>