<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    use HasFactory;

    protected $table = 'perpus';

    protected $fillable = ['judulbuku', 'bataspinjam', 'peminjam', 'nim'];

    // protected $guarded = 'id';
}
