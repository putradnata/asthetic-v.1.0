<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class univSchedule extends Model
{

    protected $table = 'univSchedules';

    //there's no created and updated time
    public $timestamps = false;
}
