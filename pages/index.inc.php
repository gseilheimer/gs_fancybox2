<?php

 /** 
 * FANCYBOX
 *
 * @author gilbert.seilheimer@contic.de
 *
 * @package redaxo4
 * @version svn:$Id$
 */

	// AddOn-FANCYBOX

	//////////////////////////////////////////////////////////////////////////////////
	// CONFIG
	//////////////////////////////////////////////////////////////////////////////////

	// VARs
	$addon_name = "gs_fancybox2";

	// Sprachdateien anhaengen
	if(TRUE == $REX['REDAXO'])
	{
		$I18N->appendFile($REX['INCLUDE_PATH'].'/addons/'.$addon_name.'/lang/');
	}
	
	//////////////////////////////////////////////////////////////////////////////////
	// SUBPAGES
	//////////////////////////////////////////////////////////////////////////////////
	
	require $REX['INCLUDE_PATH'].'/layout/top.php';

	$page 		= rex_request('page', 'string');
	$subpage 	= rex_request('subpage', 'string');
	$func    	= rex_request('func', 'string');
	$oid     	= rex_request('oid', 'int');
	
	rex_title($I18N->msg("addon_name"),$REX['ADDON'][$page]['SUBPAGES']);
	
	switch($subpage)
	{
	  	case 'setup':
	  	{
	    	break;
	  	}
	  	case 'modul_image':
	  	{
	    	break;
		}
	  	case 'modul_galery':
	  	{
	    	break;
		}
		default:
		{
			$subpage = "readme";
		}
	}
	
	require $REX['INCLUDE_PATH'].'/addons/'.$addon_name.'/pages/'.$subpage.'.inc.php';
	
	require $REX['INCLUDE_PATH'].'/layout/bottom.php';
?>