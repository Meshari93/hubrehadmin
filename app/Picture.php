<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
  protected $table = 'pictures';
  
  public function section()
{
  return $this->belongsTo(Section::class, 'section_id');
}



}
