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
define("_MI_SF_MD_DESC", "Erweitertes Frage- und Antwortmodul für Ihre ImpressCMS-Site");

// Sub menus in main menu block
define("_MI_SF_SUB_SMNAME1", "FAQ einschicken");
define("_MI_SF_SUB_SMNAME2", "FAQ nachfragen");
define("_MI_SF_SUB_SMNAME3", "Offene Fragen");
define("_MI_SF_SUB_SMNAME4", "FAQs moderieren");

// Config options
define("_MI_SF_ALLOWSUBMIT", "Benutzereinsendungen:");
define("_MI_SF_ALLOWSUBMITDSC", "Benutzern erlauben, FAQs einzuschicken?");

define("_MI_SF_ALLOWREQUEST", "Benutzeranfragen:");
define("_MI_SF_ALLOWREQUESTDSC", "Benutzern erlauben, FAQs zu anzufragen?");

define("_MI_SF_NEWANSWER", "Einsenden von neuen Antworten erlauben:");
define("_MI_SF_NEWANSWERDSC", "Falls 'Ja' ausgewählt wird dürfen die User Antworten auf bereits veröffentliche FAQ einsenden.");

define("_MI_SF_ANONPOST", "Gastbeiträge zulassen");
define("_MI_SF_ANONPOSTDSC", "Gästen erlauben, FAQs zu anzufragen.");

define('_MI_SF_DATEFORMAT', 'Datumsformat:');
define('_MI_SF_DATEFORMATDSC', 'Benutzen Sie den letzten Teil der Datei language/german/global.php um das Datumsformat einzustellen. Beispiel: "d.m.Y H:i" wird übersetzt in "30.3.2004 22:35"');

define('_MI_SF_DISPLAY_COLLAPS', 'Balken zum Zusammenklappen anzeigen');
define('_MI_SF_DISPLAY_COLLAPSDSC', "'Ja' auswählen um die Balken zum Zusammenklappen im Index und der Kategorieseite anzuzeigen.");

define('_MI_SF_DISPLAYTYPE', "FAQs Anzeigetyp:");
define('_MI_SF_DISPLAYTYPEDSC', "Wenn 'Zusammenfassung' ausgewählt ist, werden nur die Frage, Datum und Hits der einzelnen FAQs in der gewählten Kategorie angezeigt. Wenn 'Vollständige Anzeige' ausgewählt ist, wird die FAQ in der Kategorie vollständig angezeigt.");
define('_MI_SF_DISPLAYTYPE_SUMMARY', "Zusammenfassung");
define('_MI_SF_DISPLAYTYPE_FULL', "Vollständige Anzeige");

define("_MI_SF_DISPLAY_LAST_FAQ", "'Letzte FAQ'-Spalte anzeigen?");
define('_MI_SF_DISPLAY_LAST_FAQDSC', "'Ja' auswählen, um die letzte FAQ jeder Kategorie im Index und der Kategorieseite anzuzeigen.");

define('_MI_SF_DISPLAY_LAST_FAQS', 'Liste der letzten FAQs anzeigen?');
define('_MI_SF_DISPLAY_LAST_FAQSDSC', "'Ja' auswählen um eine Liste der letzten FAQs auf der Indexseite anzuzeigen.");

define('_MI_SF_LAST_FAQ_SIZE', 'Letzte FAQ Größe:');
define('_MI_SF_LAST_FAQ_SIZEDSC', "Maximale Größe der Frage in der 'letzte FAQ-Spalte' angeben.");

define('_MI_SF_QUESTION_SIZE', "Größe der Frage:");
define('_MI_SF_QUESTION_SIZEDSC', "Maximale Größe der Frage im Titel in der 'Einzelnen FAQ-Anzeigen' Seite.");

define('_MI_SF_DISPLAY_SUBCAT_INDEX', 'Unterkategorien auf Indexseite anzeigen?');
define('_MI_SF_DISPLAY_SUBCAT_INDEXDSC', "'Ja' auswählen um Unterkategorien auf der Indexseite anzuzeigen.");

define('_MI_SF_DISPLAY_TOPCAT_DSC', 'Beschreibung der Hauptkategorien anzeigen?');
define('_MI_SF_DISPLAY_TOPCAT_DSCDSC', "'Ja' auswählen um eine Beschreibung der Hauptkategorien auf der Index- und Kategorieseite anzuzeigen.");

define('_MI_SF_DISPLAY_SBCAT_DSC', 'Beschreibung der Unterkategorien anzeigen?');
define('_MI_SF_DISPLAY_SBCAT_DSCDSC', "'Ja' auswählen um eine Beschreibung der Unterkategorien auf der Index- und Kategorieseite anzuzeigen.");

define('_MI_SF_ORDERBYDATE', 'FAQs nach Datum sortieren:');
define('_MI_SF_ORDERBYDATEDSC', 'Wenn diese Option auf "Ja" eingestellt wird, werden die FAQs innerhalb einer Kategorie nach Datum sortiert, sonst nach ihrer Position.');

define('_MI_SF_DISPLAY_DATE_COL', "'Veröffentlicht am' Spalte anzeigen?");
define('_MI_SF_DISPLAY_DATE_COLDSC', "Wenn der Anzeigetyp 'Zusammenfassung' ausgewählt wurde, wird hier mit 'Ja' das 'Veröffentlicht am' Datum in der FAQ-Tabelle Kategorie im Index und der Kategorieseite angezeigt.");

define('_MI_SF_DISPLAY_HITS_COL', "'Hits'-Spalte anzeigen?");
define('_MI_SF_DISPLAY_HITS_COLDSC', "Wenn der Anzeigetyp 'Zusammenfassung' ausgewählt wurde, werden hier mit 'Ja' die 'Hits' in der FAQ-Tabelle Kategorie im Index und der Kategorieseite angezeigt.");

define('_MI_SF_USEIMAGENAVPAGE', 'Bilder für die Seitennavigation verwenden:');
define('_MI_SF_USEIMAGENAVPAGEDSC', '"Ja" auswählen um die Seitennavigation in Bildern darzustellen, sonst wird die originale Seitennavigation von XOOPS verwendet.');

define('_MI_SF_ALLOWCOMMENTS', 'Kommentare auf Ebene eines einzelnen FAQs steuern:');
define('_MI_SF_ALLOWCOMMENTSDSC', '"Ja" auswählen um Kommentare nur in den FAQs zuzulassen, die in den Einstellungen die Kommentar-Checkbox aktiviert haben. <br /><br />"Nein" auswählen, um die Kommentarsteuerung global durchzuführen (siehe unten bei "Kommentarrichtlinien".');

define('_MI_SF_ALLOWADMINHITS', 'Admin "gelesen" zählen:');
define('_MI_SF_ALLOWADMINHITSDSC', 'Sollen Admin-Klicks den "gelesen"-Counter erhöhen?');

define('_MI_SF_AUTOAPPROVE_SUB_FAQ', 'Eingereichte FAQs automatisch freigeben:');
define('_MI_SF_AUTOAPPROVE_SUB_FAQ_DSC', 'Gibt eingereichte FAQs automatisch frei, ohne Eingreifen des Admins.');

define('_MI_SF_AUTOAPPROVE_REQUEST', 'Nachgefragte FAQs automatisch freigeben:');
define('_MI_SF_AUTOAPPROVE_REQUEST_DSC', 'Gibt nachgefragte FAQs automatisch frei, ohne Eingreifen des Admins.');

define('_MI_SF_AUTOAPPROVE_ANS', 'Antworten automatisch freigeben:');
define('_MI_SF_AUTOAPPROVE_ANS_DSC', 'Gibt eingereichte Antworten automatisch frei, ohne Eingreifen des Admins.');

define('_MI_SF_AUTOAPPROVE_ANS_NEW', 'Neue Antworten automatisch freigeben:');
define('_MI_SF_AUTOAPPROVE_ANS_NEW_DSC', 'Gibt neu eingereichte Antworten automatisch frei, ohne Eingreifen des Admins.');

define('_MI_SF_LASTFAQSPERCAT', 'Max. Anzahl letzte FAQs pro Kategorie:');
define('_MI_SF_LASTFAQSPERCATDSC', 'Gibt die maximale Anzahl FAQs an, die in der Info-Spalte pro Kategorie angezeigt werden sollen.');

define('_MI_SF_CATPERPAGE', 'Maximale Anzahl Kategorien (User-Seite):');
define('_MI_SF_CATPERPAGEDSC', 'Maximum Anzahl Kategorien die auf einmal für den User angezeigt werden sollen.');

define('_MI_SF_PERPAGE', 'Maximale Anzahl FAQs (Admin-Seite):');
define('_MI_SF_PERPAGEDSC', 'Maximum Anzahl FAQs die auf einmal für den Admin angezeigt werden sollen.');

define('_MI_SF_PERPAGEINDEX', 'Maximale Anzahl FAQs (User-Seite):');
define('_MI_SF_PERPAGEINDEXDSC', 'Maximum Anzahl FAQs die auf einmal für den User angezeigt werden sollen.');

define('_MI_SF_INDEXWELCOMEMSG', 'Index Willkommens-Nachricht:');
define('_MI_SF_INDEXWELCOMEMSGDSC', 'Willkommens Nachricht, die auf der Indexseite des Moduls angezeigt werden soll.');
define('_MI_SF_INDEXWELCOMEMSGDEF', "In diesem Bereich der Seite, finden Sie Antworten auf häufig gestellte Fragen sowie Antworten auf Fragen wie <b>Wie kann ich</b> oder <b>Wussten Sie schon...</b>. Diese Antworten dürfen gerne kommentiert werden.");

define('_MI_SF_REQUESTINTROMSG', 'Anfrage Einführungsnachricht:');
define('_MI_SF_REQUESTINTROMSGDSC', 'Einführende Nachricht, die im Bereich der Nachfrage von Antworten angezeigt wird.');
define('_MI_SF_REQUESTINTROMSGDEF', "Sie haben die gesuchte Antwort auf Ihre Frage nicht gefunden? Kein Problem! Füllen Sie das folgende Formular zur Beantragung einer Antwort aus. Die Administratoren werden die Frage prüfen und eine neue 'Offene Frage' veröffentlichen!");

define('_MI_SF_OPENINTROMSG', 'Offene Fragen Einführungsnachricht:');
define("_MI_SF_OPENINTROMSGDSC", "Einführende Nachricht, die im Bereich der 'Offenen Fragen' angezeigt wird.");
define('_MI_SF_OPENINTROMSGDEF', "Hier ist eine Liste der populärsten Kategorien und ihrer Unterkategorien. Wählen Sie eine Kategorie aus, um die darin enthaltenen FAQs zu sehen.");

define('_MI_SF_USEREALNAME', 'Echten Namen anzeigen');
define('_MI_SF_USEREALNAMEDSC', 'Ersetzt den Usernamen durch den Namen, der im Profil angegeben ist.');

define('_MI_SF_HELP_PATH_SELECT', "Pfad der SmartFAQ-Hilfedateien");
define('_MI_SF_HELP_PATH_SELECT_DSC', "Wählen Sie aus, von wo aus du auf die SmartFAQ-Hilfedateien zugegriffen werden sollen. Wenn Sie das 'SmartFAQ'-Help Package' heruntergeladen und in den Ordner 'modules/smartfaq/doc/' hochgeladen haben, können Sie 'Innerhalb des Moduls' auswählen. Alternativ, können Sie auf diese Dateien direkt von docs.xoops.org zugreifen, in dem Sie dies in der Combobox auswählen. Sie können auch 'Eigener Pfad' angeben und den Pfad selber im Bereich 'Eigener Pfad der SmartFAQ-Hilfedateien' angeben.");

define('_MI_SF_HELP_PATH_CUSTOM', "Eigener Pfad der SmartFAQ-Hilfedateien");
define('_MI_SF_HELP_PATH_CUSTOM_DSC', "Wenn Sie 'Eigener Pfad' in der vorherigen Option 'Pfad der SmartFAQ-Hilfedateien' ausgewählt haben, geben Sie bitte hier den Pfad der SmartFAQ-Hilfedateien, im format 'http://www.ihresite.com/doc' an.");

define('_MI_SF_HELP_INSIDE', "Innerhalb des Moduls");
define('_MI_SF_HELP_CUSTOM', "Eigener Pfad");

//define('_MI_SF_MODERATORSEDIT', 'Allow moderators to edit (Enhanced moderators)');
//define('_MI_SF_MODERATORSEDITDSC', 'This option will allow moderators to edit questions and Q&A within categories for which they are moderators. Otherwise, moderators can only approve or reject questions and Q&A.');

// Names of admin menu items
define("_MI_SF_ADMENU1", "Index");
define("_MI_SF_ADMENU2", "Kategorien");
define("_MI_SF_ADMENU3", "FAQ");
define("_MI_SF_ADMENU4", "Fragen");
define("_MI_SF_ADMENU5", "Berechtigungen");
define("_MI_SF_ADMENU6", "Blöcke und Gruppen");
define("_MI_SF_ADMENU7", "Gehe zum Modul");

//Names of Blocks and Block information
define("_MI_SF_ARTSNEW", "Liste der aktuellen FAQs");
define("_MI_SF_ARTSRANDOM_DIDUNO", "Wusstesn Sie schon?");
define("_MI_SF_ARTSRANDOM_FAQ", "Zufällige Frage!");
define("_MI_SF_ARTSRANDOM_HOW", "Wie kann ich...");
define("_MI_SF_ARTSCONTEXT", "Kontextbezogene FAQ");
define("_MI_SF_RECENTFAQS", "Aktuelle FAQ (Details)");
define("_MI_SF_RECENT_QUESTIONS", "Aktuelle Offene Fragen");
define("_MI_SF_MOST_VIEWED", "Meistgelesene FAQs");


// Text for notifications

define('_MI_SF_GLOBAL_FAQ_NOTIFY', 'Allgemein FAQ');
define('_MI_SF_GLOBAL_FAQ_NOTIFY_DSC', 'Allgemeine FAQ-Benachrichtigungsoptionen.');

define('_MI_SF_CATEGORY_FAQ_NOTIFY', 'Kategorie FAQ');
define('_MI_SF_CATEGORY_FAQ_NOTIFY_DSC', 'Benachrichtigungsoptionen die die aktuelle Kategorie betreffen.');

define('_MI_SF_FAQ_NOTIFY', 'FAQ');
define('_MI_SF_FAQ_NOTIFY_DSC', 'Benachrichtigungsoptionen die die aktuelle FAQ betreffen.');

define('_MI_SF_GLOBAL_QUESTION_NOTIFY', 'Allgemein Offene Fragen');
define('_MI_SF_GLOBAL_QUESTION_NOTIFY_DSC', 'Allgemeine Benachrichtigungsoptionen die offenen Fragen betreffen.');

define('_MI_SF_CATEGORY_QUESTION_NOTIFY', 'Kategorie FAQ');
define('_MI_SF_CATEGORY_QUESTION_NOTIFY_DSC', 'Benachrichtigungsoptionen die die aktuelle Kategorie betreffen.');

define('_MI_SF_QUESTION_NOTIFY', 'Offene Fragen');
define('_MI_SF_QUESTION_NOTIFY_DSC', 'Benachrichtigungsoptionen die die aktuelle offene Frage betreffen.');

define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY', 'Neue Kategorie');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Kategorie angelegt worden ist.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_DSC', 'Benachrichtigung wenn eine neue Kategorie angelegt worden ist.');
define('_MI_SF_GLOBAL_FAQ_CATEGORY_CREATED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Kategorie');

define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY', 'FAQ eingeschickt');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_CAP', 'Benachrichtigen wenn eine FAQ angefragt worden ist.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_DSC', 'Benachrichtigen wenn eine FAQ angefragt worden ist.');
define('_MI_SF_GLOBAL_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue FAQ eingeschickt');

define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY', 'Neue FAQ veröffentlicht');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine FAQ veröffentlicht worden ist.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine FAQ veröffentlicht worden ist.');
define('_MI_SF_GLOBAL_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue FAQ veröffentlicht');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY', 'Neue Antwort vorgeschlagen');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Antwort auf eine Frage vorgeschlagen worden ist.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue Antwort auf eine Frage vorgeschlagen worden ist.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort vorgeschlagen');

define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Neue Antwort veröffentlicht');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Antwort auf eine Frage veröffentlicht worden ist.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue Antwort auf eine Frage veröffentlicht worden ist.');
define('_MI_SF_GLOBAL_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort veröffentlicht');

define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY', 'FAQ eingeschickt');
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue FAQ in dieser Kategorie eingeschickt worden ist.');   
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue FAQ in dieser Kategorie eingeschickt worden ist.');      
define('_MI_SF_CATEGORY_FAQ_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue FAQ in Kategorie eingeschickt'); 

define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY', 'Neue FAQ veröffentlicht');
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue FAQ in dieser Kategorie veröffentlicht worden ist.');   
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue FAQ in dieser Kategorie veröffentlicht worden ist.');      
define('_MI_SF_CATEGORY_FAQ_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue FAQ in Kategorie veröffentlicht'); 

define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY', 'Neue Antwort vorgeschlagen');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Antwort auf eine Frage in dieser Kategorie vorgeschlagen worden ist.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue Antwort auf eine Frage in dieser Kategorie vorgeschlagen worden ist.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort vorgeschlagen');

define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY', 'Neue Antwort veröffentlicht');
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine neue Antwort auf eine Frage in dieser Kategorie veröffentlicht worden ist.');   
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine neue Antwort auf eine Frage in dieser Kategorie veröffentlicht worden ist.');      
define('_MI_SF_CATEGORY_FAQ_ANSWER_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort in Kategorie veröffentlicht');

define('_MI_SF_FAQ_REJECTED_NOTIFY', 'FAQ abgelehnt');
define('_MI_SF_FAQ_REJECTED_NOTIFY_CAP', 'Benachrichtigen wenn eine FAQ abgelehnt wurde.');   
define('_MI_SF_FAQ_REJECTED_NOTIFY_DSC', 'Benachrichtigen wenn eine FAQ abgelehnt wurde.');      
define('_MI_SF_FAQ_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: FAQ abgelehnt'); 

define('_MI_SF_FAQ_APPROVED_NOTIFY', 'FAQ freigegeben');
define('_MI_SF_FAQ_APPROVED_NOTIFY_CAP', 'Benachrichtigen wenn eine FAQ freigegeben wurde.');   
define('_MI_SF_FAQ_APPROVED_NOTIFY_DSC', 'Benachrichtigen wenn eine FAQ freigegeben wurde.');      
define('_MI_SF_FAQ_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: FAQ freigegeben'); 

define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY', 'Antwort freigegeben');
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_CAP', 'Benachrichtigen wenn eine Antwort freigegeben wurde.');   
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_DSC', 'Benachrichtigen wenn eine Antwort freigegeben wurde.');      
define('_MI_SF_FAQ_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Antwort freigegeben'); 

define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY', 'Antwort abgelehnt');
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_CAP', 'Benachrichtigen wenn eine Antwort abgelehnt wurde.');   
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_DSC', 'Benachrichtigen wenn eine Antwort abgelehnt wurde.');      
define('_MI_SF_FAQ_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Antwort abgelehnt'); 

define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY', 'Frage eingeschickt');
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage eingeschickt wurde.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage eingeschickt wurde.');   
define('_MI_SF_GLOBAL_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Frage eingeschickt');

define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY', 'Frage veröffentlicht');
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage veröffentlicht wurde.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage veröffentlicht wurde.');   
define('_MI_SF_GLOBAL_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Frage veröffentlicht');

define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Antwort vorgeschlagen');
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Benachrichtigen wenn eine Antwort vorgeschlagen wurde.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Benachrichtigen wenn eine Antwort vorgeschlagen wurde.');   
define('_MI_SF_GLOBAL_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort vorgeschlagen');

define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY', 'Frage eingeschickt');
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage in dieser Kategorie eingeschickt wurde.');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage in dieser Kategorie eingeschickt wurde.');   
define('_MI_SF_CATEGORY_QUESTION_SUBMITTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Frage in Kategorie ingeschickt');

define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY', 'Frage veröffentlicht');
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage in dieser Kategorie veröffentlicht wurde.');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage in dieser Kategorie veröffentlicht wurde.');   
define('_MI_SF_CATEGORY_QUESTION_PUBLISHED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Frage in Kategorie veröffentlicht');

define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY', 'Antwort vorgeschlagen');
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_CAP', 'Benachrichtigen wenn eine Antwort in dieser Kategorie vorgeschlagen wurde.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_DSC', 'Benachrichtigen wenn eine Antwort in dieser Kategorie vorgeschlagen wurde.');   
define('_MI_SF_CATEGORY_QUESTION_ANSWER_PROPOSED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Neue Antwort vorgeschlagen');

define('_MI_SF_QUESTION_REJECTED_NOTIFY', 'Frage abgelehnt');
define('_MI_SF_QUESTION_REJECTED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage abgelehnt wurde.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage abgelehnt wurde.');   
define('_MI_SF_QUESTION_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Frage abgelehnt');

define('_MI_SF_QUESTION_APPROVED_NOTIFY', 'Frage freigegeben');
define('_MI_SF_QUESTION_APPROVED_NOTIFY_CAP', 'Benachrichtigen wenn eine Frage freigegeben wurde.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_DSC', 'Benachrichtigen wenn eine Frage freigegeben wurde.');   
define('_MI_SF_QUESTION_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Frage freigegeben');

define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY', 'Antwort freigegeben');
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_CAP', 'Benachrichtigen wenn diese Antwort freigegeben wurde.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_DSC', 'Benachrichtigen wenn diese Antwort freigegeben wurde.');   
define('_MI_SF_QUESTION_ANSWER_APPROVED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Antwort freiegegeben');

define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY', 'Antwort abgelehnt');
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_CAP', 'Benachrichtigen wenn diese Antwort abgelehnt wurde.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_DSC', 'Benachrichtigen wenn diese Antwort abgelehnt wurde.');   
define('_MI_SF_QUESTION_ANSWER_REJECTED_NOTIFY_SBJ', '[{X_SITENAME}] {X_MODULE} Automatische Benachrichtigung: Antwort abgelehnt');

// About.php constants
define('_MI_SF_AUTHOR_INFO', "Entwickler");
define('_MI_SF_DEVELOPER_LEAD', "Leitende(r) Entwickle(r)");
define('_MI_SF_DEVELOPER_CONTRIBUTOR', "Mitarbeiter");
define('_MI_SF_DEVELOPER_WEBSITE', "Webseite");
define('_MI_SF_DEVELOPER_EMAIL', "E-Mail");
define('_MI_SF_DEVELOPER_CREDITS', "Credits");
define('_MI_SF_DEMO_SITE', "SmartFactory-Demosite");
define('_MI_SF_MODULE_INFO', "Modulentwicklungs-Informationen");
define('_MI_SF_MODULE_STATUS', "Status");
define('_MI_SF_MODULE_RELEASE_DATE', "Veröffentlichungsdatum");
define('_MI_SF_MODULE_DEMO', "Demosite");
define('_MI_SF_MODULE_SUPPORT', "Offizielle Supportsite");
define('_MI_SF_MODULE_BUG', "Einen Bug für dieses Modul berichten");
define('_MI_SF_MODULE_FEATURE', "Einen Verbesserungsvorschlag für dieses Modul machen");
define('_MI_SF_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_SF_AUTHOR_WORD', "Bemerkung des Autors");
define('_MI_SF_VERSION_HISTORY', "Versions-History");

// Star: Diese Hinweise bleiben im Englischen Original.
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