<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
  public function section()
  {
    return $this->belongsTo(Section::class, 'section_id');
  }
}
