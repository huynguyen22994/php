/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	var url = 'http://localhost:81/dtdd/public';
	
	//chong bi loi font
	config.pasteFromWordRemoveFontStyles = false; 
	config.pasteFromWordRemoveStyles = false;
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = url + '/js/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = url + '/js/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = url + '/js/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = url +'/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = url +'/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = url +'/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
