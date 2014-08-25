<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * NSM Publish Hints Fieldtype
 *
 * @package			NsmPublishHints
 * @version			1.0.2
 * @author			Leevi Graham <http://leevigraham.com> - Technical Director, Newism
 * @copyright 		Copyright (c) 2007-2011 Newism <http://newism.com.au>
 * @license 		Commercial - please see LICENSE file included with this distribution
 * @link			http://ee-garage.com/nsm-publish-hints
 * @see				http://expressionengine.com/public_beta/docs/development/fieldtypes.html
 */
class NSM_publish_hints_ft extends EE_Fieldtype
{
	/**
	 * Field info - Required
	 * 
	 * @access public
	 * @var array
	 */
	public $info = array(
		'name'		=> 'NSM Publish Hints',
		'version'	=> '1.0.2'
	);

	public $field_id;
	public $field_name;
	public $EE;

	/**
	 * The fieldtype global settings array
	 * 
	 * @access public
	 * @var array
	 */
	public $settings = array('css'=> '');
	public $has_global_settings = true;

	/**
	 * The field type - used for form field prefixes. Must be unique and match the class name. Set in the constructor
	 * 
	 * @access private
	 * @var string
	 */
	public $field_type = '';


	/**
	 * Constructor
	 * 
	 * @access public
	 */
	public function __construct()
	{
		parent::__construct();
		$this->field_type = strtolower(substr(__CLASS__, 0, -3));
	}	

	/**
	 * Replaces the custom field tag
	 * 
	 * @access public
	 * @param $data string Contains the field data (or prepped data, if using pre_process)
	 * @param $params array Contains field parameters (if any)
	 * @param $tagdata mixed Contains data between tag (for tag pairs) FALSE for single tags
	 * @return string The HTML replacing the tag
	 * 
	 */
	public function replace_tag($data, $params = FALSE, $tagdata = FALSE)
	{
		return "";
	}

	/**
	 * Install the fieldtype
	 *
	 * @return array The default settings for the fieldtype
	 */
	public function install()
	{
		//return array("css" => ".nsm-publish-hints{border:1px dotted #ccc; margin-top:9px; padding:10px}");
	}

	/**
	 * Display the field in the publish form
	 * 
	 * @access public
	 * @param $data String Contains the current field data. Blank for new entries.
	 * @return String The custom field HTML
	 */
	public function display_field($data)
	{
		$EE = get_instance();
		$theme_url = (rtrim($EE->config->item('theme_folder_url'), '/')) . '/third_party/' . $this->field_type;
		$EE->cp->add_to_head('<link rel="stylesheet" href="'.$theme_url.'/styles/custom_field.css" type="text/css" charset="utf-8" />');

		if(isset($this->settings['css']) && !empty($this->settings['css']))
			$EE->cp->add_to_head('<style type="text/css" media="screen">'.$this->settings['css'].'</style>');

		$hints = isset($this->settings["field_publishing_hints"]) ? $this->settings["field_publishing_hints"] : FALSE;
		return "<div class='nsm-publish-hints'>{$hints}</div>";
	}

	/**
	 * Publish form validation
	 * 
	 * @access public
	 * @param $data array Contains the submitted field data.
	 * @return mixed TRUE or an error message
	 */
	public function validate($data)
	{
		return TRUE;
	}


	/**
	 * Display a global settings page. The current available global settings are in $this->settings.
	 *
	 * @access public
	 * @return string The global settings form HTML
	 */
	public function display_global_settings()
	{
		$EE = get_instance();
		$vars["css"] = isset($this->settings["css"]) ? $this->settings["css"] : "";
		$vars["input_prefix"] = __CLASS__;
		return $EE->load->view('/fieldtype/settings', $vars, TRUE);
	}
	
	/**
	 * Display the settings form for each custom field
	 * 
	 * @access public
	 * @param $data mixed Not sure what this data is yet :S
	 * @return string Override the field custom settings with custom html
	 */
	public function display_settings($field_settings)
	{
		if(!isset($field_settings['field_publishing_hints'])) return FALSE;
		$r = "<div id='nsm-publish-hints' style='display:none'>{$field_settings['field_publishing_hints']}</div>\n";
		$r .= '<script type="text/javascript" charset="utf-8">$("#field_instructions").text($("#nsm-publish-hints").html());</script>';
		return $r;
	}

	/**
	 * Save the global settngs
	 *
	 * @access public
	 * @return array The new global settings
	 */
	 public function save_global_settings()
	 {
		if(!is_array($this->settings))
			$this->settings = array();

	 	$new_settings = array_merge($this->settings, $this->EE->input->post(__CLASS__));
	 	return $new_settings;
	 }

	/**
	 * Save the custom field settings
	 * 
	 * @param $data array The submitted post data.
	 * @return array Field settings
	 */
	public function save_settings($data)
	{
		$field_settings = $this->EE->input->post(__CLASS__);
		$field_settings['field_publishing_hints'] = $data['field_instructions'];
		$field_settings['field_instructions'] = '';

		// Force formatting
		$field_settings['field_fmt'] = 'none';
		$field_settings['field_show_fmt'] = 'n';
		$field_settings['field_type'] = $this->field_type;

		// Cleanup
		unset($_POST[__CLASS__]);
		foreach (array_keys($field_settings) as $setting)
		{
			if (isset($_POST[__CLASS__."_".$setting]))
				unset($_POST[__CLASS__."_".$setting]);
		}

		return $field_settings;
	}
}
//END CLASS
