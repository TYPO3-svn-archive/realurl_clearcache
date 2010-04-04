<?php

########################################################################
# Extension Manager/Repository config file for ext "realurl_clearcache".
#
# Auto generated 30-03-2010 12:21
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
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'realurl' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:10:{s:9:"ChangeLog";s:4:"a749";s:10:"README.txt";s:4:"ee2d";s:11:"be_icon.gif";s:4:"30fe";s:30:"class.tx_realurlclearcache.php";s:4:"e60b";s:40:"class.tx_realurlclearcache_cachemenu.php";s:4:"6df1";s:12:"ext_icon.gif";s:4:"71e7";s:17:"ext_localconf.php";s:4:"1df9";s:13:"locallang.xml";s:4:"9030";s:19:"doc/wizard_form.dat";s:4:"ee0b";s:20:"doc/wizard_form.html";s:4:"145e";}',
	'suggests' => array(
	),
);

?>