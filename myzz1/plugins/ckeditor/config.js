/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    //config.scayt_autoStartup = false;
	config.skin = 'kama';

    config.language = 'zh-cn'; //中文
	config.font_names += '宋体/宋体;黑体/黑体;仿宋/仿宋_GB2312;楷体/楷体_GB2312;隶书/隶书;幼圆/幼圆;'; 
	//使用的工具栏 plugins/toolbar/plugin.js
	config.toolbar = 'Full'; 
	config.toolbar_Full =
	[
//		['Source','-','Save','NewPage','Preview','-','Templates'],
//		['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
        //['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
//		['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
//		['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
		['Source','-','Maximize'],['Cut','Copy','Paste','PasteText','PasteFromWord','-','SpellChecker', 'Scayt'],
		['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
		'/',
		['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		['Link','Unlink','Anchor'],['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
		'/',
		['Styles','Format','Font','FontSize'],['TextColor','BGColor'],
		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock']
	
	];

	//配置ckfinder
    config.filebrowserBrowseUrl = '../plugins/ckfinder/ckfinder.html';
    config.filebrowserImageBrowseUrl = '../plugins/ckfinder/ckfinder.html?Type=Images';
    config.filebrowserFlashBrowseUrl = '../plugins/ckfinder/ckfinder.html?Type=Flash';
    config.filebrowserUploadUrl = '../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = '../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = '../plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
