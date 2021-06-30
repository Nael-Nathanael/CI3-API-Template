<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SubrouteEcho extends CI_Controller
{

	public function index()
	{
		returnJsonResponse(
			array(
				"message" => "Subroute Echo",
				"get" => $_GET,
				"post" => $_POST,
				"file" => $_FILES,
				"server" => $_SERVER
			)
		);
	}
}
