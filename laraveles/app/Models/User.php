<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'jogosultsag'
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




    public function isAdmin()
    {
        if ('admin' == jogosultsag::findOrFail($this->jogosultsag_id)->megnevezes) {
            return true;
        }
        return false;
    }

    public function isDolgozo()
    {
        if ('dolgozo' == jogosultsag::findOrFail($this->jogosultsag_id)->megnevezes) {
            return true;
        }
        return false;
    }

    public function isSzuperAdmin()
    {
        if ('szuperadmin' == jogosultsag::findOrFail($this->jogosultsag_id)->megnevezes) {
            return true;
        }
        return false;
    }
    public function isEngedejezettBejelentkezo()
    {
        if('dolgozo' == jogosultsag::findOrFail($this->jogosultsag_id)->megnevezes && $this->regisztralFelhasznalo()){
            return false;
        }
        return true;
        if ($this->allapot === "0") {
            return true;
        }
    }
    public function bejelentkezesTiltasa()
    {
        $this->allapot = "1";
        $this->save();
    }
    public function regisztralFelhasznalo()
    {
        if ($this->allapot === "0") {
            return false;
        }
        return true;
    }

    public function getBolcsodeId()
    {
        return alkalmazott::keresBolcsodeId($this->id);
    }
}
