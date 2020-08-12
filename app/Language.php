<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Language extends Model
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'is_installed', 'is_active',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function products()
    {
        return $this->hasManyThrough(Product::class,ProductLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productLangs()
    {
        return $this->hasMany(ProductLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function categories()
    {
        return $this->hasManyThrough(Category::class, CategoryLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categoryLangs()
    {
        return $this->hasMany(CategoryLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function menus()
    {
        return $this->hasManyThrough(Menu::class, MenuLang::class);
    }

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
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function allergens()
    {
        return $this->hasManyThrough(Allergen::class, AllergenLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function allergenLangs()
    {
        return $this->hasMany(AllergenLang::class);
    }
}
