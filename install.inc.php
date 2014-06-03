<?php

/**
 * FANCYBOX2
 *
 * @author gilbert.seilheimer[at]contic[dot]de Gilbert Seilheimer
 * @author <a href="http://www.contic.de">www.contic.de</a>
 *
 * @package redaxo4
 * @version svn:$Id$
 */
/**
 * fancybox Lib
 * @link http://fancyapps.com/fancybox/
 * @version 2.x
 */

// AddOn-FANCYBOX2

   //////////////////////////////////////////////////////////////////////////////////
   // CONFIG
   //////////////////////////////////////////////////////////////////////////////////

   // VARs
   $page = "gs_fancybox2";

   // Installationsbedingungen pruefen
   $page_check_rex = '4.5';
   $page_check_php = 5;
   $page_check_addons = array('image_manager');
   $page_check_status = true;

   //////////////////////////////////////////////////////////////////////////////////
   // CHECKS
   //////////////////////////////////////////////////////////////////////////////////

   // REX VERSION
   $page_check_rex = $REX['VERSION'].'.'.$REX['SUBVERSION'].'.'.$REX['MINORVERSION'] = "1";
   if(version_compare($page_check_rex, $page_check_rex, '<'))
   {
      $REX['ADDON']['installmsg'][$page] = 'Dieses Addon ben&ouml;tigt Redaxo Version '.$page_check_rex.' oder h&ouml;her.';
      $REX['ADDON']['install'][$page] = 0;
      $page_check_status = false;
   }

   // PHP VERSION
   if (intval(PHP_VERSION) < $page_check_php)
   {
      $REX['ADDON']['installmsg'][$page] = 'Dieses Addon ben&ouml;tigt mind. PHP '.$page_check_php.'!';
      $REX['ADDON']['install'][$page] = 0;
      $page_check_status = false;
   }

   // CHECK ADDONS
   foreach($page_check_addons as $a)
   {
      if (!OOAddon::isInstalled($a))
      {
         $REX['ADDON']['installmsg'][$page] = '<br />Addon "'.$a.'" ist nicht installiert.  >>> <a href="index.php?page=addon&addonname='.$a.'&install=1">jetzt installieren</a> <<<';
         $page_check_status = false;
      }
      else
      {
         if (!OOAddon::isAvailable($a))
         {
            $REX['ADDON']['installmsg'][$page] = '<br />Addon "'.$a.'" ist nicht aktiviert.  >>> <a href="index.php?page=addon&addonname='.$a.'&activate=1">jetzt aktivieren</a> <<<';
            $page_check_status = false;
         }
      }
   }

   //////////////////////////////////////////////////////////////////////////////////
   // DUMP
   //////////////////////////////////////////////////////////////////////////////////

   # $uninstall = dirname(__FILE__) . '/uninstall.sql';
   # rex_install_dump($uninstall);


   //////////////////////////////////////////////////////////////////////////////////
   // UPDATE/INSERT (DB)
   //////////////////////////////////////////////////////////////////////////////////

   $sql_table = $REX['TABLE_PREFIX']."template";

   $sql = rex_sql::factory();
   $sql->debugsql = 0; //Ausgabe Query
   $sql->setQuery("SELECT * FROM $sql_table WHERE name LIKE '%addon gs_fancybox2 (jquery)%'");
   $sql_id = $sql->getValue("id");
   $sql->setTable($sql_table);

   if( $sql->getRows() )
   {
      $sql->setWhere("id = $sql_id");
      $sql->setValue("content", "<!-- GS:JQUERY-START -->\r\n<script type=\"text/javascript\" src=\"./redaxo/media/jquery.min.js\"></script>\r\n<!-- GS:JQUERY-ENDE -->\r\n\r\n<!-- GS:FANCYBOX2-START -->\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"./files/addons/gs_fancybox2/jquery.fancybox.css\" media=\"screen, projection, print\" />\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox.js\"></script>\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox.pack.js\">\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.mousewheel.pack.js\"></script>\r\n<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"./files/addons/gs_fancybox2/jquery.easyslider.css\" media=\"screen, projection, print\" /> -->\r\n<!-- <script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.easyslider.js\"></script> -->\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"./files/addons/gs_fancybox2/jquery.fancybox-buttons.css\" media=\"screen, projection, print\" />\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox-buttons.js\"></script>\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"./files/addons/gs_fancybox2/jquery.fancybox-thumbs.css\" media=\"screen, projection, print\" />\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox-thumbs.js\"></script>\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox-media.js\"></script>\r\n<!-- GS:FANCYBOX2-ENDE -->\r\n\r\n<!-- GS:FANCYBOX2-JS-START -->\r\n<script type=\"text/javascript\">\r\n\r\n\r\n//ACCORDS\r\nfunction accords(content,bar) {\r\n   if (!content.length && !bar.length) return;\r\n   content.hide();\r\n   bar.click( function() {\r\n      bar.removeClass(\"current\");\r\n      content.not(\":hidden\").slideUp(\'slow\');\r\n      //$(this).next().not(\":visible\").slideDown(\'slow\').prev().addClass(\"current\");\r\n      var current = $(this);\r\n      $(this).next().not(\":visible\").slideDown(\'slow\',function() {\r\n         current.addClass(\"current\");\r\n      });\r\n   });\r\n}\r\n\r\n\r\n// TABS\r\nfunction tabs(pages) {\r\n   if (!pages.length) return;\r\n\r\n   pages.addClass(\"dyn-tabs\");\r\n   pages.first().show();\r\n\r\n   var tabNavigation = $(\'<dl id=\"tabs\" />\').insertBefore(pages.first());\r\n\r\n   pages.each(function() {\r\n      var listElement = $(\"<dt />\");\r\n      var label = $(this).attr(\"title\") ? $(this).attr(\"title\") : \"Kein Label\";\r\n      listElement.text(label);\r\n      tabNavigation.append(listElement);\r\n   });\r\n\r\n   var items = tabNavigation.find(\"dt\");\r\n   items.first().addClass(\"current\");\r\n\r\n   items.click(function() {\r\n      items.removeClass(\"current\");\r\n      $(this).addClass(\"current\");\r\n      pages.hide();\r\n      pages.eq($(this).index()).fadeIn(\"slow\");\r\n   });\r\n}\r\n\r\n\r\n// TOOLTIP\r\nfunction tooltip(obj) {\r\n   if (!obj.length) return;\r\n\r\n   $(\"body\").append(\'<div id=\"tooltip\" />\');\r\n   var tooltip = $(\"#tooltip\");\r\n   var title;\r\n   obj.hover(function() {\r\n         title = $(this).attr(\"title\") ?\r\n            $(this).attr(\"title\") : \"No Title\";\r\n         $(this).attr(\"title\",\"\");\r\n\r\n         tooltip.html(title);\r\n         tooltip.stop(true,true).delay(50).fadeIn(\"slow\").dequeue();\r\n\r\n      },\r\n      function() {\r\n         $(this).attr(\"title\",title);\r\n         tooltip.stop(true,true).fadeOut(\"slow\");\r\n      }).mousemove(function(e) {\r\n\r\n         tooltip.animate({\r\n            top:e.pageY + 10,\r\n            left:e.pageX + 10\r\n         },200);\r\n      });\r\n}\r\n\r\n\r\n// SCROLLTOP\r\nfunction scrollToTop() {\r\n   $(\".scrollToTop\").addClass(\"scrollToTop-js\").hide();\r\n\r\n   var scrollPos;\r\n   var windowH = $(window).innerHeight();\r\n	\r\n   $(window).resize(function() {\r\n      windowH = $(window).innerHeight();\r\n   });\r\n	\r\n   $(window).scroll(function () {\r\n      scrollPos = $(this).scrollTop();\r\n			\r\n      if ($(this).scrollTop() > 500 ) {\r\n         if ($(\".scrollToTop\").is(\":hidden\")) {\r\n            $(\".scrollToTop\").fadeIn();\r\n         }\r\n         $(\".scrollToTop\").css({\"top\":scrollPos + windowH - 300});\r\n      } else {\r\n         if ($(\".scrollToTop\").is(\":visible\")) {\r\n            $(\".scrollToTop\").fadeOut();\r\n         }\r\n      }//end if\r\n   });\r\n\r\n   $(\".scrollToTop a\").click(function (e) {\r\n      e.preventDefault();\r\n      $(\"body,html\").animate({ scrollTop: 0}, \"slow\",\"swing\", function() {\r\n         $(\".scrollToTop a\").blur();\r\n      });\r\n   });\r\n}//end function\r\n\r\n\r\n// FORMTEXT\r\nfunction formText() {\r\n   $(\'input[type=\"text\"]\').addClass(\"idleField\");\r\n   $(\'input[type=\"text\"]\').focus(function() {\r\n      $(this).removeClass(\"idleField\").addClass(\"focusField\");\r\n      if (this.value == this.defaultValue){\r\n         this.value = \'\';\r\n      }\r\n      if(this.value != this.defaultValue){\r\n         this.select();\r\n      }\r\n   });\r\n   $(\'input[type=\"text\"]\').blur(function() {\r\n      $(this).removeClass(\"focusField\").addClass(\"idleField\");\r\n      if ($.trim(this.value) == \'\'){\r\n         this.value = (this.defaultValue ? this.defaultValue : \'\');\r\n      }\r\n   });\r\n}//end function\r\n\r\n\r\n// EASYSLIDER\r\nfunction easySlider(obj) {\r\n   if(!obj.length) return;	//Wenn obj auf Seite nicht vorhanden, dann Funktion verlassen\r\n	\r\n   obj.easySlider({\r\n      auto: true,\r\n      continuous: false,\r\n      vertical:false,\r\n      allControls: true,\r\n      speed:800,\r\n      pause:9000000\r\n   });\r\n}//end function\r\n\r\n\r\n// FANCYBOX\r\nfunction fancyBoxDefault(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      helpers : {\r\n         title : {\r\n            type : \'over\'\r\n         }\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxSpecial(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'elastic\',\r\n      openSpeed  : 150,\r\n      closeEffect : \'elastic\',\r\n      openSpeed  : 150,\r\n      closeClick : true,\r\n      helpers : {\r\n         title : {\r\n            type : \'over\'\r\n         }\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxGalerieSpecial1(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      helpers : {\r\n         title : {\r\n            type : \'over\'\r\n         }, \r\n         buttons	: {}\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxGalerieSpecial2(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      helpers : {\r\n         title : {\r\n            type : \'over\'\r\n         }, \r\n         thumbs	: {\r\n            width : 50,\r\n            height	: 50\r\n         }\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxInlineDefault(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      closeClick : true,\r\n      maxWidth : 960,\r\n      maxHeight : 600,\r\n      fitToView	: false,\r\n      width	 : \'85%\',\r\n      height : \'85%\',\r\n      autoSize	: false\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxInlineSpecial(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      closeClick : true,\r\n      maxWidth : 960,\r\n      maxHeight : 600,\r\n      fitToView	: false,\r\n      width	 : \'85%\',\r\n      height : \'85%\',\r\n      autoSize	: false,\r\n      helpers : {\r\n         media : {}\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\n// READY - START\r\n$(document).ready(function() {\r\n\r\n   // Call - TABS\r\n   tabs($(\"div.tabs\"));\r\n\r\n   // Call - ACCORDS\r\n   accords($(\".content\"),$(\".bar\"));\r\n\r\n   // Call - TOOLTIP\r\n   //tooltip($(\".tooltip\"));\r\n\r\n   // Call - SCROLLTOP\r\n   scrollToTop();\r\n   \r\n   // Call - EASYSLIDER\r\n   //easySlider($(\"#slider\"));\r\n   \r\n   // Call - FORM\r\n   //formText();\r\n   \r\n   // Call - FANCYBOX\r\n   fancyBoxDefault($(\"a.fancyboxStyleDefault\"));\r\n   fancyBoxSpecial($(\"a.fancyboxStyleSpecial\"));\r\n   fancyBoxGalerieSpecial1($(\"a.fancyboxStyleGalerieSpecial-1\"));\r\n   fancyBoxGalerieSpecial2($(\"a.fancyboxStyleGalerieSpecial-2\"));\r\n   fancyBoxInlineDefault($(\"a.fancyboxStyleInlineDefault\"));\r\n   fancyBoxInlineSpecial($(\"a.fancyboxStyleInlineSpecial\"));\r\n\r\n});\r\n// Ende ready function()\r\n\r\n</script> \r\n<!-- GS:FANCYBOX2-JS-ENDE -->");

      if ( $sql->update() )
      {
         echo "Zeile mit id $sql_id erfolgreich aktuallisiert.";
      }
   }
   else
   {
      $sql->setValue("name", "addon gs_fancybox2 (jquery)");
      $sql->setValue("content", "<!-- GS:JQUERY-START -->\r\n<script type=\"text/javascript\" src=\"./redaxo/media/jquery.min.js\"></script>\r\n<!-- GS:JQUERY-ENDE -->\r\n\r\n<!-- GS:FANCYBOX2-START -->\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"./files/addons/gs_fancybox2/jquery.fancybox.css\" media=\"screen, projection, print\" />\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox.js\"></script>\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox.pack.js\">\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.mousewheel.pack.js\"></script>\r\n<!-- <link rel=\"stylesheet\" type=\"text/css\" href=\"./files/addons/gs_fancybox2/jquery.easyslider.css\" media=\"screen, projection, print\" /> -->\r\n<!-- <script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.easyslider.js\"></script> -->\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"./files/addons/gs_fancybox2/jquery.fancybox-buttons.css\" media=\"screen, projection, print\" />\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox-buttons.js\"></script>\r\n<link rel=\"stylesheet\" type=\"text/css\" href=\"./files/addons/gs_fancybox2/jquery.fancybox-thumbs.css\" media=\"screen, projection, print\" />\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox-thumbs.js\"></script>\r\n<script type=\"text/javascript\" src=\"./files/addons/gs_fancybox2/jquery.fancybox-media.js\"></script>\r\n<!-- GS:FANCYBOX2-ENDE -->\r\n\r\n<!-- GS:FANCYBOX2-JS-START -->\r\n<script type=\"text/javascript\">\r\n\r\n\r\n//ACCORDS\r\nfunction accords(content,bar) {\r\n   if (!content.length && !bar.length) return;\r\n   content.hide();\r\n   bar.click( function() {\r\n      bar.removeClass(\"current\");\r\n      content.not(\":hidden\").slideUp(\'slow\');\r\n      //$(this).next().not(\":visible\").slideDown(\'slow\').prev().addClass(\"current\");\r\n      var current = $(this);\r\n      $(this).next().not(\":visible\").slideDown(\'slow\',function() {\r\n         current.addClass(\"current\");\r\n      });\r\n   });\r\n}\r\n\r\n\r\n// TABS\r\nfunction tabs(pages) {\r\n   if (!pages.length) return;\r\n\r\n   pages.addClass(\"dyn-tabs\");\r\n   pages.first().show();\r\n\r\n   var tabNavigation = $(\'<dl id=\"tabs\" />\').insertBefore(pages.first());\r\n\r\n   pages.each(function() {\r\n      var listElement = $(\"<dt />\");\r\n      var label = $(this).attr(\"title\") ? $(this).attr(\"title\") : \"Kein Label\";\r\n      listElement.text(label);\r\n      tabNavigation.append(listElement);\r\n   });\r\n\r\n   var items = tabNavigation.find(\"dt\");\r\n   items.first().addClass(\"current\");\r\n\r\n   items.click(function() {\r\n      items.removeClass(\"current\");\r\n      $(this).addClass(\"current\");\r\n      pages.hide();\r\n      pages.eq($(this).index()).fadeIn(\"slow\");\r\n   });\r\n}\r\n\r\n\r\n// TOOLTIP\r\nfunction tooltip(obj) {\r\n   if (!obj.length) return;\r\n\r\n   $(\"body\").append(\'<div id=\"tooltip\" />\');\r\n   var tooltip = $(\"#tooltip\");\r\n   var title;\r\n   obj.hover(function() {\r\n         title = $(this).attr(\"title\") ?\r\n            $(this).attr(\"title\") : \"No Title\";\r\n         $(this).attr(\"title\",\"\");\r\n\r\n         tooltip.html(title);\r\n         tooltip.stop(true,true).delay(50).fadeIn(\"slow\").dequeue();\r\n\r\n      },\r\n      function() {\r\n         $(this).attr(\"title\",title);\r\n         tooltip.stop(true,true).fadeOut(\"slow\");\r\n      }).mousemove(function(e) {\r\n\r\n         tooltip.animate({\r\n            top:e.pageY + 10,\r\n            left:e.pageX + 10\r\n         },200);\r\n      });\r\n}\r\n\r\n\r\n// SCROLLTOP\r\nfunction scrollToTop() {\r\n   $(\".scrollToTop\").addClass(\"scrollToTop-js\").hide();\r\n\r\n   var scrollPos;\r\n   var windowH = $(window).innerHeight();\r\n	\r\n   $(window).resize(function() {\r\n      windowH = $(window).innerHeight();\r\n   });\r\n	\r\n   $(window).scroll(function () {\r\n      scrollPos = $(this).scrollTop();\r\n			\r\n      if ($(this).scrollTop() > 500 ) {\r\n         if ($(\".scrollToTop\").is(\":hidden\")) {\r\n            $(\".scrollToTop\").fadeIn();\r\n         }\r\n         $(\".scrollToTop\").css({\"top\":scrollPos + windowH - 300});\r\n      } else {\r\n         if ($(\".scrollToTop\").is(\":visible\")) {\r\n            $(\".scrollToTop\").fadeOut();\r\n         }\r\n      }//end if\r\n   });\r\n\r\n   $(\".scrollToTop a\").click(function (e) {\r\n      e.preventDefault();\r\n      $(\"body,html\").animate({ scrollTop: 0}, \"slow\",\"swing\", function() {\r\n         $(\".scrollToTop a\").blur();\r\n      });\r\n   });\r\n}//end function\r\n\r\n\r\n// FORMTEXT\r\nfunction formText() {\r\n   $(\'input[type=\"text\"]\').addClass(\"idleField\");\r\n   $(\'input[type=\"text\"]\').focus(function() {\r\n      $(this).removeClass(\"idleField\").addClass(\"focusField\");\r\n      if (this.value == this.defaultValue){\r\n         this.value = \'\';\r\n      }\r\n      if(this.value != this.defaultValue){\r\n         this.select();\r\n      }\r\n   });\r\n   $(\'input[type=\"text\"]\').blur(function() {\r\n      $(this).removeClass(\"focusField\").addClass(\"idleField\");\r\n      if ($.trim(this.value) == \'\'){\r\n         this.value = (this.defaultValue ? this.defaultValue : \'\');\r\n      }\r\n   });\r\n}//end function\r\n\r\n\r\n// EASYSLIDER\r\nfunction easySlider(obj) {\r\n   if(!obj.length) return;	//Wenn obj auf Seite nicht vorhanden, dann Funktion verlassen\r\n	\r\n   obj.easySlider({\r\n      auto: true,\r\n      continuous: false,\r\n      vertical:false,\r\n      allControls: true,\r\n      speed:800,\r\n      pause:9000000\r\n   });\r\n}//end function\r\n\r\n\r\n// FANCYBOX\r\nfunction fancyBoxDefault(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      helpers : {\r\n         title : {\r\n            type : \'over\'\r\n         }\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxSpecial(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'elastic\',\r\n      openSpeed  : 150,\r\n      closeEffect : \'elastic\',\r\n      openSpeed  : 150,\r\n      closeClick : true,\r\n      helpers : {\r\n         title : {\r\n            type : \'over\'\r\n         }\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxGalerieSpecial1(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      helpers : {\r\n         title : {\r\n            type : \'over\'\r\n         }, \r\n         buttons	: {}\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxGalerieSpecial2(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      helpers : {\r\n         title : {\r\n            type : \'over\'\r\n         }, \r\n         thumbs	: {\r\n            width : 50,\r\n            height	: 50\r\n         }\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxInlineDefault(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      closeClick : true,\r\n      maxWidth : 960,\r\n      maxHeight : 600,\r\n      fitToView	: false,\r\n      width	 : \'85%\',\r\n      height : \'85%\',\r\n      autoSize	: false\r\n   });\r\n	\r\n}//end function\r\n\r\nfunction fancyBoxInlineSpecial(obj) {\r\n   if(!obj.length) return;\r\n	\r\n   obj.fancybox({\r\n      openEffect : \'none\',\r\n      closeEffect : \'none\',\r\n      closeClick : true,\r\n      maxWidth : 960,\r\n      maxHeight : 600,\r\n      fitToView	: false,\r\n      width	 : \'85%\',\r\n      height : \'85%\',\r\n      autoSize	: false,\r\n      helpers : {\r\n         media : {}\r\n      }\r\n   });\r\n	\r\n}//end function\r\n\r\n// READY - START\r\n$(document).ready(function() {\r\n\r\n   // Call - TABS\r\n   tabs($(\"div.tabs\"));\r\n\r\n   // Call - ACCORDS\r\n   accords($(\".content\"),$(\".bar\"));\r\n\r\n   // Call - TOOLTIP\r\n   //tooltip($(\".tooltip\"));\r\n\r\n   // Call - SCROLLTOP\r\n   scrollToTop();\r\n   \r\n   // Call - EASYSLIDER\r\n   //easySlider($(\"#slider\"));\r\n   \r\n   // Call - FORM\r\n   //formText();\r\n   \r\n   // Call - FANCYBOX\r\n   fancyBoxDefault($(\"a.fancyboxStyleDefault\"));\r\n   fancyBoxSpecial($(\"a.fancyboxStyleSpecial\"));\r\n   fancyBoxGalerieSpecial1($(\"a.fancyboxStyleGalerieSpecial-1\"));\r\n   fancyBoxGalerieSpecial2($(\"a.fancyboxStyleGalerieSpecial-2\"));\r\n   fancyBoxInlineDefault($(\"a.fancyboxStyleInlineDefault\"));\r\n   fancyBoxInlineSpecial($(\"a.fancyboxStyleInlineSpecial\"));\r\n\r\n});\r\n// Ende ready function()\r\n\r\n</script> \r\n<!-- GS:FANCYBOX2-JS-ENDE -->");

      if ( $sql->insert() )
      {
         echo "Zeile mit id $sql_id erfolgreich eingetragen.";
      }
   }

   //////////////////////////////////////////////////////////////////////////////////
   // INSTALL
   //////////////////////////////////////////////////////////////////////////////////
   if ($page_check_status)
   {
      $REX['ADDON']['install'][$page] = TRUE;
   }

?>