<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;


use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserApi extends Authenticatable implements JWTSubject
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
        'email',
        'email_verified_at',
        'password',
        'birthDate',
        'gender',
        'role',
        'remember_token',
        'provider_id',
        'provider',
    ];

    // to fillable all the columns-> protected $guarded = [];

    public function news()
    {
        return $this->hasMany(News::class, 'user_id', 'id');
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

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }    
}
