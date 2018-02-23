<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serf extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'serves';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['serves', 'type'];
    // protected $fillable = ['type'];


    public function section()
    {
      return $this->belongsToMany(Section::class, 'section_serves', 'serves_id', 'section_id')->withTimestamps();
    }
}
