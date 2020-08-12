<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reference', 'erp_reference', 'bar_code', 'measure', 'image', 'price', 'is_active',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function measure()
    {
        return $this->hasOne(ProductMeasureType::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vat()
    {
        return $this->hasOne(VatType::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function type()
    {
        return $this->hasOne(ProductType::class);
    }
    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function priceZone()
    {
        return $this->hasMany(ProductPriceZone::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAllergens()
    {
        return $this->hasMany(ProductAllergen::class);
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
        return $this->hasManyThrough(Language::class, ProductLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function allergens()
    {
        return $this->hasManyThrough(Allergen::class, ProductAllergen::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function tablesZones()
    {
        return $this->hasManyThrough(TablesZone::class, ProductPriceZone::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function menus()
    {
        return $this->hasManyThrough(Menu::class, MenuComposition::class);
    }
}
