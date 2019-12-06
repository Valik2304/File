<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Excel_Project extends Model
{
    protected $table = 'excel_project';

    protected $fillable = [
        'Heading_1',
        'Heading_2',
        'Category',
        'Manufacturer',
        'Name' ,
        'Model_number',
        'Text',
        'Price',
        'Guarantee',
        'Availability',
        'Other' ,
    ];

    public static function firstOrCreate($i)
    {
    }
}
