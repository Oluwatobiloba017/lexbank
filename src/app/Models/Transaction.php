<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";
    protected $fillable = ['user_id', 'recipient_id', 'amount', 'type', 'description'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function recipient(){
        return $this->belongsTo(User::class, 'recipient_id');
    }
}
