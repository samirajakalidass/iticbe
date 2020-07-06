<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array(
	'generalDesc'                   =>
		array(
			'NationalNumberPattern'   => '[1369]\\d{2,4}',
			'PossibleLength'          =>
				array(
					0 => 3,
					1 => 4,
					2 => 5,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'tollFree'                      =>
		array(
			'NationalNumberPattern'   => '112|999',
			'ExampleNumber'           => '112',
			'PossibleLength'          =>
				array(
					0 => 3,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'premiumRate'                   =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'emergency'                     =>
		array(
			'NationalNumberPattern'   => '112|999',
			'ExampleNumber'           => '112',
			'PossibleLength'          =>
				array(
					0 => 3,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'shortCode'                     =>
		array(
			'NationalNumberPattern'   => '1(?:0[01348]|1(?:[02]|1[128]|311)|2(?:0[125]|[13-6]|2\\d{0,2})|(?:3[1-35-79]|7[45])\\d\\d?|5(?:454|5\\d\\d?|77|888|999?)|8(?:18?|2|8[18])|9(?:[124]\\d?|68|71|9[0679]))|66628|99[1-469]|13[5-7]|(?:1(?:0[569]|309|5[12]|7[136-9]|9[03])|3[23679]\\d\\d)\\d',
			'ExampleNumber'           => '100',
			'PossibleLength'          =>
				array(),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'standardRate'                  =>
		array(
			'NationalNumberPattern'   => '666\\d\\d',
			'ExampleNumber'           => '66600',
			'PossibleLength'          =>
				array(
					0 => 5,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'carrierSpecific'               =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'smsServices'                   =>
		array(
			'NationalNumberPattern'   => '(?:3[23679]\\d|666)\\d\\d',
			'ExampleNumber'           => '32000',
			'PossibleLength'          =>
				array(
					0 => 5,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'id'                            => 'MY',
	'countryCode'                   => 0,
	'internationalPrefix'           => '',
	'sameMobileAndFixedLinePattern' => false,
	'numberFormat'                  =>
		array(),
	'intlNumberFormat'              =>
		array(),
	'mainCountryForCode'            => false,
	'leadingZeroPossible'           => false,
	'mobileNumberPortableRegion'    => false,
);
