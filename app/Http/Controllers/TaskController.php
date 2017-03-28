<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use Carbon\Carbon;
use Request;

class TaskController extends Controller
{
	// Return all tasks when user is at /tasks URI
	public function index()
	{
		$tasks = Task::latest('specific_duedate')->get();

		//$tasks = Task::latest('specific_duedate')->incomplete()->get();

		//dd($task->specific_duedate);

		return view('pages.tasks', compact('tasks'));
	}

	public function today()
	{

		$tasks = Task::where('due_date', 'today')->get();

		return view('pages.today', compact('tasks'));
	}

	public function tomorrow()
	{
		$tasks = Task::where('due_date', 'tomorrow')->get();

		return view('pages.tomorrow', compact('tasks'));
	}


	public function nextweek()
	{
		$tasks = Task::where('due_date', 'nextweek')->get();

		return view('pages.nextweek', compact('tasks'));
	}


	public function nextmonth()
	{
		$tasks = Task::where('due_date', 'nextmonth')->get();

		return view('pages.nextmonth', compact('tasks'));
	}

	public function someday()
	{
		$tasks = Task::where('due_date', 'someday')->get();

		return view('pages.someday', compact('tasks'));
	}

	// Adding tasks
	public function create()
	{
		return view('common.create');
	}

	// Stores values in db, redirects user
	public function store()
	{
		Task::create(Request::all());

		return redirect('tasks');
	}

	public function destroy($id)
	{
    	Task::findOrFail($id)->delete();

    	return redirect('/tasks');
	}

}
