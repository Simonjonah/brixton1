<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\Result;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Password;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
    public function queries(){
        return $this->hasMany(Query::class);
    }
    
    public function teacherassigns(): HasMany 
    {
        return $this->hasMany(Teacherassign::class);
    }

    public function results(): HasMany 
    {
        return $this->hasMany(Result::class);
    }

    public function result2ndterms(): HasMany 
    {
        return $this->hasMany(Result2ndTerm::class);
    }


    public function questions(): HasMany 
    {
        return $this->hasMany(Question::class);
    }

    public function transactions(): HasMany 
    {
        return $this->hasMany(Transaction::class, 'user_id', 'student_id');
    }

     /**
     * Send a password reset link to the user.
     *
     * @return void
     */
    public function sendPasswordResetLink()
    {
        User::sendResetLink(['email' => $this->email]);
    }
}
