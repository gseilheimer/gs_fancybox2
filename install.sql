#*********************************************
#
# INSTALLATION
#
# Autor: 	G.Seilheimer
# Company:	contic.de
# Version: 	2.0.4
# Update:	2012-01-14
# CMS:		Redaxo 4.3.2
#
#*********************************************


#*********************************************
#
# insert values into rex_679_types
#
#*********************************************

INSERT IGNORE INTO `%TABLE_PREFIX%679_types` (`id`, `status`, `name`, `description`) 
VALUES 
(620, 1, 'fancybox_resize_100', 'RESIZE[100px]'),
(621, 1, 'fancybox_resize_200', 'RESIZE[200px]'),
(622, 1, 'fancybox_resize_300', 'RESIZE[300px]'),
(623, 1, 'fancybox_resize_450', 'RESIZE[450px]'),
(624, 1, 'fancybox_resize_600', 'RESIZE[600px]'),
(625, 1, 'fancybox_resize_800', 'RESIZE[800px]'),
(626, 1, 'fancybox_resize_950', 'RESIZE[950px]');


#*********************************************
#
# insert values into rex_679_type_effects
#
#*********************************************

INSERT IGNORE INTO `%TABLE_PREFIX%679_type_effects` (`id`, `type_id`, `effect`, `parameters`, `prior`, `updatedate`, `updateuser`, `createdate`, `createuser`)
VALUES
(620, 620, 'resize', 'a:6:{s:15:\"rex_effect_crop\";a:5:{s:21:\"rex_effect_crop_width\";s:0:\"\";s:22:\"rex_effect_crop_height\";s:0:\"\";s:28:\"rex_effect_crop_offset_width\";s:0:\"\";s:29:\"rex_effect_crop_offset_height\";s:0:\"\";s:24:\"rex_effect_crop_position\";s:13:\"middle_center\";}s:22:\"rex_effect_filter_blur\";a:3:{s:29:\"rex_effect_filter_blur_amount\";s:2:\"80\";s:29:\"rex_effect_filter_blur_radius\";s:1:\"8\";s:32:\"rex_effect_filter_blur_threshold\";s:1:\"3\";}s:25:\"rex_effect_filter_sharpen\";a:3:{s:32:\"rex_effect_filter_sharpen_amount\";s:2:\"80\";s:32:\"rex_effect_filter_sharpen_radius\";s:3:\"0.5\";s:35:\"rex_effect_filter_sharpen_threshold\";s:1:\"3\";}s:15:\"rex_effect_flip\";a:1:{s:20:\"rex_effect_flip_flip\";s:1:\"X\";}s:23:\"rex_effect_insert_image\";a:5:{s:34:\"rex_effect_insert_image_brandimage\";s:0:\"\";s:28:\"rex_effect_insert_image_hpos\";s:5:\"right\";s:28:\"rex_effect_insert_image_vpos\";s:6:\"bottom\";s:33:\"rex_effect_insert_image_padding_x\";s:3:\"-10\";s:33:\"rex_effect_insert_image_padding_y\";s:3:\"-10\";}s:17:\"rex_effect_resize\";a:4:{s:23:\"rex_effect_resize_width\";s:3:\"100\";s:24:\"rex_effect_resize_height\";s:3:\"100\";s:23:\"rex_effect_resize_style\";s:7:\"maximum\";s:31:\"rex_effect_resize_allow_enlarge\";s:11:\"not_enlarge\";}}', 1, 0, 'gseilheimer', 0, 'gseilheimer'),
(621, 621, 'resize', 'a:6:{s:15:\"rex_effect_crop\";a:5:{s:21:\"rex_effect_crop_width\";s:0:\"\";s:22:\"rex_effect_crop_height\";s:0:\"\";s:28:\"rex_effect_crop_offset_width\";s:0:\"\";s:29:\"rex_effect_crop_offset_height\";s:0:\"\";s:24:\"rex_effect_crop_position\";s:13:\"middle_center\";}s:22:\"rex_effect_filter_blur\";a:3:{s:29:\"rex_effect_filter_blur_amount\";s:2:\"80\";s:29:\"rex_effect_filter_blur_radius\";s:1:\"8\";s:32:\"rex_effect_filter_blur_threshold\";s:1:\"3\";}s:25:\"rex_effect_filter_sharpen\";a:3:{s:32:\"rex_effect_filter_sharpen_amount\";s:2:\"80\";s:32:\"rex_effect_filter_sharpen_radius\";s:3:\"0.5\";s:35:\"rex_effect_filter_sharpen_threshold\";s:1:\"3\";}s:15:\"rex_effect_flip\";a:1:{s:20:\"rex_effect_flip_flip\";s:1:\"X\";}s:23:\"rex_effect_insert_image\";a:5:{s:34:\"rex_effect_insert_image_brandimage\";s:0:\"\";s:28:\"rex_effect_insert_image_hpos\";s:5:\"right\";s:28:\"rex_effect_insert_image_vpos\";s:6:\"bottom\";s:33:\"rex_effect_insert_image_padding_x\";s:3:\"-10\";s:33:\"rex_effect_insert_image_padding_y\";s:3:\"-10\";}s:17:\"rex_effect_resize\";a:4:{s:23:\"rex_effect_resize_width\";s:3:\"200\";s:24:\"rex_effect_resize_height\";s:3:\"200\";s:23:\"rex_effect_resize_style\";s:7:\"maximum\";s:31:\"rex_effect_resize_allow_enlarge\";s:11:\"not_enlarge\";}}', 1, 0, 'gseilheimer', 0, 'gseilheimer'),
(622, 622, 'resize', 'a:6:{s:15:\"rex_effect_crop\";a:5:{s:21:\"rex_effect_crop_width\";s:0:\"\";s:22:\"rex_effect_crop_height\";s:0:\"\";s:28:\"rex_effect_crop_offset_width\";s:0:\"\";s:29:\"rex_effect_crop_offset_height\";s:0:\"\";s:24:\"rex_effect_crop_position\";s:13:\"middle_center\";}s:22:\"rex_effect_filter_blur\";a:3:{s:29:\"rex_effect_filter_blur_amount\";s:2:\"80\";s:29:\"rex_effect_filter_blur_radius\";s:1:\"8\";s:32:\"rex_effect_filter_blur_threshold\";s:1:\"3\";}s:25:\"rex_effect_filter_sharpen\";a:3:{s:32:\"rex_effect_filter_sharpen_amount\";s:2:\"80\";s:32:\"rex_effect_filter_sharpen_radius\";s:3:\"0.5\";s:35:\"rex_effect_filter_sharpen_threshold\";s:1:\"3\";}s:15:\"rex_effect_flip\";a:1:{s:20:\"rex_effect_flip_flip\";s:1:\"X\";}s:23:\"rex_effect_insert_image\";a:5:{s:34:\"rex_effect_insert_image_brandimage\";s:0:\"\";s:28:\"rex_effect_insert_image_hpos\";s:5:\"right\";s:28:\"rex_effect_insert_image_vpos\";s:6:\"bottom\";s:33:\"rex_effect_insert_image_padding_x\";s:3:\"-10\";s:33:\"rex_effect_insert_image_padding_y\";s:3:\"-10\";}s:17:\"rex_effect_resize\";a:4:{s:23:\"rex_effect_resize_width\";s:3:\"300\";s:24:\"rex_effect_resize_height\";s:3:\"300\";s:23:\"rex_effect_resize_style\";s:7:\"maximum\";s:31:\"rex_effect_resize_allow_enlarge\";s:11:\"not_enlarge\";}}', 1, 0, 'gseilheimer', 0, 'gseilheimer'),
(623, 623, 'resize', 'a:6:{s:15:\"rex_effect_crop\";a:5:{s:21:\"rex_effect_crop_width\";s:0:\"\";s:22:\"rex_effect_crop_height\";s:0:\"\";s:28:\"rex_effect_crop_offset_width\";s:0:\"\";s:29:\"rex_effect_crop_offset_height\";s:0:\"\";s:24:\"rex_effect_crop_position\";s:13:\"middle_center\";}s:22:\"rex_effect_filter_blur\";a:3:{s:29:\"rex_effect_filter_blur_amount\";s:2:\"80\";s:29:\"rex_effect_filter_blur_radius\";s:1:\"8\";s:32:\"rex_effect_filter_blur_threshold\";s:1:\"3\";}s:25:\"rex_effect_filter_sharpen\";a:3:{s:32:\"rex_effect_filter_sharpen_amount\";s:2:\"80\";s:32:\"rex_effect_filter_sharpen_radius\";s:3:\"0.5\";s:35:\"rex_effect_filter_sharpen_threshold\";s:1:\"3\";}s:15:\"rex_effect_flip\";a:1:{s:20:\"rex_effect_flip_flip\";s:1:\"X\";}s:23:\"rex_effect_insert_image\";a:5:{s:34:\"rex_effect_insert_image_brandimage\";s:0:\"\";s:28:\"rex_effect_insert_image_hpos\";s:5:\"right\";s:28:\"rex_effect_insert_image_vpos\";s:6:\"bottom\";s:33:\"rex_effect_insert_image_padding_x\";s:3:\"-10\";s:33:\"rex_effect_insert_image_padding_y\";s:3:\"-10\";}s:17:\"rex_effect_resize\";a:4:{s:23:\"rex_effect_resize_width\";s:3:\"450\";s:24:\"rex_effect_resize_height\";s:3:\"450\";s:23:\"rex_effect_resize_style\";s:7:\"maximum\";s:31:\"rex_effect_resize_allow_enlarge\";s:11:\"not_enlarge\";}}', 1, 0, 'gseilheimer', 0, 'gseilheimer'),
(624, 624, 'resize', 'a:6:{s:15:\"rex_effect_crop\";a:5:{s:21:\"rex_effect_crop_width\";s:0:\"\";s:22:\"rex_effect_crop_height\";s:0:\"\";s:28:\"rex_effect_crop_offset_width\";s:0:\"\";s:29:\"rex_effect_crop_offset_height\";s:0:\"\";s:24:\"rex_effect_crop_position\";s:13:\"middle_center\";}s:22:\"rex_effect_filter_blur\";a:3:{s:29:\"rex_effect_filter_blur_amount\";s:2:\"80\";s:29:\"rex_effect_filter_blur_radius\";s:1:\"8\";s:32:\"rex_effect_filter_blur_threshold\";s:1:\"3\";}s:25:\"rex_effect_filter_sharpen\";a:3:{s:32:\"rex_effect_filter_sharpen_amount\";s:2:\"80\";s:32:\"rex_effect_filter_sharpen_radius\";s:3:\"0.5\";s:35:\"rex_effect_filter_sharpen_threshold\";s:1:\"3\";}s:15:\"rex_effect_flip\";a:1:{s:20:\"rex_effect_flip_flip\";s:1:\"X\";}s:23:\"rex_effect_insert_image\";a:5:{s:34:\"rex_effect_insert_image_brandimage\";s:0:\"\";s:28:\"rex_effect_insert_image_hpos\";s:5:\"right\";s:28:\"rex_effect_insert_image_vpos\";s:6:\"bottom\";s:33:\"rex_effect_insert_image_padding_x\";s:3:\"-10\";s:33:\"rex_effect_insert_image_padding_y\";s:3:\"-10\";}s:17:\"rex_effect_resize\";a:4:{s:23:\"rex_effect_resize_width\";s:3:\"600\";s:24:\"rex_effect_resize_height\";s:3:\"600\";s:23:\"rex_effect_resize_style\";s:7:\"maximum\";s:31:\"rex_effect_resize_allow_enlarge\";s:11:\"not_enlarge\";}}', 1, 0, 'gseilheimer', 0, 'gseilheimer'),
(625, 625, 'resize', 'a:6:{s:15:\"rex_effect_crop\";a:5:{s:21:\"rex_effect_crop_width\";s:0:\"\";s:22:\"rex_effect_crop_height\";s:0:\"\";s:28:\"rex_effect_crop_offset_width\";s:0:\"\";s:29:\"rex_effect_crop_offset_height\";s:0:\"\";s:24:\"rex_effect_crop_position\";s:13:\"middle_center\";}s:22:\"rex_effect_filter_blur\";a:3:{s:29:\"rex_effect_filter_blur_amount\";s:2:\"80\";s:29:\"rex_effect_filter_blur_radius\";s:1:\"8\";s:32:\"rex_effect_filter_blur_threshold\";s:1:\"3\";}s:25:\"rex_effect_filter_sharpen\";a:3:{s:32:\"rex_effect_filter_sharpen_amount\";s:2:\"80\";s:32:\"rex_effect_filter_sharpen_radius\";s:3:\"0.5\";s:35:\"rex_effect_filter_sharpen_threshold\";s:1:\"3\";}s:15:\"rex_effect_flip\";a:1:{s:20:\"rex_effect_flip_flip\";s:1:\"X\";}s:23:\"rex_effect_insert_image\";a:5:{s:34:\"rex_effect_insert_image_brandimage\";s:0:\"\";s:28:\"rex_effect_insert_image_hpos\";s:5:\"right\";s:28:\"rex_effect_insert_image_vpos\";s:6:\"bottom\";s:33:\"rex_effect_insert_image_padding_x\";s:3:\"-10\";s:33:\"rex_effect_insert_image_padding_y\";s:3:\"-10\";}s:17:\"rex_effect_resize\";a:4:{s:23:\"rex_effect_resize_width\";s:3:\"800\";s:24:\"rex_effect_resize_height\";s:3:\"800\";s:23:\"rex_effect_resize_style\";s:7:\"maximum\";s:31:\"rex_effect_resize_allow_enlarge\";s:11:\"not_enlarge\";}}', 1, 0, 'gseilheimer', 0, 'gseilheimer'),
(626, 626, 'resize', 'a:6:{s:15:\"rex_effect_crop\";a:5:{s:21:\"rex_effect_crop_width\";s:0:\"\";s:22:\"rex_effect_crop_height\";s:0:\"\";s:28:\"rex_effect_crop_offset_width\";s:0:\"\";s:29:\"rex_effect_crop_offset_height\";s:0:\"\";s:24:\"rex_effect_crop_position\";s:13:\"middle_center\";}s:22:\"rex_effect_filter_blur\";a:3:{s:29:\"rex_effect_filter_blur_amount\";s:2:\"80\";s:29:\"rex_effect_filter_blur_radius\";s:1:\"8\";s:32:\"rex_effect_filter_blur_threshold\";s:1:\"3\";}s:25:\"rex_effect_filter_sharpen\";a:3:{s:32:\"rex_effect_filter_sharpen_amount\";s:2:\"80\";s:32:\"rex_effect_filter_sharpen_radius\";s:3:\"0.5\";s:35:\"rex_effect_filter_sharpen_threshold\";s:1:\"3\";}s:15:\"rex_effect_flip\";a:1:{s:20:\"rex_effect_flip_flip\";s:1:\"X\";}s:23:\"rex_effect_insert_image\";a:5:{s:34:\"rex_effect_insert_image_brandimage\";s:0:\"\";s:28:\"rex_effect_insert_image_hpos\";s:5:\"right\";s:28:\"rex_effect_insert_image_vpos\";s:6:\"bottom\";s:33:\"rex_effect_insert_image_padding_x\";s:3:\"-10\";s:33:\"rex_effect_insert_image_padding_y\";s:3:\"-10\";}s:17:\"rex_effect_resize\";a:4:{s:23:\"rex_effect_resize_width\";s:3:\"950\";s:24:\"rex_effect_resize_height\";s:3:\"950\";s:23:\"rex_effect_resize_style\";s:7:\"maximum\";s:31:\"rex_effect_resize_allow_enlarge\";s:11:\"not_enlarge\";}}', 1, 0, 'gseilheimer', 0, 'gseilheimer');


#*********************************************
#
# insert values into rex_template
#
#*********************************************

INSERT IGNORE INTO `%TABLE_PREFIX%template` (`id`, `label`, `name`, `content`, `active`, `createuser`, `updateuser`, `createdate`, `updatedate`, `attributes`, `revision`)  
VALUES (620, '', 'gs : fancybox2 (jquery)', '<link rel="stylesheet" type="text/css" href="./files/addons/gs_fancybox2/jquery.fancybox-2.0.4.css" />\r\n<script type="text/javascript" src="./files/addons/gs_fancybox2/jquery.min-1.7.1.js"></script>\r\n<script type="text/javascript" src="./files/addons/gs_fancybox2/jquery.fancybox-2.0.4.js"></script>\r\n<script type="text/javascript" src="./files/addons/gs_fancybox2/jquery.fancybox.pack-2.0.4.js"></script>\r\n<script type="text/javascript" src="./files/addons/gs_fancybox2/jquery.mousewheel.pack-3.0.6.pack.js"></script>\r\n<script type="text/javascript" src="./files/addons/gs_fancybox2/jquery.easyslider-1.7.5.js"></script>\r\n\r\n<script type="text/javascript">\r\n\r\n//ACCORDS\r\nfunction accords(content,bar) {\r\n   if (!content.length && !bar.length) return;\r\n      content.hide();\r\n   bar.click( function() {\r\n   bar.removeClass("current");\r\n   content.not(":hidden").slideUp(\'slow\');\r\n   //$(this).next().not(":visible").slideDown(\'slow\').prev().addClass("current");\r\n   var current = $(this);\r\n   $(this).next().not(":visible").slideDown(\'slow\',function() {\r\n      current.addClass("current");\r\n   });\r\n});\r\n}\r\n\r\n// TABS\r\nfunction tabs(pages) {\r\n\r\nif (!pages.length) return;\r\n\r\npages.addClass("dyn-tabs");\r\npages.first().show();\r\n\r\nvar tabNavigation = $(\'<dl id="tabs" />\').insertBefore(pages.first());\r\n\r\npages.each(function() {\r\n   var listElement = $("<dt />");\r\n   var label = $(this).attr("title") ? $(this).attr("title") : "Kein Label";\r\n   listElement.text(label);\r\n   tabNavigation.append(listElement);\r\n});\r\n\r\nvar items = tabNavigation.find("dt");\r\nitems.first().addClass("current");\r\n\r\nitems.click(function() {\r\n   items.removeClass("current");\r\n   $(this).addClass("current");\r\n   pages.hide();\r\n   pages.eq($(this).index()).fadeIn("slow");\r\n});\r\n\r\n}\r\n\r\n// TOOLTIP\r\nfunction tooltip(obj) {\r\n\r\n   if (!obj.length) return;\r\n\r\n   $("body").append(\'<div id="tooltip" />\');\r\n   var tooltip = $("#tooltip");\r\n   var title;\r\n   obj.hover(function() {				 \r\n      title = $(this).attr("title") ?\r\n      $(this).attr("title") : "No Title";			 \r\n      $(this).attr("title","");\r\n\r\n      tooltip.html(title);\r\n      tooltip.stop(true,true).delay(50).fadeIn("slow").dequeue();\r\n\r\n   },\r\n   function() {\r\n      $(this).attr("title",title);\r\n      tooltip.stop(true,true).fadeOut("slow");\r\n   }).mousemove(function(e) {\r\n\r\n   tooltip.animate({\r\n      top:e.pageY + 10,\r\n      left:e.pageX + 10\r\n   },200);\r\n   });\r\n}\r\n\r\n\r\n$(document).ready(function(){\r\n\r\ntabs($("div.tabs"));\r\n\r\naccords($(".content"),$(".bar"));\r\n\r\ntooltip($(".tooltip"));\r\n\r\n// FANCYBOX\r\n$("a.fancyboxStyleDefault").fancybox({\r\n   \'titlePosition\':\'inside\',\r\n   \'transitionIn\':\'none\',\r\n   \'transitionOut\':\'none\',\r\n   \'titleFormat\':function(title, currentArray, currentIndex, currentOpts) {\r\nreturn \'<span id="fancybox-title-inside">Image \' + (currentIndex + 1) + \' / \' + currentArray.length + (title.length ? \' : \' + title : \'\') + \'</span>\';\r\n}\r\n});\r\n\r\n$("a.fancyboxStyleSpecial-1").fancybox({\r\n   \'titlePosition\':\'inside\',\r\n   \'titleFormat\':function(title, currentArray, currentIndex, currentOpts) {\r\nreturn \'<span id="fancybox-title-inside">Image \' + (currentIndex + 1) + \' / \' + currentArray.length + (title.length ? \' : \' + title : \'\') + \'</span>\';\r\n}\r\n});\r\n\r\n$("a.fancyboxStyleSpecial-2").fancybox({\r\n   \'titlePosition\':\'inside\',\r\n   \'transitionIn\':\'elastic\',\r\n   \'transitionOut\':\'elastic\',\r\n   \'titleFormat\':function(title, currentArray, currentIndex, currentOpts) {\r\nreturn \'<span id="fancybox-title-inside">Image \' + (currentIndex + 1) + \' / \' + currentArray.length + (title.length ? \' : \' + title : \'\') + \'</span>\';\r\n}\r\n});\r\n\r\n$("a.fancyboxStyleInline-1").fancybox({\r\n   \'width\':\'75%\',\r\n   \'height\':\'75%\',\r\n   \'autoScale\':false,\r\n   \'transitionIn\':\'none\',\r\n   \'transitionOut\':\'none\',\r\n   \'type\':\'iframe\'});\r\n\r\n$("a.fancyboxStyleInline-2").fancybox({\r\n   \'width\':\'90%\',\r\n   \'height\':\'90%\',\r\n   \'autoScale\':false,\r\n   \'transitionIn\':\'none\',\r\n   \'transitionOut\':\'none\',\r\n   \'type\':\'iframe\'});\r\n\r\n$("a.fancyboxStyleInline-3").fancybox({\r\n   \'width\':980,\r\n   \'height\':600,\r\n   \'autoScale\':false,\r\n   \'transitionIn\':\'none\',\r\n   \'transitionOut\':\'none\',\r\n   \'overlayOpacity\':0.8,\r\n   \'overlayColor\': \'#000\',\r\n   \'type\':\'iframe\'});\r\n\r\n// FORM\r\n$(\'input[type="text"]\').addClass("idleField");\r\n$(\'input[type="text"]\').focus(function() {\r\n   $(this).removeClass("idleField").addClass("focusField");\r\n   if (this.value == this.defaultValue){ \r\n      this.value = \'\';\r\n   }\r\n   if(this.value != this.defaultValue){\r\n      this.select();\r\n   }\r\n});\r\n$(\'input[type="text"]\').blur(function() {\r\n   $(this).removeClass("focusField").addClass("idleField");\r\n   if ($.trim(this.value) == \'\'){\r\n      this.value = (this.defaultValue ? this.defaultValue : \'\');\r\n   }\r\n});\r\n\r\n// SLIDER\r\n$("#slider").easySlider({\r\n   auto: true,\r\n   continuous: true,\r\n   allControls: true\r\n});\r\n\r\n});\r\n</script>', 0, 'gseilheimer', 'gseilheimer', 1293566041, 1293566041, 'a:3:{s:10:"categories";a:1:{s:3:"all";s:1:"1";}s:5:"ctype";a:0:{}s:7:"modules";a:1:{i:1;a:1:{s:3:"all";s:1:"1";}}}', 0);



#*********************************************
#
# alter values into rex_template
#
#*********************************************

ALTER TABLE `%TABLE_PREFIX%template` AUTO_INCREMENT=20;

