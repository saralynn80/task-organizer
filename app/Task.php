<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	// These are the fields the user will be allowed to be mass-assigned or edit for security reasons
    protected $fillable = [
    	'name',
    	'due_date'
    	];

    /* // Define relationship between user and task
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    */
    
}
