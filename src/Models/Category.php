<?php

namespace DraperStudio\Categorizable\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Kalnoy\Nestedset\Node;

class Category extends Node implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = ['build_from' => 'name'];

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function categorizable()
    {
        return $this->morphTo();
    }

    public function entries($class)
    {
        return $this->morphedByMany($class, 'categorizable', 'categories_relations');
    }

    public static function tree()
    {
        return static::get()->toTree()->toArray();
    }
}
