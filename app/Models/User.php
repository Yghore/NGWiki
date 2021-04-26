<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Exceptions\PermissionException;

use function Psy\debug;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    public function isPermission($requestPermission)
    {
        $permissions = Config::get('permissions');
        if(!is_int($requestPermission))
        {
            $requestPermission = array_search($requestPermission, array_filter(array_combine(array_keys($permissions), array_column($permissions, 'title'))));            if(!$requestPermission)
            { 
                throw new PermissionException("InvalidTitlePermission"); 
                return false;
            }

        }
        $userPermissions = User::getPermissionsForUser();
        if(in_array($requestPermission, $userPermissions)){
            return true;
        }
        return false;

    }

    public function getPermissionsForUser()
    {
        $permissions = Config::get('permissions');
        $userPermissions = [];
        $r = $this->permission;
        if($r >= 2){
            while($r != 0){
                for ($i = count($permissions); $i > 0 ; $i--) { 
                    $perm = 2 ** $i;
                    if($perm <= $r)
                    {
                        $r = $r - $perm;
                        array_push($userPermissions, $perm);
                        break;
                    }

                }

            }
            return $userPermissions;
        }
        throw new PermissionException("InvalidPermissionError"); 
        return false;
    }


    
        
    // Autre Exemple
    // 2 + 4 + 64 = 70
    // 70 - 64 = 6
    // 6 - 4 = 2
    // Donc les permissions sont
    // 64, 4 et 2 :D

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
