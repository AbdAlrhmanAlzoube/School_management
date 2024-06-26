<?php

namespace App\Models;

use App\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolMentor extends Model
{
    use HasFactory,Filterable;

    protected $fillable = [
       'user_id',
       'supervising_class',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Define the belongsTo relationship with Attendance model
    
}
