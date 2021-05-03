<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('templates/header');
		echo view('Home');
		echo view('templates/footer');
	}
	public function detail()
	{
		echo view('templates/header');
		echo view('Detail');
		echo view('templates/footer');
	}
	public function search()
	{
		echo view('templates/header');
		echo view('Search');
		echo view('templates/footer');
	}
	public function shop()
	{
		// if(session()->get('login')){
		echo view('templates/header');
		echo view('Shop');
		echo view('templates/footer');
		// }else{
		// 	echo view('errors/html/error_404');
		// }
	}
	public function article()
	{
		// if(session()->get('login')){
		echo view('templates/header');
		echo view('Article');
		echo view('templates/footer');
		// }else{
		// 	echo session()->get('login');
		// }
	}
	public function artista()
	{
		// if(session()->get('login')){
		echo view('templates/header');
		echo view('Artist');
		echo view('templates/footer');
		// }else{
		// 	echo view('errors/html/error_404');
		// }
	}
	public function whishlist()
	{
		// if(session()->get('login')){
		echo view('templates/header');
		echo view('Whishlist');
		echo view('templates/footer');
		// }else{
		// 	echo view('errors/html/error_404');
		// }
	}
	public function term()
	{
		echo view('templates/header');
		echo view('terms');
		echo view('templates/footer');
	}
	public function privacy()
	{
		echo view('templates/header');
		echo view('privacy_policy');
		echo view('templates/footer');
	}
	public function genericMessage($data, $msg, $code)
	{
		if ($code == 200) {
			return [
				'data' => $data,
				'msg' => $msg,
				'code' => 200
			];
		} else {
			return [
				'msg' => $msg,
				'code' => $code
			];
		}
	}
}
