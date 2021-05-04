<?php

namespace App\Http\Controllers;

use App\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private $task;
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function index()
    {
        $data = $this->task->where('user_id', Auth::user()->id)->get();
        $titlePage = 'All Tasks';

        return view('home', compact('data', 'titlePage'));
    }

    public function store(Request $request)
    {
        $this->task->create([
            'title' => $request->title,
            'description' => $request->description,
            'importance' => $request->important,
            'status' => 1,
            'date_time' => $request->date_time,
            'user_id' => Auth::user()->id,
        ]);

        return back();
    }

    public function destroy($id)
    {
        $this->task->destroy($id);

        return response()->json(['message' => 'Xóa thành công!']);
    }

    public function update(Request $request, $id)
    {
        $task = $this->task->find($id);
        if ($request->status_current == 1) {
            $task->status = 2;
            $task->save();

            return response()->json([
                'data' => $task,
                'html' => '<i class="fas fa-clipboard task-complete-icon change-status gray" data-id="' . $id . '" data-status="2"></i>'
            ]);
        } else {
            $task->status = 1;
            $task->save();

            return response()->json([
                'data' => $task,
                'html' => '<i class="far fa-clipboard task-complete-icon change-status" data-id="' . $id . '" data-status="1"></i>'
            ]);
        }
    }

    // In - Progress
    public function inProgress()
    {
        $data = $this->task
            ->where([
                ['user_id', Auth::user()->id],
                ['status', 1]
            ])->get();

        $titlePage = 'In Progress';

        return view('home', compact('data', 'titlePage'));
    }

    // Completed
    public function completed()
    {
        $data = $this->task
            ->where([
                ['user_id', Auth::user()->id],
                ['status', 2]
            ])->get();

        $titlePage = 'Completed';

        return view('home', compact('data', 'titlePage'));
    }

    // Today
    public function today()
    {
        $data = $this->task
            ->where([
                ['user_id', Auth::user()->id],
                ['date_time', Carbon::now()->toDateString()]
            ])->get();

        $titlePage = 'Today';
        
        return view('home', compact('data', 'titlePage'));
    }

    // Tomorow
    public function tomorow()
    {
        $data = $this->task
            ->where([
                ['user_id', Auth::user()->id],
                ['date_time', Carbon::now()->tomorrow()->toDateString()]
            ])->get();

        $titlePage = 'Tomorow';
        
        return view('home', compact('data', 'titlePage'));
    }

    // Month
    public function month()
    {
        $monthStartDate = Carbon::now()->startOfMonth()->toDateString();
        $monthEndDate = Carbon::now()->endOfMonth()->toDateString();
        $data = $this->task
            ->where('user_id', Auth::user()->id)
            ->whereBetween('date_time', [$monthStartDate, $monthEndDate])
            ->get();

        $titlePage = 'Month';

        return view('home', compact('data', 'titlePage'));
    }
}
