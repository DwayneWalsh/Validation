<?php


/*

EXPLANATION:

function trans() is a wrapped function arround the illuminate/translation
It basically just translates from a file a given string, in this case it translates from validation.php file.

Which, can be found in this repository too... Check the illuminate/translation for more info on this 

Below is a simple registration form validation

*/




		$localisedResponses = array(
			'empty'			=> trans('validation.empty'),
			'badFormat'		=> trans('validation.badFormat'),
			'length'		=> trans('validation.length'),
			'minMax'		=> trans('validation.minMax'),
			'int'			=> trans('validation.int'),
			'float'			=> trans('validation.float'),
			'alpha'			=> trans('validation.alpha'),
			'alphanum'		=> trans('validation.alphanum'),
			'whiteSpace'	=> trans('validation.whiteSpace'),
			'url'			=> trans('validation.url'),
			'uri'			=> trans('validation.uri'),
			'bool'			=> trans('validation.bool'),
			'email'			=> trans('validation.email'),
			'equal'			=> trans('validation.equal')
		);

		$validation = new Validate($localisedResponses);
		$validation->setField('username')
					->setName(trans('signup.form.username'))
					->setValue($request->getParam('username'))
					->notEmpty()
					->alpha()
					->length(2, 20);

		$validation->setField('email')
					->setName(trans('signup.form.email'))
					->setValue($request->getParam('email'))
					->notEmpty()
					->email()
					->custom(function($data) {
						$available = User::where('email', $data->value)->first() ? false : true;
						if(!$available) {
							$data->addError(trans('validation.custom.email_taken'));
						}
					});

		$validation->setField('password')
					->setName(trans('signup.form.password'))
					->setValue($request->getParam('password'))
					->notEmpty()
					->length(6, 20);

	    $validation->setField('password_repeat')
	    			->setName(trans('signup.form.passwordAgain'))
	    			->setValue($request->getParam('password_repeat'))
	    			->equal('password', $request->getParam('password'), trans('signup.form.password'));


		if($validation->failed()) {
			echo 'We\'ve got some errors boys!';
		}
		
		echo 'Ayyy Lmao!!!';
    
    
