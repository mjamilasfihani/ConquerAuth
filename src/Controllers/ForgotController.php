<?php namespace Conquer\Auth\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException as Display404;
use Conquer\Auth\Config;

class ForgotController extends Controller
{

	protected $conquer;
	protected $features;

	public function __construct()
	{
		$this->conquer  = new Config\Conquer();
		$this->features = new Config\Features();
	}

	public function front_end()
	{
		if (! $this->features->forgot)
		{
			throw Display404::forPageNotFound();
		}

		helper('form');

		return view($this->conquer->views['forgot'], ['features' => $this->features]);
	}

}