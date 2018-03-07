<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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



    public function restaurant()
    {
        return $this->hasMany(Restaurant::class,'id_User');
    }

    public function goesToRestaurant()
    {
        return $this->hasMany(Restaurant::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user','user_id');
    }



    /**
     * @param string|array $roles
     * @return bool
     */
    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
                abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) ||
            abort(401, 'This action is unauthorized.');
    }

    /**
     * Check multiple roles
     * @param array $roles
     * @return bool
     */
    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('role', $roles)->first();
    }

    /**
     * Check one role
     * @param string $role
     * @return bool
     */
    public function hasRole($role)
    {
        return null !== $this->roles()->where('role', $role)->first();
    }


    public function isAdmin()
    {
        return null !== $this->roles()->where('name', 'Admin')->first();

    }
    public function isAdminResto()
    {
        return null !== $this->roles()->where('name', 'RestaurantAdmin')->first();
    }
    public function isSimpleUser()
    {
        return null !== $this->roles()->where('name', 'SimpleUser')->first();
    }

    public function isEmployee()
    {
        return null !== $this->roles()->where('name', 'Employee')->first();
    }




}
