<?php

namespace App\Models;
use App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
	protected $fillable =[
		'id','client_id','cantidad','numeropagos','cuota','totalapagar','fechadeministracion','fechadevencimiento'

	];
    //

public function client()
{
	return $this->belongsTo(Client::class);
}




}
