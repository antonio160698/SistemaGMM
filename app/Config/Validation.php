<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $login = [
		'email'=>'required',
		'pass'=>'required|valid_email'
	];

	public $signin = [
		'firstname' => 'required',
		'lastname' => 'required',
		'email' => 'required|valid_email',
		'phone' => 'required',
		'password' => 'required',
		'address1' => 'required',
		'district' => 'required',
		'postcode' => 'required',
		'contry' => 'required',
		'city' => 'required',
		'card' => 'required',
		'exp_date' => 'required',
		'cvv' => 'required' 
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
