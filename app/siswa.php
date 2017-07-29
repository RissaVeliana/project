<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    //
    protected $table ='siswas';
    protected $fillable = ['nama', 'orangtua_id', 'umur', 'jk', 'alamat'];
    protected $visible = ['nama', 'orangtua_id', 'umur', 'jk', 'alamat'];
    public $timestamps = true; 

    public function ortu()
    {
    	return $this->belongsTo('App\ortu', 'orangtua_id');
    }
}
