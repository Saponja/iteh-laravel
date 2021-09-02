<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable=['id', 'name', 'country', 'rank', 'captain', 'goalDiff'];

    public function Captain(){
        return $this->hasOne(Player::class, 'id', 'captain');
    }
}
