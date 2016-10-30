<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectDisplayer extends Model
{
    //
    protected $tabel = 'project_displayers';
     protected $fillable = [
         'ProjectTitle',
         'ProjectImage'
         ];
}
