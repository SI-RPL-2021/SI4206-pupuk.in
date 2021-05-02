<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Distributor
 * 
 * @property int $id
 * @property int $user_id
 * @property string|null $alamat
 * @property string|null $no_telp
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|Pembayaran[] $pembayarans
 * @property Collection|Petani[] $petanis
 * @property Collection|TempatPengambilan[] $tempat_pengambilans
 *
 * @package App\Models
 */
class Distributor extends Model
{
	protected $table = 'distributors';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'alamat',
		'no_telp',
		'status'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function pembayarans()
	{
		return $this->hasMany(Pembayaran::class);
	}

	public function petanis()
	{
		return $this->hasMany(Petani::class);
	}

	public function tempat_pengambilans()
	{
		return $this->hasMany(TempatPengambilan::class);
	}
}
