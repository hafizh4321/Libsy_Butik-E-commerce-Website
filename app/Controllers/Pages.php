<?php

namespace App\Controllers;

use App\Models\ItemsModel;
use App\Models\UsersModel;
use App\Models\TransaksisModel;
use App\Models\CommentModel;
use App\Models\HistorysModel;

use CodeIgniter\Debug\Toolbar\Collectors\History;

class Pages extends BaseController
{
	public $itemsModel, $usersModel, $transaksisModel;
	public function __construct()
	{
		$this->itemsModel = new ItemsModel();
		$this->usersModel = new UsersModel();
		$this->transaksisModel = new TransaksisModel();
		$this->commentModel = new CommentModel();
		helper('number');
		helper('form');
	}


	public function index()
	{
		$data = [
			'title' => 'HOME',
			'cart' => \Config\Services::cart()
		];
		return view('Pages/index', $data);
	}

	public function commentsave()
	{
		$this->commentModel->save([
			'name' => $this->request->getVar('name'),
			'comment' => $this->request->getVar('comment'),

		]);

		// session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/Pages/Produk');
	}

	public function Produk()
	{
		$currentpage = $this->request->getVar('page_items') ? $this->request->getVar('page_items') : 1;

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$items = $this->itemsModel->search($keyword);
		} else {
			$items = $this->itemsModel;
		}

		$data = [
			'title' => 'Produk',
			'comments' => $this->commentModel->getComment(),
			'items' => $items->paginate(4, 'items'),
			'pager' => $this->itemsModel->pager,
			'currentpage' => $currentpage
		];

		return view('Pages/Produk', $data);
	}

	public function Detailproduk($id_barang)
	{
		$data = [
			'title' => 'Detailproduk',
			'items' => $this->itemsModel->getItem($id_barang)
		];
		return view('Pages/Detailproduk', $data);
	}

	//Cart

	public function cartcek()
	{
		$cart = \Config\Services::cart();
		// $cart->destroy();
		$response = $cart->contents();
		echo '<pre>';
		print_r($response);
		echo '</pre>';
	}

	public function cartadd()
	{
		$cart = \Config\Services::cart();
		$cart->insert(array(
			'id'      => $this->request->getPost('id'),
			'qty'     => 1,
			'price'   => $this->request->getPost('price'),
			'name'    => $this->request->getPost('name'),
			// 'warna' => $this->request->getPost('warna'),
			'options' => array(
				'gambar' => $this->request->getPost('gambar'),
				'stok' => $this->request->getPost('stok'),
				'size' => $this->request->getPost('size'),
				'warna' => $this->request->getPost('warna'),
				// 'Color' => 'Red'
			)
		));

		session()->setFlashdata('Pesan', 'Barang berhasil masuk keranjang');
		return redirect()->to('/Pages/Produk');
	}

	public function cartclear()
	{
		$cart = \Config\Services::cart();
		$cart->destroy();
		return redirect()->to('/Pages/cart');
	}

	public function cartupdate()
	{
		$cart = \Config\Services::cart();
		$i = 1;
		foreach ($cart->contents() as $items) {
			$cart->update(array(
				'rowid'   => $items['rowid'],
				'qty'     => $this->request->getPost('qty' . $i++),
			));
		}

		return redirect()->to('/Pages/cart');
	}

	public  function cartdelete($rowid)
	{
		$cart = \Config\Services::cart();
		$cart->remove($rowid);
		return redirect()->to('/Pages/cart');
	}

	public function cart()
	{
		$data = [
			'title' => 'CART',
			'items' => $this->itemsModel->getItem(),
			'transaksi' => $this->transaksisModel->getTransaksi(),
			'cart' => \Config\Services::cart()
		];
		return view('Pages/cart', $data);
	}

	public function cartpay()
	{
		$cart = \Config\Services::cart();
		$cart->insert(array(
			'id'      => $this->request->getPost('id'),
			'qty'     => 1,
			'price'   => $this->request->getPost('price'),
			'name'    => $this->request->getPost('name'),
			// 'warna' => $this->request->getPost('warna'),
			'options' => array(
				'gambar' => $this->request->getPost('gambar'),
				'stok' => $this->request->getPost('stok'),
				'size' => $this->request->getPost('size'),
				'warna' => $this->request->getPost('warna'),
				// 'Color' => 'Red'
			)
		));
		$data = [
			'title' => 'CART Pay',
			'items' => $this->itemsModel->getItem(),
			'cart' => \Config\Services::cart()
		];
		return view('Pages/cartpay', $data);
	}


	// ITEMSSS

	public function items()
	{
		$currentpage = $this->request->getVar('page_items') ? $this->request->getVar('page_items') : 1;

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$items = $this->itemsModel->search($keyword);
		} else {
			$items = $this->itemsModel;
		}

		$data = [
			'title' => 'item',
			// 'items' => $this->itemsModel->getItem(),
			'items' => $items->paginate(4, 'items'),
			'pager' => $this->itemsModel->pager,
			'currentpage' => $currentpage
		];

		return view('Pages/items', $data);
	}

	public function itemscreate()
	{
		$data = [
			'title' => 'Add Item',
			'validation' => \Config\Services::validation()
		];

		return view('Pages/itemscreate', $data);
	}

	public function itemssave()
	{
		$this->itemsModel->save([
			'nama_barang' => $this->request->getVar('nama_barang'),
			'harga_barang' => $this->request->getVar('harga_barang'),
			'harga_barang' => $this->request->getVar('harga_barang'),
			'warna_barang' => $this->request->getVar('warna_barang'),
			'stok_barang' => $this->request->getVar('stok_barang'),
			'deskripsi_barang' => $this->request->getVar('deskripsi_barang'),
			'gambar_barang' => $this->request->getVar('gambar_barang')

		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan');

		return redirect()->to('/Pages/items');
	}

	public function itemsdelete($id_barang)
	{
		$this->itemsModel->delete($id_barang);

		session()->setFlashdata('pesan', 'Data berhasil dihapus');

		return redirect()->to('/Pages/items');
	}

	public function itemsedit($id_barang)
	{
		$data = [
			'title' => 'Edit Item',
			// 'validation' => \Config\Services::validation(),
			'items' => $this->itemsModel->getItem($id_barang)
		];

		return view('Pages/itemsedit', $data);
	}

	public function itemsupdate($id_barang)
	{
		$this->itemsModel->save([
			'id_barang' => $id_barang,
			'nama_barang' => $this->request->getVar('nama_barang'),
			'harga_barang' => $this->request->getVar('harga_barang'),
			'warna_barang' => $this->request->getVar('warna_barang'),
			'size_barang' => $this->request->getVar('size_barang'),
			'stok_barang' => $this->request->getVar('stok_barang'),
			'deskripsi_barang' => $this->request->getVar('deskripsi_barang'),
			'gambar_barang' => $this->request->getVar('gambar_barang')

		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah');

		return redirect()->to('/Pages/items');
	}

	// USER


	// public function user()
	// {
	// 	$data['title'] = 'userlist';

	// 	$db = \Config\Database::connect();
	// 	$builder = $db->table('users');
	// 	$builder->select('users.id as userid, username, email, user_image, name');
	// 	$builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
	// 	$builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
	// 	$query = $builder->get();


	// 	// $data['users'] = $query->getResult();

	// 	// $currentpage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;

	// 	$keyword = $this->request->getVar('keyword');
	// 	if ($keyword) {
	// 		$users = $this->usersModel->search($keyword);
	// 	} else {
	// 		$users = $this->usersModel;
	// 	}

	// 	$data = [
	// 		'title' => 'user',
	// 		'users' => $this->usersModel->getItem(),
	// 		// 'users' => $this->usersModel->paginate(4, 'users'),
	// 		// 'pager' => $this->usersModel->pager,
	// 		// 'currentpage' => $currentpage,
	// 		'userss' => $query->getResultArray()
	// 	];

	// 	return view('Pages/user', $data);
	// }


	public function user()
	{

		$currentpage = $this->request->getVar('page_users') ? $this->request->getVar('page_users') : 1;

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$users = $this->usersModel->search($keyword);
		} else {
			$users = $this->usersModel;
		}

		$data = [
			'title' => 'user',
			// 'users' => $this->usersModel->getItem(),
			'userss' => $this->usersModel->paginate(4, 'users'),
			'pager' => $this->usersModel->pager,
			'currentpage' => $currentpage,
			// 'userss' => $query->getResultArray()
		];

		return view('Pages/user', $data);
	}


	public function usersdelete($id)
	{
		$this->usersModel->delete($id);

		session()->setFlashdata('pesan', 'Data berhasil dihapus');

		return redirect()->to('/Pages/user');
	}

	// Transaksi

	public function transaksi()
	{
		$currentpage = $this->request->getVar('page_transaksis') ? $this->request->getVar('page_transaksis') : 1;

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$transaksis = $this->transaksisModel->search($keyword);
		} else {
			$transaksis = $this->transaksisModel;
		}

		$data = [
			'title' => 'transaksi',
			// 'transaksis' => $this->transaksisModel->getItem(),
			'transaksis' => $this->transaksisModel->paginate(5, 'transaksis'),
			'pager' => $this->transaksisModel->pager,
			'currentpage' => $currentpage
		];
		return view('Pages/transaksi', $data);
	}

	public function transaksisave()
	{
		$this->transaksisModel->save([
			'id_barang' => $this->request->getVar('id_barang'),
			// 'id'      => $this->request->getPost('id'),
			'qty' => $this->request->getVar('qty'),
			'nama_barang' => $this->request->getVar('nama_barang'),
			'username' => $this->request->getVar('name'),
			'total_harga' => $this->request->getVar('total_harga'),
		]);



		session()->setFlashdata('pesan', 'Transaksi sukses');

		return redirect()->to('/Pages/where');
	}
	
	public function transaksidelete($id_transaksi)
	{
		$this->transaksisModel->delete($id_transaksi);
		
		session()->setFlashdata('pesan', 'Barang berhasil dihapus');

		return redirect()->to('/Pages/history');
	}

	public function History()
	{
		$currentpage = $this->request->getVar('page_transaksis') ? $this->request->getVar('page_transaksis') : 1;

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$transaksis = $this->transaksisModel->search($keyword);
		} else {
			$transaksis = $this->transaksisModel;
		}

		$data = [
			'title' => 'History',
			'cart' => \Config\Services::cart(),
			'items' => $this->itemsModel->getItem(),
			// 'historys' => $this->transaksisModel->where(),
			'transaksis' => $this->transaksisModel->paginate(5, 'transaksis'),
			'pager' => $this->transaksisModel->pager,
			'currentpage' => $currentpage
		];
		return view('Pages/history', $data);
	}

	public function where()
	{
		$currentpage = $this->request->getVar('page_transaksis') ? $this->request->getVar('page_transaksis') : 1;

		$keyword = $this->request->getVar('keyword');
		if ($keyword) {
			$transaksis = $this->transaksisModel->search($keyword);
		} else {
			$transaksis = $this->transaksisModel;
		}

		$db = db_connect();
		$model = new HistorysModel($db);
		$result = $model->where();
		// $result = $this->transaksisModel->where();
		// d($result);

		$data = [
			'title' => 'history',
			'transaksis' => $this->transaksisModel->paginate(5, 'transaksis'),
			'pager' => $this->transaksisModel->pager,
			'transaksis' => $model->where(),
			'currentpage' => $currentpage
		];

		return view('Pages/history', $data);
	}

	public function About()
	{
		$data = [
			'title' => 'About'
		];

		return view('Pages/About', $data);
	}

	//Parofile

	public function profile()
	{
		$data['title'] = 'user profile';

		$db = \Config\Database::connect();
		$builder = $db->table('users');


		$query = $builder->get();

		$data['user'] = $query->getRow();

		return view('Pages/Profile', $data);
	}

	public function profileedit($id = 0)
	{
		$data = [
			'title' => 'Edit Item',
			// 'validation' => \Config\Services::validation(),
			'user' => $this->usersModel->getItem($id)
		];

		return view('Pages/profileedit');
	}

	public function profileupdate($id)
	{
		$this->usersModel->save([
			'id' => $id,
			'username' => $this->request->getVar('username'),
			'email' => $this->request->getVar('email'),
			'user_image' => $this->request->getVar('user_image'),

		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah');

		return redirect()->to('/Pages/profileedit');
	}
}
