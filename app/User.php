<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'about', 'photo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'type'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function article()
    {
        return $this->hasMany(Article::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }


    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function isAdmin()
    {
        return $this->type == 'admin';
    }

    public function isWriter()
    {
        return $this->type == 'writer';
    }
}
