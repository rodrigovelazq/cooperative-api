<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loans extends Model
{
    use HasFactory;
    protected $fillable = ['amount', 'loan_date', 'active', 'members_id'];

    public function members()
    {
        return $this->belongsTo(Members::class);
    }
}
