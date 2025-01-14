<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';
    protected $fillable = ['program', 'year', 'block'];

    //Merge Program, Year, and Block
    public function getProgramYearBlockAttribute(){
        return $this->program . ' ' . $this->year . $this->block;
    }
}
