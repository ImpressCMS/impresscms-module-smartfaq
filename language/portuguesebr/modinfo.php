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
define("_MI_SF_MD_DESC", "Um ótimo sistema de FAQ, que permite total administração de conteudos, tutoriais, manuais, ou o que sua imaginação permitir ");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "Criar Pergunta");
define("_MI_SF_SUB_SMNAME2", "Perguntar");
define("_MI_SF_SUB_SMNAME3", "Dúvidas");
define("_MI_SF_SUB_SMNAME4", "Moderar");

// Config options
define("_MI_SF_ALLOWSUBMIT", "Envio de Usuários:");
define("_MI_SF_ALLOWSUBMITDSC", "Permitir que usuários enviem Perguntas ao site?");

define("_MI_SF_ALLOWREQUEST", "Sugestões de Usuário:");
define("_MI_SF_ALLOWREQUESTDSC", "Permitir usuário fazer sugestões?");

define("_MI_SF_NEWANSWER", "Permitir envio de novas respostas :");
define("_MI_SF_NEWANSWERDSC", "Selecione 'Sim' para permitir os usuários de enviar novas respostas paa Perguntas já publicadas.");

define("_MI_SF_ANONPOST", "Permitir envio anônimo:");
define("_MI_SF_ANONPOSTDSC", "Permitir Perguntas de usuários anônimos.");

define('_MI_SF_DATEFORMAT', 'Formato da Data:');
define('_MI_SF_DATEFORMATDSC', 'Exemplo: d-M-Y H:i <br/> Para ver: <b>04-Feb-2008 12:58</b>');

define('_MI_SF_DISPLAY_COLLAPS', 'Título e Descrição nas Barras:');
define('_MI_SF_DISPLAY_COLLAPSDSC', "Em 'SIM' irá mostrar o Título e Descrição sobre as barras de conteúdo na pagina principal.");

define('_MI_SF_DISPLAYTYPE', " Modo de exibição da Pergunta:");
define('_MI_SF_DISPLAYTYPEDSC', "<b>Visualizar Sumário</b> selecionado, serão exibidos somente Pergunta, Data e Cliques de cada Pergunta na categoria selecionado.<br><b>Ver Todos</b> mostra completamente a categoria escolhido.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', " Visualizar Sumário");
define('_MI_SF_DISPLAYTYPE_FULL', "Ver Todos");

define('_MI_SF_DISPLAY_LAST_FAQ', 'Mostrar últimas FAQ em coluna?');
define('_MI_SF_DISPLAY_LAST_FAQDSC', "Em 'SIM' irá mostrar as últimas Pergunta e Resposta em cada categoria na pagina principal do modulo.");

define('_MI_SF_DISPLAY_LAST_FAQS', 'Mostrar lista de últimas FAQs?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "Em 'SIM' mostrar uma lista últimas Pergunta e Resposta na pagina principal do modulo.");

define('_MI_SF_LAST_FAQ_SIZE', 'Tamanho da ultima FAQ:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "Defina o tamanho máximo da Pergunta na última coluna.");

define('_MI_SF_QUESTION_SIZE', "Tamanho da Pergunta:");
define('_MI_SF_QUESTION_SIZEDSC', "Defina o tamanho máximo do título da Pergunta, em exibição na página de FAQs.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX', 'Mostrar sub-categorias no índice:');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "Selecione 'Sim' para mostrar sub-categorias no índice da página.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', 'Mostrar descrição nas Categoria ?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "Em 'SIM' irá mostrar a descrição abaixo das categorias na página inicial.");

define('_MI_SF_DISPLAY_SBCAT_DSC', 'Mostrar descrição do sub-assunto ?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "Em 'SIM' irá mostra a descrição do sub-categoria na página inicial.");

define('_MI_SF_ORDERBYDATE', 'Organizar por data:');
define('_MI_SF_ORDERBYDATEDSC', 'Se você marcar a opção como Sim');

define('_MI_SF_DISPLAY_DATE_COL', "Mostrar coluna 'Últimas Publicações' ?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "Em 'SIM' irá mostrar a coluna 'Últimas Publicações' na página inicial.");

define('_MI_SF_DISPLAY_HITS_COL', "Mostrar coluna 'Popularidade' ?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "Em 'SIM' irá mostrar a coluna 'Popularidade' na página inicial.");

define('_MI_SF_USEIMAGENAVPAGE', 'Navegar com imagens:');
define('_MI_SF_USEIMAGENAVPAGEDSC', 'Marque Sim, para a página de navegação ser exibida com imagem.');

define('_MI_SF_ALLOWCOMMENTS', 'Comentários das Perguntas por importancia:');
define('_MI_SF_ALLOWCOMMENTSDSC', 'Marque Sim, para exibir comentários das Perguntas que foram previamente marcados na própria Pergunta.<br/> Não, excluirá os comentários da exibição.');

define('_MI_SF_ALLOWADMINHITS', 'Contar leituras do Administrador:');
define('_MI_SF_ALLOWADMINHITSDSC', 'Permitir que os cliques do administrados sejam contabilizados?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', 'Auto-aprovar Pergunta enviada:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', 'Auto aprovar Pergunta enviado sem intervenção do admin.');

define('_MI_SF_AUTOAPPROVE_REQUEST', 'Auto-aprovar Perguntas pedidas:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', 'Auto-aprovar pedido de Perguntas sem intervenção do admin.');

define('_MI_SF_AUTOAPPROVE_ANS', 'Auto-aprovar respostas:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', 'Auto-aprovar respostas enviadas para as dúvidas.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', 'Auto-aprovar respostas:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', 'Auto-aprovar respostas enviadas para Perguntas.');

define('_MI_SF_LASTFAQSPERCAT', 'Máximo de Perguntas por categoria :');
define('_MI_SF_LASTFAQSPERCATDSC', 'Número máximo de Pergunta ser exibido na coluna de Info de uma Categoria.');

define('_MI_SF_CATPERPAGE', 'Máximo de categorias por página (Usuário):');
define('_MI_SF_CATPERPAGEDSC', 'Número máximo de categorias exibidos por página.');

define('_MI_SF_PERPAGE', 'Máximo de Pergunta por página (Administrador):');
define('_MI_SF_PERPAGEDSC', 'Número máximo de Pergunta exibidas por página no Admin de Perguntas.');

define('_MI_SF_PERPAGEINDEX', 'Máximo de Perguntas por página (Usuário):');
define('_MI_SF_PERPAGEINDEXDSC', 'Número máximo de Pergunta ser exibido por página em usuário.');

define('_MI_SF_INDEXWELCOMEMSG', 'Mensagem de boas vindas:');
define('_MI_SF_INDEXWELCOMEMSGDSC', 'Mensagem de Boas-vinda exibida na página do módulo.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "Aqui estão as Dúvidas Freqüentemente dos usuários<br><b>Como se faz...</b>  e  <b>Você sabia...</b><br/>Envie seu comentário em qualquer Pergunta relacionada.");

define('_MI_SF_REQUESTINTROMSG', 'Mensagem de Introdução do Pedido:');
define('_MI_SF_REQUESTINTROMSGDSC', 'Mensagem de introdução exibida na página de envio de Perguntas.');
define('_MI_SF_REQUESTINTROMSGDEF', "Caso não tenha achado a resposta da pergunta, preencha o formulario abaixo, descrevendo sua dúvida. O moderador revisará seu pedido antes de publica-lo na Seção de Dúvidas para que alguém responda!"); 

define('_MI_SF_OPENINTROMSG', 'Introdução da seção de perguntas:');
define('_MI_SF_OPENINTROMSGDSC', 'Mensagem de Introdução que será exibida na seção de Perguntas do módulo.');
define('_MI_SF_OPENINTROMSGDEF', "Está é a lista de dúvidas de usuários que esperam uma resposta. Clique na pergunta se quiser responde-la."); 

define('_MI_SF_USEREALNAME', 'Mostrar nome verdadeiro dos usuários:');
define('_MI_SF_USEREALNAMEDSC', 'Mostrar o nome verdadeiro do usuário, se ele registrou algum.');

define('_MI_SF_HELP_PATH_SELECT', "Caminho do arquivo de ajuda do SmartFAQ arquiva:");
define('_MI_SF_HELP_PATH_SELECT_DSC', "Informe a localização caminho dos arquivos de ajuda de SmartFAQ. Se você enviou também o pacote de Ajuda do SmartFAQ em modules/smartfaq/doc /,você pode selecionar ' Dentro do module'. Alternativamente, você pode ter acesso o arquivo de ajuda do módulo diretamente de docs.xoops.org através de chosing isto no seletor. Você também pode selecionar o caminho do arquivo de ajuda da opção de config caminho do arquivo de ajuda de SmartFAQ");

define('_MI_SF_HELP_PATH_CUSTOM', "Localização dos arquivos de ajuda de SmartFAQ:");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "Informe a localização do arquivo de ajuda de SmartFAQ, coloque o endereço URL do arquivo de ajuda de SmartFAQ. Ex: http://www.yoursite.com/doc");

define('_MI_SF_HELP_INSIDE', "Dentro do módulo");
define('_MI_SF_HELP_CUSTOM', " Caminho da Costume");

//define('_MI_SF_MODERATORSEDIT', 'Permitir aos moderadores de editar (moderatores confiaveis)');
//define('_MI_SF_MODERATORSEDITDSC', 'Esta opção permite aos moderadores de editar Perguntas e respostas nos assuntos que eles são responsáveis. Usualmente os moderadores podem somente aprovar ou rejeitar questões e respostas.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "Principal");
define("_MI_SF_ADMENU2", "Categorias");
define("_MI_SF_ADMENU3", "Perguntas");
define("_MI_SF_ADMENU4", "Dúvidas");
define("_MI_SF_ADMENU5", "Permissões");
define("_MI_SF_ADMENU6", "Blocos e Grupos");
define("_MI_SF_ADMENU7", "Ir a página");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "Lista das Perguntas Recentes");
define("_MI_SF_ARTSRANDOM_DIDUNO", "Você sabia?");
define("_MI_SF_ARTSRANDOM_FAQ", "Pergunta aleatórias!");
define("_MI_SF_ARTSRANDOM_HOW", "Como faço para...");
define("_MI_SF_ARTSCONTEXT", "Contexto da Pergunta");
define("_MI_SF_RECENTFAQS", "Pergunta Recente (Detalhe)");
define("_MI_SF_RECENT_QUESTIONS", "Perguntas Recentes");
define("_MI_SF_MOST_VIEWED", "Perguntas mais consultadas");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'Perguntas Globais');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', 'Opções de notificação de todas os Perguntas.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', 'Categoria da Pergunta');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', 'Opções de notificação da categoria atual.');

define('_MI_SF_FAQ_NOTIFY', 'Pergunta');
define('_MI_SF_FAQ_NOTIFY_DSC', 'Opções de notificação desta Pergunta.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'Perguntas Globais');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', 'Opções de notificação de todas perguntas sem resposta');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', 'Categoria da Pergunta');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', 'Opções de Notificação da categoria atual.');

define('_MI_SF_QUESTION_NOTIFY', 'Pergunta Aberta');
define('_MI_SF_QUESTION_NOTIFY_DSC', 'Opções de Notificação das perguntas sem respostas.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', 'Nova Categoria');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', 'Avisar-me quando uma categoria for criado.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', 'Avisar-me quando uma categoria nova for criada.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Categoria');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', 'Pergunta enviada');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', 'Avisar-me quando qualquer Pergunta for enviado e espera aprovação.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', 'Avisar-me quando qualquer Pergunta for enviada e espera aprovação.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta enviada');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', 'Nova Pergunta publicada');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando qualquer Pergunta novo é publicado.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando qualquer Pergunta novo é publicado.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta publicada');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nova Resposta adicionada');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Avisar-me quando uma resposta for adicionada em qualquer Pergunta.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Avisar-me quando uma resposta for adicionada em qualquer Pergunta.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta nova propôs');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nova Resposta publicada');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando uma resposta for publicada em qualquer Pergunta.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando uma resposta for publicada em qualquer Pergunta.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Resposta publicada');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', 'Pergunta enviada');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', 'Avisar-me quando uma Pergunta for enviada na categoria atual.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'Avisar-me quando uma Pergunta for enviada na categoria atual.');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta enviada na categoria');

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'Nova Pergunta publicada');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando uma nova Pergunta for publicada na categoria atual.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando uma nova Pergunta for publicada na categoria atual.');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta publicada nos Assustos');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'Nova Resposta proposta');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Avisar-me quando uma resposta for adicionada para uma Pergunta nesta categoria.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Avisar-me quando uma resposta for adicionada para uma Pergunta nesta categoria.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Resposta proposta');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Nova Resposta publicada');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando for publicada uma resposta para uma Pergunta nessa categoria.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando for publicada uma resposta para uma Pergunta nessa categoria.');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Resposta publicada');

define('_MI_SF_FAQ_REJECTED_NOTIFY', 'Pergunta Rejeitada');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', 'Avisar-me se está Pergunta for rejeitada.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'Avisar-me se está Pergunta for rejeitada.');
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Pergunta Rejeitada');

define('_MI_SF_FAQ_APPROVED_NOTIFY', 'Pergunta Aprovada');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', 'Avisar-me quando está Pergunta for aprovada.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'Avisar-me quando está Pergunta for aprovada.');
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Pergunta Aprovada');

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'Resposta Aprovada');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', 'Avisar-me quando está resposta for aprovada.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'Avisar-me quando está resposta for aprovada.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta Aprovada'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'Resposta Rejeitada');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', 'Avisar-me se está resposta for rejeitada.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'Avisar-me se está resposta for rejeitada.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta Rejeitada'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'Pergunta enviada');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', 'Avisar-me quando qualquer pergunta for enviada e espera aprovação.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', 'Avisar-me quando qualquer pergunta for enviada e espera aprovação.');      
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta Enviada');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'Pergunta publicada');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando qualquer pergunta for publicada na seção de Perguntas.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando qualquer pergunta for publicada na seção de Perguntas.');      
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Pergunta Nova Publicada');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Resposta Proposta');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Avisar-me quando uma resposta for proposta para qualquer pergunta.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Avisar-me quando uma resposta for proposta para qualquer pergunta.');      
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Resposta Proposta');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'Pergunta Enviada');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', 'Avisar-me quando uma pergunta for enviada na categoria atual.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'Avisar-me quando uma pergunta for enviada na categoria atual.');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta Enviada');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'Pergunta Publicada');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', 'Avisar-me quando uma pergunta for publicada na categoria atual.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'Avisar-me quando uma pergunta for publicada na categoria atual.');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta Publicada');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Resposta Adicionada');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Avisar-me quando uma nova resposta for adicionada para uma pergunta desta categoria.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Avisar-me quando uma nova resposta for adicionada para uma pergunta desta categoria.');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Resposta Adicionada');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'Pergunta Rejeitada');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', 'Avisar-me se esta pergunta for rejeitada.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'Avisar-me se esta pergunta for rejeitada.');      
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Pergunta Rejeitada');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'Pergunta Aprovada');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', 'Avisar-me quando está pergunta for aprovada.');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', 'Avisar-me quando está pergunta for aprovada.');      
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Pergunta Aprovada');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'Resposta Aprovada');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', 'Avisar-me quando está resposta for aprovada.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'Avisar-me quando está resposta for aprovada.');      
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta Aprovada');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'Resposta Rejeitada');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', 'Avisar-me se está resposta for rejeitada.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'Avisar-me se está resposta for rejeitada.');      
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta Rejeitada');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "Infomações do Autor");
define('_MI_SF_DEVELOPER_LEAD', "Lead developer(s)");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "Contributor(s)");
define('_MI_SF_DEVELOPER_WEBSITE', "Website");
define('_MI_SF_DEVELOPER_EMAIL', "Email");
define('_MI_SF_DEVELOPER_CREDITS', "Credits");
define('_MI_SF_DEMO_SITE', "Site Demo do SmartFactory");
define('_MI_SF_MODULE_INFO', "Informação dos Desenvolvedores do Modulo");
define('_MI_SF_MODULE_STATUS', "Status");
define('_MI_SF_MODULE_RELEASE_DATE', "Release date");
define('_MI_SF_MODULE_DEMO', "Site Demo");
define('_MI_SF_MODULE_SUPPORT', "Suporte Site Oficial");
define('_MI_SF_MODULE_BUG', "Relatório de erros do modulo");
define('_MI_SF_MODULE_FEATURE', "Sugestões para novos modulos");
define('_MI_SF_MODULE_DISCLAIMER', "Retratação");
define('_MI_SF_AUTHOR_WORD', "Palavras do Autor");
define('_MI_SF_VERSION_HISTORY', "Historico da versão");

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