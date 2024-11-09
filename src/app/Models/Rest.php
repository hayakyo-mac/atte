<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'work_id' => 'required',
        'rest_begin' => 'required',
        'rest_end' => 'required',
    );

    public function getTitle(){
        return 'ID'.$this->id . ':' . $this->work_date;
    }
}
