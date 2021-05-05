?php
class Biodata extends Eloquent {
	# Penamaan tabel yang digunakan
	protected $table = 'biodata';
	protected $fillable = array('nama', 'usia', 'jenis_kelamin', 'telepon', 'email');
}
?>