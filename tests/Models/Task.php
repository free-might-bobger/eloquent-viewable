<?php

namespace Cyrildewit\PageViewCounter\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Cyrildewit\PageViewCounter\Traits\HasPageViewCounter;

class Task extends Model
{
    use HasPageViewCounter;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
