<?php

use Coolpraz\PhpBlade\PhpBlade;

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * My_Controller
 */
class My_Controller extends CI_Controller {

	protected $views = APPPATH . 'views';
	protected $cache = APPPATH . 'cache';
	protected $models = APPPATH . 'models';
	protected $blade;

	public function __construct() {
		parent::__construct();
		$this->blade = new PhpBlade($this->views, $this->cache);
	}

}