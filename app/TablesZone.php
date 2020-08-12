<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class TablesZone extends Model
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * A Role has many Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tables()
    {
        return $this->hasMany(Table::class);
    }

    /**
     * A Role has many Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function composition()
    {
        return $this->belongsToMany(MenuComposition::class);
    }

    /**
     * A Role has many Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productPriceZone()
    {
        return $this->hasMany(ProductPriceZone::class);
    }

    /**
     * A Role has many Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function menus()
    {
        return $this->hasManyThrough(Menu::class, MenuComposition::class);
    }

    /**
     * A Role has many Users.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, ProductPriceZone::class);
    }
}
