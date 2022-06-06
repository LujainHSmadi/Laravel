<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   /**
    * The getStudent that belong to the Subject
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function getStudent(): BelongsToMany
   {
       return $this->belongsToMany(Student::class);
   }
}
