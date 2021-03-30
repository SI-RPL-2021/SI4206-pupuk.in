<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Petani
 * 
 * @property int $id
 * @property int $user_id
 * @property string|null $alamat
 * @property string|null $no_telp
 * @property string $status
 * @property int $distributor_id
 * @property float $luas_tanah
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Distributor $distributor
 * @property User $user
 * @property Collection|Pembayaran[] $pembayarans
 *
 * @package App\Models
 */
class Petani extends Model
{
	protected $table = 'petanis';

	protected $casts = [
		'user_id' => 'int',
		'distributor_id' => 'int',
		'luas_tanah' => 'float'
	];

	protected $fillable = [
		'user_id',
		'alamat',
		'no_telp',
		'status',
		'distributor_id',
		'luas_tanah'
	];

	public function distributor()
	{
		return $this->belongsTo(Distributor::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function pembayarans()
	{
		return $this->hasMany(Pembayaran::class);
	}
}
