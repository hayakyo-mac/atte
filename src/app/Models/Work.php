<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'user_id' => 'required',
        'work_date' => 'required',
        'work_begin' => 'required',
        'work_end' => 'required',
    );

    public function getTitle(){
        return 'ID'.$this->id . ':' . $this->work_date;
    }
}
