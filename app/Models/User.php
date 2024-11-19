<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [ 
        'name', 
        'email',
        'email_token',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function passwordModel()
    {
        return $this->hasOne(PasswordModel::class);
    }

    public function referralsCount()
    {
        return $this->hasMany(User::class, 'referred_by')->count();
    }


    public function referrer()
    {
        return $this->belongsTo(User::class, 'referred_by');
    }
    
    public function referrals()
    {
        return $this->hasMany(User::class, 'referred_by');
    }

    public function tokens(){
        return $this->hasMany(UserToken::class);
    }

    public function latestTokenCount()
    {
        return $this->tokens()->latest()->value('token_count') ?? 0;
    }

}
