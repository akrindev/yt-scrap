<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class I_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}

		function in($data)
		{
			$this->db->insert('sitemap',$data);
		}


}