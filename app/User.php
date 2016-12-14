<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
    /**
     * @return string
     * @author Boudy de Geer <boudydegeer@mosaiqo.com>
     */
    public function routeNotificationForSlack()
    {
        return "https://hooks.slack.com/services/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";
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
