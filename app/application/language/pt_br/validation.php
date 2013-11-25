<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"       => "O :attribute tem que ser aceito.",
	"active_url"     => "O :attribute não é uma URL válida.",
	"after"          => "O :attribute tem que ser uma data após :date.",
	"alpha"          => "O :attribute só pode conter letras.",
	"alpha_dash"     => "O :attribute só pode conter letras, números, e traços.",
	"alpha_num"      => "O :attribute só pode conter letras e números.",
	"before"         => "O :attribute tem que ser uma data antes de :date.",
	"between"        => array(
		"numeric" => "O :attribute tem que estar entre :min - :max.",
		"file"    => "O :attribute tem que estar entre :min - :max kilobytes.",
		"string"  => "O :attribute tem que estar entre :min - :max caracteres.",
	),
	"confirmed"      => "O :attribute confirmação não bate.",
	"different"      => "O :attribute e :other tem que ser diferentes.",
	"email"          => "O :attribute formato é inválido.",
	"exists"         => "O selected :attribute é inválido.",
	"image"          => "O :attribute tem que ser uma imagem.",
	"in"             => "O selected :attribute é inválido.",
	"integer"        => "O :attribute tem que ser um inteiro.",
	"ip"             => "O :attribute tem que ser um endereço de IP válido.",
	"match"          => "O :attribute formato é inválido.",
	"max"            => array(
		"numeric" => "O :attribute tem que ser menor que :max.",
		"file"    => "O :attribute tem que ser menor que :max kilobytes.",
		"string"  => "O :attribute tem que ser menor que :max caracteres.",
	),
	"mimes"          => "O :attribute tem que ser um arquivo do tipo: :values.",
	"min"            => array(
		"numeric" => "O :attribute tem que ser no mínimo :min.",
		"file"    => "O :attribute tem que ser no mínimo :min kilobytes.",
		"string"  => "O :attribute tem que ser no mínimo :min caracteres.",
	),
	"not_in"         => "O selected :attribute é inválido.",
	"numeric"        => "O :attribute tem que ser um número.",
	"required"       => "O :attribute campo é requerido.",
	"same"           => "O :attribute e :other não batem.",
	"size"           => array(
		"numeric" => "O :attribute tem que ser :size.",
		"file"    => "O :attribute tem que ser :size kilobyte.",
		"string"  => "O :attribute tem que ser :size caracteres.",
	),
	"unique"         => "O :attribute já foi usado.",
	"url"            => "O :attribute formato é inválido.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(),

);