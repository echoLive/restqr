<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use Notifiable;
    use SoftDeletes;

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
    public function categoryLangs()
    {
        return $this->hasMany(CategoryLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function languages()
    {
        return $this->hasManyThrough(Language::class, CategoryLang::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Category::class,'category_parent_id');
    }

    /**
     * An User has one Role.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(Category::class, 'category_parent_id', 'id');
    }
}
