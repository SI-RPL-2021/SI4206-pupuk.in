<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

/**
 * Class Pupuk
 * 
 * @property int $id
 * @property string $nama
 * @property float $harga
 * @property float $kuota_per_10m2
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Pembayaran[] $pembayarans
 *
 * @package App\Models
 */
class Pupuk extends Model
{
	protected $table = 'pupuks';

	protected $casts = [
		'harga' => 'float',
		'kuota_per_10m2' => 'float',
		'batas_pengambilan'=>'date'
	];

	protected $fillable = [
		'nama',
		'harga',
		'kuota_per_10m2',
		'batas_pengambilan'
	];

	public function pembayarans()
	{
		return $this->hasMany(Pembayaran::class);
	}
	public function pengambilan($pupuk_id){
		return $this->hasMany(Pembayaran::class)->where('status','Lunas')->where('pupuk_id',$pupuk_id)->sum('jumlah_pengambilan');
	}
	public function pembayaran($pupuk_id){
		return $this->hasMany(Pembayaran::class)->where('status','Lunas')->where('pupuk_id',$pupuk_id)->sum('jumlah_pembayaran');
	}
	public function daysLeft()
	{
		$target_date = $this->batas_pengambilan;
		$daysLeft = Carbon::parse(Carbon::now())->diffInDays($target_date, false);
		return $daysLeft >= 0 ? $daysLeft: 0 ;
	}
	
}
