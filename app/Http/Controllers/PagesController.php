<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function today()
    {
    	/* You can pass variables to the view here
    	$dummytask = 'Feed the cat'; 
    	*/

    	/* with('variable', 'whatthevariableis equal to')
    	return view('pages.today')->with('dummytask', $dummytask); 
    	*/

    	/* or you can pass an array
    	return view('pages.today')->with([
    		'task1' => 'Play Bball',
    		'task2' => 'Vacuum',
    		'task3' => 'Make dinner'
    		]);
    	*/

    	/* same thing as this: */
    	$tasks = ['Play Bball', 'Vacuum', 'Make dinner'];

    	return view('pages.today', compact('tasks'));
    }

    public function tomorrow()
    {
    	$tasks = ['Rent UHaul', 'Walk the cat', 'Love the Roo'];

    	return view('pages.tomorrow', compact('tasks'));
    }

    public function nextweek()
    {
    	$tasks = ['Go to gym', 'Update resume', 'Apply for job'];

    	return view('pages.nextweek', compact('tasks'));
    }

    public function nextmonth()
    {
    	$tasks = ['Be a loaf', 'Call dad', 'Send bday card'];

    	return view('pages.nextmonth', compact('tasks'));
    }

    public function someday()
    {
    	$tasks = ['Write a book', 'Vacuum', 'Buy a house'];

    	return view('pages.someday', compact('tasks'));
    }

}
