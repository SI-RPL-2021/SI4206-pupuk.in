<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TempatPengambilan
 * 
 * @property int $id
 * @property int $distributor_id
 * @property string $nama_tempat
 * @property string $alamat
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Distributor $distributor
 * @property Collection|Pembayaran[] $pembayarans
 *
 * @package App\Models
 */
class TempatPengambilan extends Model
{
	protected $table = 'tempat_pengambilans';

	protected $casts = [
		'distributor_id' => 'int'
	];

	protected $fillable = [
		'distributor_id',
		'nama_tempat',
		'alamat'
	];

	public function distributor()
	{
		return $this->belongsTo(Distributor::class);
	}

	public function pembayarans()
	{
		return $this->hasMany(Pembayaran::class);
	}
}
