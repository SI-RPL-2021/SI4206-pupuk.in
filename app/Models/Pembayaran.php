<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pembayaran
 * 
 * @property int $id
 * @property int $petani_id
 * @property int $distributor_id
 * @property int $pupuk_id
 * @property float $jumlah_pengambilan
 * @property float $jumlah_pembayaran
 * @property int $tempat_pengambilan_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Distributor $distributor
 * @property Petani $petani
 * @property Pupuk $pupuk
 * @property TempatPengambilan $tempat_pengambilan
 *
 * @package App\Models
 */
class Pembayaran extends Model
{
	protected $table = 'pembayarans';

	protected $casts = [
		'petani_id' => 'int',
		'distributor_id' => 'int',
		'pupuk_id' => 'int',
		'jumlah_pengambilan' => 'float',
		'jumlah_pembayaran' => 'float',
		'tempat_pengambilan_id' => 'int'
	];

	protected $fillable = [
		'petani_id',
		'distributor_id',
		'pupuk_id',
		'jumlah_pengambilan',
		'jumlah_pembayaran',
		'tempat_pengambilan_id'
	];

	public function distributor()
	{
		return $this->belongsTo(Distributor::class);
	}

	public function petani()
	{
		return $this->belongsTo(Petani::class);
	}

	public function pupuk()
	{
		return $this->belongsTo(Pupuk::class);
	}

	public function tempat_pengambilan()
	{
		return $this->belongsTo(TempatPengambilan::class);
	}
}
