<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CardList;
use App\Models\User;
class Board extends Model
{
    use HasFactory;


    public function lists(){
        return $this->hasMany(CardList::class, 'board_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'owner_id');
    }
}
