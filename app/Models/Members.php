<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'email', 'identity_number','active', 'users_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
