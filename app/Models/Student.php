<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [];

    public function rooms(){
        return hasOne(Room::class);
    }

    public function attendances(){
        return $this->hasMany(Attendance::class)->orderBy('created_at', 'DESC');
    }
}
