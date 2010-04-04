<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Sebastiaan de Jonge (SebastiaanDeJonge.com) <szebi.eger@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 *
 *
 *   44: class tx_realurlclearcache
 *   50:     public static function clear()
 *
 * TOTAL FUNCTIONS: 1
 */

/**
 * Main class file for the 'RealURL: Clear cache' extension
 *
 * @author Sebastiaan de Jonge (SebastiaanDeJonge.com) <szebi.eger@gmail.com>
 * @package TYPO3
 * @subpackage tx_realurlclearcache
 */
class tx_realurlclearcache {
	/**
	 * Clears the actual RealURL cache tables inside the database (doesn't clear loggin tables)
	 *
	 * @return	void
	 */
	public static function clear() {
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_chashcache;');
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_pathcache;');
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_redirects;');
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_uniqalias;');
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_urldecodecache;');
		$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE TABLE tx_realurl_urlencodecache;');
	}
	
	public function pageIcon(&$a_params,$o_parent) {
		// Seperate all links
		$s_buttonsMarker = str_replace(
			array(
				'</a>',
				'<a ',
			),
			array(
				'</a>|',
				'|<a ',
			),
			$a_params['markers']['BUTTONLIST_RIGHT']
		);
		$a_seperatedItems = t3lib_div::trimExplode('|',$s_buttonsMarker);
		
		// Generate our own link
		$s_title = $GLOBALS['LANG']->sL('LLL:EXT:realurl_clearcache/locallang.xml:rm.clearRealUrlPageCache', true);
		$s_imagePath = $GLOBALS['TYPO3_LOADED_EXT']['realurl_clearcache']['siteRelPath'];
		if(strpos($s_imagePath,'typo3conf') !== false) $s_imagePath = '../'.$s_imagePath;
		$s_image = '<img src="'.$s_imagePath.'be_page_icon.gif" title="'.$s_title.'" alt="'.$s_title.'" />';
		$s_pageIconLink = '<a href="ajax.php?ajaxID=tx_realurlclearcache::clearRealUrlPageCache&pid='.intval(t3lib_div::_GET('id')).'">'.$s_image.'</a>';
		$a_seperatedItems[2] = $s_pageIconLink;
		
		
		$a_params['markers']['BUTTONLIST_RIGHT'] = implode('',$a_seperatedItems);
		
		//print_r($a_params);
	}
}
?>