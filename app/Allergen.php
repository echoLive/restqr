<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Allergen extends Model
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'icon',
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
    public function allergenLangs()
    {
        return $this->hasMany(AllergenLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function languages()
    {
        return $this->hasManyThrough(Language::class, AllergenLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAllergen()
    {
        return $this->hasMany(ProductAllergen::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class, ProductAllergen::class);
    }
}
