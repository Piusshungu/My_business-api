<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenditures extends Model
{
    protected $table = 'expenditure';
    protected $fillable = ['expenditures_date', 'expenditures_for', 'expenditures_amount'];
}
