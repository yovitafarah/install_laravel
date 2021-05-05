<?php
class BiodataController extends BaseController {
	# GET localhost:8000/
	public function index() {
		#Tarik semua isi tabel biodata kedalam variabel
        $biodata = Biodata::all();
		# Tampilkan View
		return View::make('biodata.index', compact('biodata'));
	}

	# GET localhost:8000/buat
	public function baru() {
		#
	}

	# POST localhost:8000/buat
	public function buat() {
		#
	}

	# GET localhost:8000/lihat/{id}
	public function lihat($id) {
		#
	}

	# GET localhost:8000/ubah/{id}
	public function ubah($id) {
		#
	}

	# PUT localhost:8000/ubah/{id}
	public function ganti($id) {
		#
	}

	# DELETE localhost:8000/hapus/{id}
	public function hapus($id) {
		#
	}
}

?>