<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => ":attribute kabul edilebilir olmalıdır.",
	"active_url"           => ":attribute geçerli bir URL olmalıdır.",
	"after"                => ":attribute şundan daha eski bir tarih olmalıdır. (:date)",
	"alpha"                => ":attribute sadece harflerden oluşmalıdır.",
	"alpha_dash"           => ":attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.",
	"alpha_num"            => ":attribute sadece harfler ve rakamlardan oluşmalıdır.",
	"array"                => ":attribute dizi olmalıdır.",
	"before"               => ":attribute şundan daha önceki bir tarih olmalıdır. (:date)",
	"between"              => array(
		"numeric" => ":attribute :min ve :max arasında olmalıdır.",
		"file"    => ":attribute :min ve :max arasındaki kilobayt değeri olmalıdır.",
		"string"  => ":attribute :min ve :max arasındaki karakterden oluşmalıdır.",
		"array"   => ":attribute :min ve :max arasındaki nesneye sahip olmalıdır.",
	),
	"confirmed"            => ":attribute tekrarı ile eşleşmiyor.",
	"date"                 => ":attribute geçerli bir tarih olmalıdır.",
	"date_format"          => ":attribute :format biçimi ile eşleşmiyor.",
	"different"            => ":attribute ile :other birbirinden farklı olmalıdır.",
	"digits"               => ":attribute :digits rakam olmalıdır.",
	"digits_between"       => ":attribute :min ile :max arasındaki bir rakam olmalıdır.",
	"email"                => ":attribute geçerli bir e-posta adresi olmalıdır.",
	"exists"               => "Seçili :attribute geçersiz.",
	"image"                => ":attribute alanı resim dosyası olmalıdır.",
	"in"                   => "The selected :attribute is invalid.",
	"integer"              => ":attribute rakam olmalıdır.",
	"ip"                   => ":attribute geçerli bir IP adresi olmalıdır.",
	"max"                  => array(
		"numeric" => "The :attribute may not be greater than :max.",
		"file"    => "The :attribute may not be greater than :max kilobytes.",
		"string"  => "The :attribute may not be greater than :max characters.",
		"array"   => "The :attribute may not have more than :max items.",
	),
	"mimes"                => ":attribute dosya biçimi :values olmalıdır.",
	"min"                  => array(
		"numeric" => "The :attribute must be at least :min.",
		"file"    => "The :attribute must be at least :min kilobytes.",
		"string"  => "The :attribute must be at least :min characters.",
		"array"   => "The :attribute must have at least :min items.",
	),
	"not_in"               => "The selected :attribute is invalid.",
	"numeric"              => "The :attribute must be a number.",
	"regex"                => "The :attribute format is invalid.",
	"required"             => ":attribute alanı gereklidir.",
	"required_if"          => ":attribute alanı, :other :value değerine sahip olduğunda zorunludur.",
	"required_with"        => ":attribute alanı :values varken zorunludur.",
	"required_with_all"    => ":attribute alanı :values varken zorunludur.",
	"required_without"     => ":attribute alanı :values yokken zorunludur.",
	"required_without_all" => ":attribute alanı :values yokken zorunludur.",
	"same"                 => ":attribute ile :other eşleşmelidir.",
	"size"                 => array(
		"numeric" => ":attribute :size olmalıdır.",
		"file"    => ":attribute :size kilobyte olmalıdır.",
		"string"  => ":attribute :size karakter olmalıdır.",
		"array"   => "The :attribute must contain :size items.",
	),
	"unique"               => ":attribute daha önceden kayıt edilmiş.",
	"url"                  => ":attribute biçimi geçersiz.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
