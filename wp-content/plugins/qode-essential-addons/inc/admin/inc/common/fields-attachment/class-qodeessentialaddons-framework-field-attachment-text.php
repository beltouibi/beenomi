<?php

class QodeEssentialAddons_Framework_Field_Attachment_Text extends QodeEssentialAddons_Framework_Field_Attachment_Type {

	function __construct( $params ) {
		parent::__construct( $params );
	}

	public function render() {
		$html = '<input type="text" name="' . esc_attr( $this->name ) . '" value="' . esc_attr( $this->params['value'] ) . '">';

		$this->form_fields['html'] = $html;
	}
}
