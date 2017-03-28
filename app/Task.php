<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	// These are the fields the user will be allowed to be mass-assigned or edit for security reasons
    protected $fillable = [
    	'name',
    	'due_date',
        'specific_duedate'
    	];

    /* // Define relationship between user and task
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    */

    /*
    public function scopeIncomplete($query)
    {
        $query->where('specific_duedate', '>', Carbon::now());
    }
    */

    //protected $dates = ['specific_duedate'];

    //setNameAttribute (naming convention)
    public function setSpecificduedateAttribute($date)
    {
        $this->attributes['specific_duedate'] = Carbon::parse($date);
    }
}
