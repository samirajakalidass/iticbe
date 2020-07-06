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
			'NationalNumberPattern'   => '[1-9]\\d{9}|(?:[1-8]\\d\\d|9)\\d{3,4}',
			'PossibleLength'          =>
				array(
					0 => 4,
					1 => 5,
					2 => 6,
					3 => 7,
					4 => 10,
				),
			'PossibleLengthLocalOnly' =>
				array(
					0 => 8,
				),
		),
	'fixedLine'                     =>
		array(
			'NationalNumberPattern'   => '944111\\d{4}|94(?:(?:00|44)0|(?:11|2\\d)\\d|30[01])\\d{5}|(?:1[137]|2[13-68]|3[1458]|4[145]|5[1468]|6[16]|7[1467]|8[13467])(?:[03-57]\\d{7}|[16]\\d{3}(?:\\d{4})?|[289]\\d{3}(?:\\d(?:\\d{3})?)?)',
			'ExampleNumber'           => '2123456789',
			'PossibleLength'          =>
				array(
					0 => 6,
					1 => 7,
					2 => 10,
				),
			'PossibleLengthLocalOnly' =>
				array(
					0 => 4,
					1 => 5,
					2 => 8,
				),
		),
	'mobile'                        =>
		array(
			'NationalNumberPattern'   => '9(?:(?:0(?:[1-35]\\d|44)|(?:[13]\\d|2[0-2])\\d)\\d|9(?:(?:[0-2]\\d|44)\\d|510|8(?:1\\d|88)|9(?:0[013]|1[0134]|21|77|9[6-9])))\\d{5}',
			'ExampleNumber'           => '9123456789',
			'PossibleLength'          =>
				array(
					0 => 10,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'tollFree'                      =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
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
	'sharedCost'                    =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'personalNumber'                =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'voip'                          =>
		array(
			'NationalNumberPattern'   => '993\\d{7}',
			'ExampleNumber'           => '9932123456',
			'PossibleLength'          =>
				array(
					0 => 10,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'pager'                         =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'uan'                           =>
		array(
			'NationalNumberPattern'   => '96(?:0[12]|2[16-8]|3(?:08|[14]5|[23]|66)|4(?:0|80)|5[01]|6[89]|86|9[19])',
			'ExampleNumber'           => '9601',
			'PossibleLength'          =>
				array(
					0 => 4,
					1 => 5,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'voicemail'                     =>
		array(
			'PossibleLength'          =>
				array(
					0 => - 1,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'noInternationalDialling'       =>
		array(
			'NationalNumberPattern'   => '96(?:0[12]|2[16-8]|3(?:08|[14]5|[23]|66)|4(?:0|80)|5[01]|6[89]|86|9[19])|94(?:11[1-7]|440)\\d{5}',
			'PossibleLength'          =>
				array(
					0 => 4,
					1 => 5,
					2 => 10,
				),
			'PossibleLengthLocalOnly' =>
				array(),
		),
	'id'                            => 'IR',
	'countryCode'                   => 98,
	'internationalPrefix'           => '00',
	'nationalPrefix'                => '0',
	'nationalPrefixForParsing'      => '0',
	'sameMobileAndFixedLinePattern' => false,
	'numberFormat'                  =>
		array(
			0 =>
				array(
					'pattern'                              => '(\\d{4,5})',
					'format'                               => '$1',
					'leadingDigitsPatterns'                =>
						array(
							0 => '96',
						),
					'nationalPrefixFormattingRule'         => '0$1',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			1 =>
				array(
					'pattern'                              => '(\\d{2})(\\d{4,5})',
					'format'                               => '$1 $2',
					'leadingDigitsPatterns'                =>
						array(
							0 => '(?:1[137]|2[13-68]|3[1458]|4[145]|5[1468]|6[16]|7[1467]|8[13467])[12689]',
						),
					'nationalPrefixFormattingRule'         => '0$1',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			2 =>
				array(
					'pattern'                              => '(\\d{3})(\\d{3})(\\d{3,4})',
					'format'                               => '$1 $2 $3',
					'leadingDigitsPatterns'                =>
						array(
							0 => '9',
						),
					'nationalPrefixFormattingRule'         => '0$1',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
			3 =>
				array(
					'pattern'                              => '(\\d{2})(\\d{4})(\\d{4})',
					'format'                               => '$1 $2 $3',
					'leadingDigitsPatterns'                =>
						array(
							0 => '[1-8]',
						),
					'nationalPrefixFormattingRule'         => '0$1',
					'domesticCarrierCodeFormattingRule'    => '',
					'nationalPrefixOptionalWhenFormatting' => false,
				),
		),
	'intlNumberFormat'              =>
		array(),
	'mainCountryForCode'            => false,
	'leadingZeroPossible'           => false,
	'mobileNumberPortableRegion'    => false,
);
