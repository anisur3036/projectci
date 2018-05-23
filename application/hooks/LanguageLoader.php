<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LanguageLoader {
	function initialize() {
		$ci = &get_instance();
		$ci->load->helper('language');
		//$ci->lang->load('message', 'bangla');

		$site_lang = $ci->db->query('select * from lang where id = 2')->row()->lang;
		if ($site_lang) {
			$ci->lang->load('message', $site_lang);
		} else {
			$ci->lang->load('message', 'english');
		}
	}
}