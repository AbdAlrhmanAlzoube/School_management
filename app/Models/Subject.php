<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Subject extends Model
    {
        use HasFactory;

        protected $fillable = ['teacher_id', 'name', 'description'];

      public function teacher():BelongsTo
      {
        return $this->belongsTo(Teacher::class);
      }
        
       
    }
