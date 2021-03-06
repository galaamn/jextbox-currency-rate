<?php

/*------------------------------------------------------------------------
# JExtBOX Currency Rate
# ------------------------------------------------------------------------
# author    Galaa
# copyright Copyright (C) 2013 Galaa. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl.html
# Websites: http://galaa.mn
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die('Restricted access');

switch($params->get('bank', 1)){
	case 1: // ХААн банк
		$params->get('language', 0) ? $language = 'en' : $language = 'mn';
		$src = 'https://www.khanbank.com/'.$language.'/home/ratesForSites';
		break;
	case 2: // Голомт банк
		$params->get('language', 0) ? $language = 'en' : $language = 'mn';
		$src = 'http://www.golomtbank.com/'.$language.'/home/ratesForSites';
		break;
	case 3: // ХХБ
		$params->get('language', 0) ? $language = 'en' : $language = 'mn';
		$src = 'http://www.tdbm.mn/script.php?mod=rate&ln='.$language;
		break;
	default: // Монгол Банк
		$params->get('language', 0) ? $language = '&currency_title=Currency&currency_rate_title=Rate&source=Source' : $language = '';
		$src = 'http://monxansh.appspot.com/xansh.html?currency=USD|EUR|JPY|GBP|RUB|CNY|KRW'.$language;
		break;
}

?>

<div class="jextboxcurrencyrate<?php echo $moduleclass_sfx; ?>">
	<iframe
		style="<?php echo $params->get('css_style', 'width:100%;height:200px;border:none;overflow:hidden;margin:0;'); ?>" 
		src="<?php echo $src; ?>">
    </iframe>
</div>
