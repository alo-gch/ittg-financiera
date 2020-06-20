<?php

namespace App\Models;
use App\Models\Loan;



use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'id','name', 'phone', 'address',
    ];



public function loan()
{
	return $this->hasOne(Loan::class);
}

}
















