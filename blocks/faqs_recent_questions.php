<?php

/**
* $Id$
* Module: SmartFAQ
* Author: The SmartFactory <www.smartfactory.ca>
* Licence: GNU
*/
if (!defined("XOOPS_ROOT_PATH")) { 
 	die("XOOPS root path not defined");
}

function b_faqs_recent_questions_show($options)
{
	include_once(XOOPS_ROOT_PATH."/modules/smartfaq/include/functions.php");
	
	$block = array();
	
	If ($options[0] == 0) {
		$categoryid = -1;
	} else {
		$categoryid = $options[0];
	}
	
	$sort = $options[1];
	$limit = $options[2];
	$maxQuestionLength = $options[3];
	
	// Creating the faq handler object
	$faq_handler =& sf_gethandler('faq');
	
	// creating the FAQ objects that belong to the selected category
	$faqsObj = $faq_handler->getFaqs( $limit, 0, _SF_STATUS_OPENED, $categoryid, $sort);
	$totalfaqs = count($faqsObj);
	
	If ($faqsObj) {
		for ( $i = 0; $i < $totalfaqs; $i++ ) {
			$newfaqs = array();
			
			$newfaqs['linktext'] = $faqsObj[$i]->question($maxQuestionLength);
			$newfaqs['id'] = $faqsObj[$i]->faqid();
			if ($sort == "datesub") {
				$newfaqs['new'] = $faqsObj[$i]->datesub();
			} elseif ($sort == "counter") {
				$newfaqs['new'] = $faqsObj[$i]->counter();
			} elseif ($sort == "weight") {
				$newfaqs['new'] = $faqsObj[$i]->weight();
			}
			
			$block['newfaqs'][] = $newfaqs;
		}
		$block['lang_allunanswered'] = _MB_SF_ALLUNANSWERED;
	}
	return $block;
}

function b_faqs_recent_questions_edit($options)
{
	include_once(XOOPS_ROOT_PATH."/modules/smartfaq/include/functions.php");
	
	$form = sf_createCategorySelect($options[0]);
	
	$form .= "&nbsp;<br>" . _MB_SF_ORDER . "&nbsp;<select name='options[]'>";
	
	$form .= "<option value='datesub'";
	if ($options[1] == "datesub") {
		$form .= " selected='selected'";
	}
	$form .= ">" . _MB_SF_DATE . "</option>\n";
	
	$form .= "<option value='counter'";
	if ($options[1] == "counter") {
		$form .= " selected='selected'";
	}
	$form .= ">" . _MB_SF_HITS . "</option>\n";
	
	$form .= "<option value='weight'";
	if ($options[1] == "weight") {
		$form .= " selected='selected'";
	}
	$form .= ">" . _MB_SF_WEIGHT . "</option>\n";
	
	$form .= "</select>\n";
	
	$form .= "&nbsp;" . _MB_SF_DISP . "&nbsp;<input type='text' name='options[]' value='" . $options[2] . "' />&nbsp;" . _MB_SF_QUESTIONS . "";
	$form .= "&nbsp;<br>" . _MB_SF_CHARS . "&nbsp;<input type='text' name='options[]' value='" . $options[3] . "' />&nbsp;" . _MB_SF_LENGTH . "";
	
    $form .= "<br />"._MB_SF_SHOW_DATE."&nbsp;<input type='radio' id='options[]' name='options[]' value='1'";
	if ( $options[4] == 1 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._YES."<input type='radio' id='options[]' name='options[]' value='0'";
	if ( $options[4] == 0 ) {
		$form .= " checked='checked'";
	}
	$form .= " />&nbsp;"._NO."";	
	
	return $form;
}

?>