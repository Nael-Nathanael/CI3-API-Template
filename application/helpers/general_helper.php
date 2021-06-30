<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

function setJsonResponse()
{
	header('Content-Type: application/json');
}

function returnJsonResponse($data)
{
	setJsonResponse();
	echo json_encode($data);
}

function returnQueryAsJsonResponse($query)
{
	$ci = &get_instance();

	returnJsonResponse(
		$ci->db->query($query)->result()
	);
}

function returnQueryAsSingleJsonResponse($query, $subqueryArray = array())
{
	returnJsonResponse(
		returnQueryAsSingleObject($query, $subqueryArray)
	);
}

function returnQueryAsSingleObject($query, $subqueryArray = array())
{
	$ci = &get_instance();

	$responseObject = $ci->db->query($query)->row();

	foreach ($subqueryArray as $key => $value) {
		$responseObject->$key = $ci->db->query($value)->result();
	}

	return $responseObject;
}
