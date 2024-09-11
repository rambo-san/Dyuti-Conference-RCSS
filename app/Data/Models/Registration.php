<?php
namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Registration extends Model
{
    use SoftDeletes;

    protected $table = 'registration';

    protected $fillable = [
        'name', 
        'title', 
        'designation',
        'gender',
        'organization',
        'nationality',
        'passport_no',
        'discipline',
        'address',
        'phone',
        'email',
        'presenting_paper',
        'country_type',
        'user_type',
        'conference_theme',
        'no_of_days',
        'participation_date',
        'accomodation',
        'food',
        'reciept',
        'icsd',
        'proof',
        'amount',
        'currency',
        'key'

    ];
   

}
