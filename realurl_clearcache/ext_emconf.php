<?php

########################################################################
# Extension Manager/Repository config file for ext "realurl_clearcache".
#
# Auto generated 16-04-2010 12:30
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'RealURL: Clear cache',
	'description' => 'Adds a clear cache button for RealURL in the back-end clear cache menu.',
	'category' => 'be',
	'author' => 'Sebastiaan de Jonge (SebastiaanDeJonge.com)',
	'author_email' => 'szebi.eger@gmail.com',
	'shy' => '',
	'dependencies' => 'realurl',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => 'SebastiaanDeJonge.com',
	'version' => '1.0.2',
	'doNotLoadInFE' => 1,
	'constraints' => array(
		'depends' => array(
			'realurl' => '',
			'typo3' => '4.3.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:12:{s:9:"ChangeLog";s:4:"bd41";s:10:"README.txt";s:4:"ee2d";s:30:"class.tx_realurlclearcache.php";s:4:"f24a";s:40:"class.tx_realurlclearcache_cachemenu.php";s:4:"659a";s:12:"ext_icon.gif";s:4:"7d4e";s:17:"ext_localconf.php";s:4:"c5ae";s:13:"locallang.xml";s:4:"e8ba";s:14:"doc/manual.sxw";s:4:"577d";s:19:"doc/wizard_form.dat";s:4:"ee0b";s:20:"doc/wizard_form.html";s:4:"145e";s:15:"res/be_icon.gif";s:4:"6a13";s:20:"res/be_page_icon.gif";s:4:"077c";}',
	'suggests' => array(
	),
);

?>