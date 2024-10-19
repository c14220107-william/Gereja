<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kritikSaran extends Model
{
    use HasFactory;
    protected $table = 'kritik_sarans';
    protected $fillable = [
        'name',
        'kritikSaran',
    ];
}
