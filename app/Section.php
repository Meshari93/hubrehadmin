<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sections';

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
    protected $fillable = ['name', 'room_num', 'capacity', 'property_id'];

    /**
     * function relationshep .
     *
     */
    public function property()
    {
      return $this->belongsTo(Property::class, 'property_id');
    }


    public function serves()
    {
      return $this->belongsToMany(Serf::class, 'section_serves','section_id', 'serves_id')->withTimestamps();
    }

    public function picture()
    {
      return $this->hasMany('App\Picture', 'section_id');
    }

    public function price()
    {
      return $this->hasOne('App\Price', 'section_id');
    }
}
