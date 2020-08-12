<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Menu extends Model
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logo', 'is_active',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menuLangs()
    {
        return $this->hasMany(MenuLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function schedule()
    {
        return $this->hasOne(MenuSchedule::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function composition()
    {
        return $this->belongsToMany(MenuComposition::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function languages()
    {
        return $this->hasManyThrough(Language::class, MenuLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, MenuComposition::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function tableZones()
    {
        return $this->hasManyThrough(TablesZone::class, MenuComposition::class);
    }
}
