<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'fullName',
        'gender',
        'birthDate',
        'email',
        'email_verified_at',
        'password',
        'provider_id',
        'provider',
    ];
    

    public function news(){
    return $this->hasMany(News::class,'user_id','id');
    }

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function conversations()
    {
        // return  $this->hasMany(Conversation::class, "sender_id")->orWhere("receiver_id",$this->id)->whereNotDeleted();
        return $this->hasMany(Conversation::class, "sender_id")
            ->orWhere("receiver_id", $this->id)
            ->whereNull('deleted_at')
            ->latest('updated_at');
    }

    public function receivesBroadcastNotificationsOn(): string
    {
        return 'users.' . $this->id;
    }
}
