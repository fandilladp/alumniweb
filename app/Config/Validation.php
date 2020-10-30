<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];


	//--------------------------------------------------------------------
	// Rules
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'email' => [
			'rules' => 'required|min_length[11]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword' => [
			'rules' => 'required|matches[password]',
		],
	];

	public $register_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'email' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Email tidak valid',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
		'repeatPassword' => [
			'required' => '{field} Harus Diisi',
			'matches' => '{field} Tidak Match Dengan Password'
		],
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];

	public $login_errors = [
		'username' => [
			'required' => '{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
	];

	public $angket = [
		'namaalumni' => [
			'rules' => 'required|min_length[3]',
		],
		'nim' => [
			'rules' => 'required|max_length[10]',
		],
		'ipk' => [
			'rules' => 'required|max_length[4]',
		],
		'lamastudy' => [
			'rules' => 'required|max_length[20]'
		],
		'waktutunggu' => [
			'rules' => 'required'
		],
		'alamat' => [
			'rules' => 'required'
		],
		'nomorhp' => [
			'rules' => 'required'
		],
		'pendidikan' => [
			'rules' => 'required'
		],
		'pekerjaan' => [
			'rules' => 'required'
		]
	];

	public $angket_errors = [
		'namaalumni' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'nim' => [
			'required' => '{field} Harus diisi',
			'max_length' => '{field} terlalu banyak',
		],
		'ipk' => [
			'required' => '{field} Harus diisi',
			'max_length' => '{field} tidak sesuai'
		],
		'lamastudy' => [
			'required' => '{field} Harus diisi',
			'max_length' => '{field} tidak sesuai'
		],
		'waktutunggu' => [
			'required' => '{field} Harus diisi'
		],
		'alamat' => [
			'required' => '{field} Harus diisi'
		],
		'nomorhp' => [
			'required' => '{field} Harus diisi'
		],
		'pendidikan' => [
			'required' => '{field} Harus diisi'
		],
		'pekerjaan' => [
			'required' => '{field} Harus diisi'
		]
	];

	
	//--------------------------------------------------------------------
}
