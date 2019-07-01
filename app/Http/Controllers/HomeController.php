<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class HomeController
{
    public function percentage($id)
    {
        $percentage = 100;
        
        $tasks = Task::where('project_id', $id);
        
        $totalTasks = $tasks->get()->count();
        $totalDoneTasks = $tasks->where('status', 'finish')->get()->count();

        $percentage = ($totalTasks) ? $totalDoneTasks*100/$totalTasks : 0;
        
        return view('welcome', ['percentage' => $percentage]);
    }
}
