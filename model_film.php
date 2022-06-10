<?php 
// Model
class film_ku extends Illuminate\Database\Eloquent\Model {
	protected $table = "film_ku";
	public $timestamps = false;
}

class info_log extends Illuminate\Database\Eloquent\Model {
	protected $table = "info_log";
	public $timestamps = false;
}

class jadwal extends Illuminate\Database\Eloquent\Model {
	protected $table = "jadwal";
	public $timestamps = false;
}

class operator extends Illuminate\Database\Eloquent\Model {
	protected $table = "operator";
	public $timestamps = false;
	protected $primaryKey = 'id_op';
}

class teater extends Illuminate\Database\Eloquent\Model {
	protected $table = "teater";
	public $timestamps = false;
	protected $primaryKey = 'id_teater';
}

class transaksi extends Illuminate\Database\Eloquent\Model {
	protected $table = "transaksi";
	public $timestamps = false;
	protected $primaryKey = 'id_transaksi';
}

class status_log extends Illuminate\Database\Eloquent\Model {
	protected $table = "status_log";
	public $timestamps = false;
}


?>