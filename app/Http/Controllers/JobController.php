<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
    public function index(): View
    {
      return view('jobs.index');
    }

    public function create(): View
    {
      return view('jobs.create');
    }

    public function store(Request $request): RedirectResponse
    {
       $validated=$request->validate([
         'title'=>['required','string'],
         'salary'=>['required','decimal:2']
       ]);

       Job::create($validated);

       return redirect(route('jobs.show'));

    }
    public function show(): View
    {
        $jobs=Job::all();
        return view('jobs.show',[
            'jobs'=>$jobs,
        ]);
    }
    public function display(Job $job): View 
    {
       return view('jobs.display',[
        'job'=>$job
       ]);
    }
    public function edit(Job $job): view
    {
      return view('jobs.edit',[
        'job'=>$job
      ]);
    }
    public function update(Request $request,Job $job): RedirectResponse
    {
      $request->validate([
        'title'=>['required','string'],
        'salary'=>['required','decimal:2']
      ]);
   
      $job->update([
        'title' => request('title'),
        'salary' => request('salary')
        ]);

      return redirect('/jobs'); 
    }
    public function delete(Job $job): RedirectResponse
    {
      $job->delete();
      return redirect('/jobs');
    }
}
