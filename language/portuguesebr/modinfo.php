<?php

/**
* $Id$
* Module: SmartFAQ
* Translat: desus <desus@xoopscafe.org>
* Licence: GNU
*/

// Informações do Modulo
// O nome deste Modulo
global $xoopsModule;
define("_MI_SF_MD_NAME", "SmartFAQ");

//Uma breve descrição deste módulo 
define("_MI_SF_MD_DESC", "Um ótimo sistema de FAQ, que permite total administração de conteudos, tutoriais, manuais, ou o que sua imaginação permitir ");
 
//Cardápios de substituto em bloco de cardápio principal 
define("_MI_SF_SUB_SMNAME1", "Criar Questão");
define("_MI_SF_SUB_SMNAME2", "Perguntar");
define("_MI_SF_SUB_SMNAME3", "Dúvidas");
define("_MI_SF_SUB_SMNAME4", "Moderar");
 
//Opções de Configuração 
define("_MI_SF_ALLOWSUBMIT", "Envio de Usuários:");
define("_MI_SF_ALLOWSUBMITDSC", "Permitir que usuários enviem Questões ao site?");
 
define("_MI_SF_ALLOWREQUEST", "Sugestões de Usuário:");
define("_MI_SF_ALLOWREQUESTDSC", "Permitir usuário fazer sugestões?");
 
define("_MI_SF_ANONPOST", "Permitir envio anônimo");
define("_MI_SF_ANONPOSTDSC", "Permitir questões de usuários anônimos.");
 
define("_MI_SF_DATEFORMAT", "Formato da Data:");
define("_MI_SF_DATEFORMATDSC", "Usar o estilo de exibição do arquivo language/english/global.php para selecionar um .<br/>Exemplo: d-M-Y H:i <br/> Para ver: 04-Setembro-2004 21:35");
 
define("_MI_SF_DISPLAYTYPE", " Modo de exibição da Questão:");
define("_MI_SF_DISPLAYTYPEDSC", "Visualizar sumário selecionado, serão exibidos somente pergunta, Data e cliques de cada Questão do assunto selecionado. Visualização total mostra dos completamente o assunto escolhido.");
define("_MI_SF_DISPLAYTYPE_SUMMARY", " Visualizar Sumário");
define("_MI_SF_DISPLAYTYPE_FULL", "Ver Todos");
 
define("_MI_SF_ORDERBYDATE", "Organizar por data:");
define("_MI_SF_ORDERBYDATEDSC", "Se você marcar a opção como Sim", "As Questões serão organizados por data descendente.");
 
define("_MI_SF_USEIMAGENAVPAGE", "Navegar com imagens:");
define("_MI_SF_USEIMAGENAVPAGEDSC", "Marque Sim, para a página de navegação ser exibida com imagem."); 

define("_MI_SF_ALLOWCOMMENTS", "Comentários das Questões por importancia:");
define("_MI_SF_ALLOWCOMMENTSDSC", "Marque Sim, para exibir comentários das questões que foram previamente marcados na própria questão.<br/> Não, excluirá os comentários da exibição.");
 
define("_MI_SF_ALLOWADMINHITS", "Contar leituras do Administrador:");
define("_MI_SF_ALLOWADMINHITSDSC", "Permitir que os cliques do administrados sejam contabilizados?");
 
define("_MI_SF_AUTOAPPROVE_SUB_FAQ", "Auto-aprovar questão enviada:");
define("_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC", "Auto aprovar Questão enviado sem intervenção do admin.");
 
define("_MI_SF_AUTOAPPROVE_REQUEST", "Auto-aprovar questões pedidas:");
define("_MI_SF_AUTOAPPROVE_REQUEST_DSC", "Auto-aprovar pedido de Questões sem intervenção do admin.");
 
define("_MI_SF_AUTOAPPROVE_ANS", "Auto-aprovar respostas:");
define("_MI_SF_AUTOAPPROVE_ANS_DSC", "Auto-aprovar respostas enviadas para as dúvidas.");
 
define("_MI_SF_AUTOAPPROVE_ANS_NEW", "Auto-aprovar respostas:");
define("_MI_SF_AUTOAPPROVE_ANS_NEW_DSC", "Auto-aprovar respostas enviadas para Questões.");
 
define("_MI_SF_LASTFAQSPERCAT", "Máximo de questões por assunto :");
define("_MI_SF_LASTFAQSPERCATDSC", "Número máximo de Questão ser exibido na coluna de Info de um assunto.");
 
define("_MI_SF_CATPERPAGE", "Máximo de assuntos por página (Usuário):");
define("_MI_SF_CATPERPAGEDSC", "Número máximo de assuntos exibidos por página.");
 
define("_MI_SF_PERPAGE", "Máximo de Questão por página (Administrador):");
define("_MI_SF_PERPAGEDSC", "Número máximo de Questão exibidas por página no Admin de Questões.");
 
define("_MI_SF_PERPAGEINDEX", "Máximo de questões por página (Usuário):");
define("_MI_SF_PERPAGEINDEXDSC", "Número máximo de Questão ser exibido por página em usuário.");
 
define("_MI_SF_INDEXWELCOMEMSG", "Mensagem de boas vindas:");
define("_MI_SF_INDEXWELCOMEMSGDSC", "Mensagem de Boas-vinda exibida na página do módulo.");
define("_MI_SF_INDEXWELCOMEMSGDEF", "Aqui estão as Dúvias Freqüentemente dos usuários<b>Coomo se faz...</b> e <b>Você sabia...</b>. Envie seu comentário em qualquer Questão.");
 
define("_MI_SF_REQUESTINTROMSG", "Mensagem de Introdução do Pedido:");
define("_MI_SF_REQUESTINTROMSGDSC", "Mensagem de introdução exibida na página de envio de Questões.");
define('_MI_SF_REQUESTINTROMSGDEF', "Caso não tenha achado a resposta da pergunta, preencha o formulario abaixo, descrevendo sua dúvida. O moderador revisará seu pedido antes de publica-lo na Seção de Dúvidas para que alguém responda!"); 
 
define("_MI_SF_OPENINTROMSG", "Introdução da seção de perguntas:");
define("_MI_SF_OPENINTROMSGDSC", "Mensagem de Introdução que será exibida na seção de Perguntas do módulo.");
define("_MI_SF_OPENINTROMSGDEF", "Está é a lista de dúvidas de usuários que esperam uma resposta. Clique na pergunta se quiser responde-la.");
 
define("_MI_SF_USEREALNAME", "Mostrar nome real dos usuários");
define("_MI_SF_USEREALNAMEDSC", "Mostrar o real nome do usuário se ele registrou algum.");
 
define("_MI_SF_HELP_PATH_SELECT", "Caminho do arquivo de ajuda do SmartFAQ arquiva");
define("_MI_SF_HELP_PATH_SELECT_DSC", "Selecione o caminho de acesso os arquivos de ajuda de SmartFAQ. Se você enviou também o pacote de Ajuda do SmartFAQ em modules/smartfaq/doc /,você pode selecionar ' Dentro do module'. Alternativamente, você pode ter acesso o arquivo de ajuda do módulo diretamente de docs.xoops.org através de chosing isto no seletor. Você também pode selecionar o caminho do arquivo de ajuda da opção de config caminho do arquivo de ajuda de SmartFAQ");
 
define("_MI_SF_HELP_PATH_CUSTOM", "Localização dos arqivos de ajuda de SmartFAQ");
define("_MI_SF_HELP_PATH_CUSTOM_DSC", "S um Caminho do arquivo de ajuda de SmartFAQ, coloque o endereço URL do arquivo de ajuda de SmartFAQ. Ex: http://www.yoursite.com/doc");
 
define("_MI_SF_HELP_INSIDE", "Dentro do módulo");
define("_MI_SF_HELP_CUSTOM", " Caminho da Costume");
 
//define("_MI_SF_MODERATORSEDIT", "Permitir aos moderadores editar (Aumente os moderadores)");
// define("_MI_SF_MODERATORSEDITDSC", "Esta opção permitirá aos moderadoras editar perguntas e Questão dentro dos assuntos nos quais eles são responsáveis. Caso contrário, os moderadores só podem aprovar ou rejeitar perguntas e Questões.");
 
//Nomes de artigos de cardápio de admin 
define("_MI_SF_ADMENU1", "Principal");
define("_MI_SF_ADMENU2", "Assunto");
define("_MI_SF_ADMENU3", "Questão");
define("_MI_SF_ADMENU4", "Perguntas");
define("_MI_SF_ADMENU5", "Permissões");
define("_MI_SF_ADMENU6", "Blocos e Grupos");
define("_MI_SF_ADMENU7", "Ver na página");
 
//Names de Blocos e Bloco informação 
define("_MI_SF_ARTSNEW", "Lista das Questões Recentes");
define("_MI_SF_ARTSRANDOM_DIDUNO", "Você sabia?");
define("_MI_SF_ARTSRANDOM_FAQ", "Pergunta Fortuita!");
define("_MI_SF_ARTSRANDOM_HOW", "Como faço para...");
define("_MI_SF_ARTSCONTEXT", "Contexto da Questão");
define("_MI_SF_RECENTFAQS", "Questão Recente (Detalhe)");
define("_MI_SF_RECENT_QUESTIONS", "Questões Recentes");
 
//Texto para notificações 
 
define("_MI_SF_GLOBAL_FAQ_NOTIFY", "Questões Globais");
define("_MI_SF_GLOBAL_FAQ_NOTIFY_DSC", "Opções de notificação de todas os Questões.");
 
define("_MI_SF_CATEGORY_FAQ_NOTIFY", "Assunto da Questão");
define("_MI_SF_CATEGORY_FAQ_NOTIFY_DSC", "Opções de notificação do Assunto atual.");
 
define("_MI_SF_FAQ_NOTIFY", "Questão");
define("_MI_SF_FAQ_NOTIFY_DSC", "Opções de notificação desta Questão.");                  
 
define("_MI_SF_GLOBAL_QUESTION_NOTIFY", "Perguntas Globais");
define("_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC", "Opções de notificação de todas perguntas sem resposta");
 
define("_MI_SF_CATEGORY_QUESTION_NOTIFY", "Assunto da Questão");
define("_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC", "Opções de Notificação do assunto atual.");
 
define("_MI_SF_QUESTION_NOTIFY", "Pergunta Aberta");
define("_MI_SF_QUESTION_NOTIFY_DSC", "Opções de Notificação das perguntas sem respostas.");
 
define("_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY", "Novo Assunto");
define("_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP", "Notificar-me quando um assunto for criado.");
define("_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC", "Notificar-me quando um assunto nova for criada.");
define("_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Novo Assunto");
 
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY", "Questão enviou");
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP", "Notificar-me quando qualquer Questão for enviado e espera aprovação.");
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC", "Notificar-me quando qualquer Questão for enviada e espera aprovação.");
define("_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Questão enviada");
 
define("_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY", "Nova Questão publicada");
define("_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP", "Notificar-me quando qualquer Questão novo é publicado.");
define("_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC", "Notificar-me quando qualquer Questão novo é publicado.");
define("_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Questão novo publicou");
 
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY", "Nova Resposta propôs");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP", "Notificar-me quando uma resposta for proposta em qualquer Questão.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC", "Notificar-me quando uma resposta for proposta em qualquer Questão.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta nova propôs");
 
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY", "Nova Resposta publicada");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP", "Notificar-me quando uma resposta for publicada em qualquer Questão.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC", "Notificar-me quando uma resposta for publicada em qualquer Questão.");
define("_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta nova publicou");
 
define("_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY", "Questão enviada");
define("_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP", "Notificar-me quando Questão for enviada no assunto atual.");
define("_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC", "Notificar-me quando Questão for enviada no assunto atual.");
define("_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Questão enviada no assunto");
 
define("_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY", "Nova Questão publicada");
define("_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP", "Notificar-me quando um Questão novo é publicado no assunto atual.");
define("_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC", "Notificar-me quando nova Questão for publicado no assunto atual.");
define("_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Questão publicada nos Assustos");
 
define("_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY", "Nova Resposta proposta");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP", "Notificar-me quando uma resposta for proposta para um Questão neste assunto.");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC", "Notificar-me quando uma resposta for proposta para um Questão neste assunto.");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Resposta proposta");
 
define("_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY", "Nova Resposta publicada");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP", "Notificar-me quando for publicada uma resposta uma questão nesse assunto.");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC", "Notificar-me quando for publicada uma resposta para um questão nesse assunto.");
define("_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Resposta publicada");
 
define("_MI_SF_FAQ_REJECTED_NOTIFY", "Questão Rejeitada");
define("_MI_SF_FAQ_REJECTED_NOTIFY_CAP", "Notificar-me se está Questão for rejeitada.");
define("_MI_SF_FAQ_REJECTED_NOTIFY_DSC", "Notificar-me se está Questão for rejeitada.");
define("_MI_SF_FAQ_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Questão Rejeitada");
 
define("_MI_SF_FAQ_APPROVED_NOTIFY", "Questão Aprovada");
define("_MI_SF_FAQ_APPROVED_NOTIFY_CAP", "Notificar-me quando está Questão for aprovada.");
define("_MI_SF_FAQ_APPROVED_NOTIFY_DSC", "Notificar-me quando está Questão for aprovada.");
define("_MI_SF_FAQ_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Questão Aprovada");
 
define("_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY", "Resposta Aprovada");
define("_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP", "Notificar-me quando está resposta for aprovada.");
define("_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC", "Notificar-me quando está resposta for aprovada.");
define("_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta Aprovada");
 
define("_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY", "Resposta Rejeitou");
define("_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP", "Notificar-me se está resposta for rejeitada.");
define("_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC", "Notificar-me se está resposta for rejeitada.");
define("_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta Rejeitada");
 
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY", "Pergunta enviou");
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP", "Notificar-me quando qualquer pergunta for enviada e espera aprovação.");
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC", "Notificar-me quando qualquer pergunta for enviada e espera aprovação.");
define("_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta Enviada");
 
define("_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY", "Pergunta publicou");
define("_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP", "Notificar-me quando qualquer pergunta for publicada na seção de Perguntas.");
define("_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC", "Notificar-me quando qualquer pergunta for publicada na seção de Perguntas.");
define("_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Pergunta Nova Publicada");
 
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY", "Resposta Proposta");
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP", "Notificar-me quando uma resposta for proposta para qualquer pergunta.");
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC", "Notificar-me quando uma resposta for proposta para qualquer pergunta.");
define("_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Resposta Proposta");
 
define("_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY", "Pergunta Enviada");
define("_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP", "Notificar-me quando uma pergunta for enviada no assunto atual.");
define("_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC", "Notificar-me quando uma pergunta for enviada no assunto atual.");
define("_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta Enviada");
 
define("_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY", "Pergunta Publicada");
define("_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP", "Notificar-me quando uma pergunta for publicada no assunto atual.");
define("_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC", "Notificar-me quando uma pergunta é publicada no assunto atual.");
define("_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Pergunta Publicada");
 
define("_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY", "Resposta Proposta");
define("_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP", "Notificar-me quando uma nova resposta for proposta para uma pergunta deste assunto.");
define("_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC", "Notificar-me quando uma nova resposta for proposta para uma pergunta desta assunto.");
define("_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Nova Resposta Proposta");
 
define("_MI_SF_QUESTION_REJECTED_NOTIFY", "Pergunta Rejeitada");
define("_MI_SF_QUESTION_REJECTED_NOTIFY_CAP", "Notificar-me se esta pergunta for rejeitada.");
define("_MI_SF_QUESTION_REJECTED_NOTIFY_DSC", "Notificar-me se esta pergunta for rejeitada.");
define("_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Pergunta Rejeitada");
 
define("_MI_SF_QUESTION_APPROVED_NOTIFY", "Pergunta Aprovada");
define("_MI_SF_QUESTION_APPROVED_NOTIFY_CAP", "Avise-me quando está pergunta for aprovada.");
define("_MI_SF_QUESTION_APPROVED_NOTIFY_DSC", "Notificar-me quando está pergunta for aprovada.");
define("_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Pergunta Aprovada");
 
define("_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY", "Resposta Aprovada");
define("_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP", "Notificar-me quando está resposta for aprovada.");
define("_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC", "Notificar-me quando está resposta for aprovada.");
define("_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta Aprovada");
 
define("_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY", "Resposta Rejeitada");
define("_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP", "Notificar-me se está resposta for rejeitada.");
define("_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC", "Notificar-me se está resposta for rejeitada.");
define("_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ", "[{X_SITENAME}] {X_MODULE} auto-notificação: Resposta Rejeitada");

// About.php constants
define('_MI_SF_AUTHOR_INFO', "Infomações do Autor");
define('_MI_SF_AUTHOR_NAME', "Autor");
define('_MI_SF_AUTHOR_WEBSITE', "Autor's website");
define('_MI_SF_AUTHOR_EMAIL', "Eemail do Autor's");
define('_MI_SF_AUTHOR_CREDITS', "Creditos");
define('_MI_SF_DEMO_SITE', "Site Demo do SmartFactory");
define('_MI_SF_MODULE_INFO', "Informação dos Desenvolvedores do Modulo");
define('_MI_SF_MODULE_STATUS', "Status");
define('_MI_SF_MODULE_DEMO', "Site Demo");
define('_MI_SF_MODULE_SUPPORT', "Suporte Site Oficial");
define('_MI_SF_MODULE_BUG', "Relatório de bugs do modulo");
define('_MI_SF_MODULE_FEATURE', "Sugestões para novos modulos");
define('_MI_SF_MODULE_DISCLAIMER', "Retratação");
define('_MI_SF_AUTHOR_WORD', "Palavras do Autor");
define('_MI_SF_WARNING', "Este módulo vem como é, sem qualquer garantia tudo que. Embora o módulo não seja um beta, ainda está em pleno desenvolvimento. Esta versão pode ser usada em seu website ou em ambiente de produção, mas a responsabilidade é todas sua e significa que o autor não pode ser responsábilizado..");

?>