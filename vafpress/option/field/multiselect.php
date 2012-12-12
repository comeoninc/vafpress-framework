<?php

class VP_Option_Field_MultiSelect extends VP_Option_FieldMulti
{

	public function __construct()
	{
		$this->_value = array();
	}

	public static function withArray($arr)
	{
		$instance = new self();
		$instance->_basic_make($arr);
		
		return $instance;
	}

	public function render()
	{
		$this->_setup_data();
		return VP_Option_View::get_instance()->load('multiselect', $this->get_data());
	}

}

/**
 * EOF
 */