<?php


return [
	'empty'			=> "{{field}} must not be empty",
	'badFormat'		=> "{{field}} is invalid",
	'length'		=> "{{field}} must be between {{lenMin}} and {{lenMax}} characters long",
	'minMax'		=> "{{field}} must be between {{numMin}} and {{numMax}}",
	'int'			=> "{{field}} must be an integer",
	'float'			=> "{{field}} must be a float",
	'alpha'			=> "{{field}} must only contain letters (a-z)",
	'alphanum'		=> "{{field}} must only contain letters (a-z) and numbers (0-9)",
	'whiteSpace'	=> "{{field}} cannot contain spaces",
	'url'			=> "{{field}} must be an URL",
	'uri'			=> "{{field}} must be an URI",
	'bool'			=> "{{field}} must be a boolean (true-false)",
	'email'			=> "{{field}} must be a valid email",
	'equal'			=> "{{field}} must match {{field2}}",

	'custom' => [
		'email_taken'	=> "{{field}} is already taken"
	]
	
];
