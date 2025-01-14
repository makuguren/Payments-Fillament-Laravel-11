<?php

namespace App\Models;

use App\Models\User;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Model;

class ProofPayment extends Model
{
    protected $table = 'proof_payments';
    protected $fillable = ['user_id', 'payment_id', 'image', 'status'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function payment(){
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
