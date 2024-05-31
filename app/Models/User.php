<?php

    namespace App\Models;

    use App\Traits\Filterable;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class User extends Authenticatable
    {
        use HasFactory, Notifiable,Filterable;

        protected $fillable = [
            'first_name',
            'last_name',
            'address',
            'phone',
            'image',
            'gender',
            'email',
            'password',
            
        ];

        protected $hidden = [
            'password',
            'remember_token',
        ];

        public function teacher()
        {
            return $this->hasMany(Teacher::class);
        }
        
    }
