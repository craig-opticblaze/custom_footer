<?php
class CustomFooter extends DataExtension {
	
	static $db = array(
        'FooterContent' => 'HTMLText',
    );
	
	public static $has_one = array(
	"Logo"=>"Image"
	);
	 
	public function getCMSFields() {
   	$this->extend('updateCMSFields', $fields);
 	return $fields;
	}
	
	public function updateCMSFields(FieldList $fields) {
	$fields->addFieldToTab('Root.Footer', new HTMLEditorField('FooterContent', 'Footer Content'));
	$fields->addFieldToTab('Root.Main', new UploadField('Logo','Company Logo'));
	} 
}

