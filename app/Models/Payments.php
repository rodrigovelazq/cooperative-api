<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payments extends Model
{
    use HasFactory;
    protected $fillable = ['amount', 'payment_date', 'loans_id'];

    public function loans(): BelongsTo
    {
        return $this->belongsTo(Loans::class);
    }
}
