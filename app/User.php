<?php

namespace App;

use App\Models\Core\Groups;
use App\Models\Hotel;
use App\Models\HotelAgreementDefault;
use App\Models\Organization;
use App\Models\UserTrip;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * @property int                        id
 * @property HotelAgreementDefault|null hotelAgreementDefault
 * @property bool                       is_manager
 * @property bool                       is_subcoordinator
 * @property Organization               organization
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'tb_users';

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
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['is_manager', 'is_subcoordinator'];

    /**
     * Fetches the user's hotel agreement defaults
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function hotelAgreementDefault()
    {
        return $this->hasOne(HotelAgreementDefault::class);
    }

    /**
     * Support for multiple organizations per user if needed
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }

    /**
     * Support for a single organization for a user if needed
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * Get the group of the user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group()
    {
        return $this->belongsTo(Groups::class, 'group_id', 'group_id');
    }

    /**
     * Fetch the users account and see if they are a manager
     *
     * @param null $value Not used
     *
     * @return bool
     */
    public function getIsManagerAttribute($value)
    {
        return $this->group_id === Groups::TRAVEL_COORDINATOR;
    }

    /**
     * Fetch the users account and see if they are a sub coordinator
     *
     * @param null $value Not used
     *
     * @return bool
     */
    public function getIsSubcoordinatorAttribute($value)
    {
        return $this->group_id === Groups::SUB_COORDINATOR;
    }

    /**
     * Get the first and last name
     *
     * @param null $value Not used
     *
     * @return bool
     */
    public function getFullNameAttribute($value)
    {
        return trim($this->fisrtname . ' ' . $this->lastname);
    }


    /**
     * Fetches the user's hotel agreement defaults
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trips()
    {
        return $this->hasMany(UserTrip::class, 'entry_by', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

}
