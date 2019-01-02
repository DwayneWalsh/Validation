# Validation
Input validation with built in multi language functionality.

# Basic Example
`
/*
 * BASIC EXAMPLE
 */

$validation = new Validate;

$validation->setName('username')->setValue('My Awesome Username!')->notEmpty()->noWhiteSpace()->alpha()->length(2, 20);

$validation->validate();


if($validation->failed()) {

  echo $validation->getFirstError();
  
}



`
# Get Errors

Method No. 1
``$validation->getErrors();``

Method No. 2

``

/*
 * Error getting, method No.2
` */

$validation->getErrors(function($errors) {
  // Do whatever you want here. Loop, get last one, maybe get the second one even?
  // In this case, we'll just get all errors for 'username'
  
  die(var_dump($errors['username']));
  
});
`


# Set custom localisation

`

    // The array HAVE to exactly match the one in the class
    // {{field}} is the field name, which you set the name of in ->setName() function
    // {{lenMin}} {{lenMax}} is the lenght values which you set value of in ->length(1, 2)
    // 1 being the mix and 2 being the max
    //
    // {{numMin}} {{numMin}} is the number that the value should be between, you set them in ->minMax(1, 2)
    // 1 being the mix and 2 being the max

		$localisedResponses = array(
			'empty'			  => "{{field}} must not be empty",
			'badFormat'		=> "{{field}} is invalid",
			'length'		  => "{{field}} must be between {{lenMin}} and {{lenMax}} characters long",
			'minMax'		  => "{{field}} must be between {{numMin}} and {{numMax}}",
			'int'			    => "{{field}} must be an integer",
			'float'			  => "{{field}} must be a float",
			'alpha'			  => "{{field}} must only contain letters (a-z)",
			'alphanum'		=> "{{field}} must only contain letters (a-z) and numbers (0-9)",
			'whiteSpace'	=> "{{field}} cannot contain spaces",
			'url'			    => "{{field}} must be an URL",
			'uri'			    => "{{field}} must be an URI",
			'bool'			  => "{{field}} must be a boolean (true-false)",
			'email'			  => "{{field}} must be a valid email"
		);

    // Now just pass that array to constructor
    $validation = new Validate($localisedResponses);
    ....
`


















