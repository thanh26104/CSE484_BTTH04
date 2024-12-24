<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Reader extends Model
{
 use HasFactory;
    protected $fillable = ['name', 'birthday', 'address', 'phone'];
    
// Tạo một instance đơn

public function borrows()
{
        return $this->hasMany(Borrow::class);
       
}

}

