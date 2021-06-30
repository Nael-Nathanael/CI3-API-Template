<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Echoing extends CI_Controller
{

	public function index()
	{
		returnJsonResponse(
			array(
				"get" => $_GET,
				"post" => $_POST,
				"file" => $_FILES,
				"server" => $_SERVER
			)
		);
	}
}
