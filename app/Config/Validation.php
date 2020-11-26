<?php

namespace Config;

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
		\Myth\Auth\Authentication\Passwords\ValidationRules::class,
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
		'mulaistudy' => [
			'rules' => 'required|max_length[20]'
		],
		'akhirstudy' => [
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
		],
	];
	public $kepuasan = [
		'statuskerja' => [
			'rules' => 'required'
		],
		'bidangpekerjaan' => [
			'rules' => 'required'
		],
		'jabatan' => [
			'rules' => 'required'
		],
		'kepuasanprodi' => [
			'rules' => 'required'
		],
		'kesesuaianilmu' => [
			'rules' => 'required'
		],
		'pencariankerja' => [
			'rules' => 'required'
		],
		'hambatan' => [
			'rules' => 'required'
		],
		'pindahkerja' => [
			'rules' => 'required'
		],
		'kemampuanbahasainggris' => [
			'rules' => 'required'
		],
		'kemampuantik' => [
			'rules' => 'required'
		],
		'kemampuansoftware' => [
			'rules' => 'required'
		],
		'mensyaratkanipk' => [
			'rules' => 'required'
		],
		'manfaatstudiketerampilanteknis' => [
			'rules' => 'required'
		],
		'manfaatstudipengetahuanteoritis' => [
			'rules' => 'required'
		],
		'manfaatstudiprestis' => [
			'rules' => 'required'
		],
		'manfaatstudikepercayaandiri' => [
			'rules' => 'required'
		],
		'manfaatstudidalampendapatan' => [
			'rules' => 'required'
		],
		'manfaatstudidalamkarir' => [
			'rules' => 'required'
		],
		'manfaatstudidalamlintasbidang' => [
			'rules' => 'required'
		],
		'manfaatstudidalammengikutiipteks' => [
			'rules' => 'required'
		],
		'kebutuhanpengetahuanmahasiswa' => [
			'rules' => 'required'
		],
	];
	public $hubunganprodi = [
		'hubungandenganprodi' => [
			'rules' => 'required'
		],
		'bagaimanahubunganterjalin' => [
			'rules' => 'required'
		],
		'komunikasidalamrangka' => [
			'rules' => 'required'
		],
		'dibuatkansistemalumni' => [
			'rules' => 'required'
		],
		'pelatihan' => [
			'rules' => 'required'
		],
		'saransistemalumni' => [
			'rules' => 'required'
		],
	];
	public $foto = [
		'gambar' => 'max_size[gambar,500]|ext_in[gambar,png,jpg,jpeg]'
	];
	public $cv = [
		'cv' => 'max_size[cv,500]|ext_in[cv,pdf]'
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
		],
	];
	public $kepuasan_errors = [
		'statuskerja' => [
			'required' => '{field} Harus diisi'
		],
		'bidangpekerjaan' => [
			'required' => '{field} Harus diisi'
		],
		'jabatan' => [
			'required' => '{field} Harus diisi'
		],
		'kepuasanprodi' => [
			'required' => '{field} Harus diisi'
		],
		'kesesuaianilmu' => [
			'required' => '{field} Harus diisi'
		],
		'pencariankerja' => [
			'required' => '{field} Harus diisi'
		],
		'hambatan' => [
			'required' => '{field} Harus diisi'
		],
		'pindahkerja' => [
			'required' => '{field} Harus diisi'
		],
		'kemampuanbahasainggris' => [
			'required' => '{field} Harus diisi'
		],
		'kemampuantik' => [
			'required' => '{field} Harus diisi'
		],
		'kemampuansoftware' => [
			'required' => '{field} Harus diisi'
		],
		'mensyaratkanipk' => [
			'required' => '{field} Harus diisi'
		],
		'manfaatstudiketerampilanteknis' => [
			'required' => '{field} Harus diisi'
		],
		'manfaatstudipengetahuanteoritis' => [
			'required' => '{field} Harus diisi'
		],
		'manfaatstudiprestis' => [
			'required' => '{field} Harus diisi'
		],
		'manfaatstudikepercayaandiri' => [
			'required' => '{field} Harus diisi'
		],
		'manfaatstudidalampendapatan' => [
			'required' => '{field} Harus diisi'
		],
		'manfaatstudidalamkarir' => [
			'required' => '{field} Harus diisi'
		],
		'manfaatstudidalamlintasbidang' => [
			'required' => '{field} Harus diisi'
		],
		'manfaatstudidalammengikutiipteks' => [
			'required' => '{field} Harus diisi'
		],
		'kebutuhanpengetahuanmahasiswa' => [
			'required' => '{field} Harus diisi'
		],
	];
	public $hubunganprodi_errors = [
		'hubungandenganprodi' => [
			'required' => '{field} Harus diisi'
		],
		'bagaimanahubunganterjalin' => [
			'required' => '{field} Harus diisi'
		],
		'komunikasidalamrangka' => [
			'required' => '{field} Harus diisi'
		],
		'dibuatkansistemalumni' => [
			'required' => '{field} Harus diisi'
		],
		'pelatihan' => [
			'required' => '{field} Harus diisi'
		],
		'saransistemalumni' => [
			'required' => '{field} Harus diisi'
		],
	];
	public $foto_errors = [
		'gambar' => [
			'max_size' => 'size gambar terlalu besar, maksimum 500 kb',
			'ext_in' => 'file yang kamu pilih bukan gambar',
		],
	];
	public $cv_errors = [
		'cv' => [
			'max_size' => 'size terlalu besar, maksimum 500 kb',
			'ext_in' => 'file harus pdf',
		],
	];




	//--------------------------------------------------------------------
}
