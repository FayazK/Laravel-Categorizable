<?php

namespace DraperStudio\Categorizable\Contracts;

use Illuminate\Database\Eloquent\Model;

interface Categorizable
{
    public function categories();

    public function categoriesList();

    public function categorize($categories);

    public function uncategorize($categories);

    public function recategorize($categories);

    public function addCategory(Model $category);

    public function removeCategory(Model $category);
}
