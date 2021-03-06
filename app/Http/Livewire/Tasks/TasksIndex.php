<?php

namespace App\Http\Livewire\Tasks;

use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class TasksIndex extends Component
{
    public $name, $type, $platform, $link, $place, $date_start, $date_end, $time_start, $time_end, $observations, $priority, $expiration, $expoption;
    public $user, $all = false, $tasks_today, $tasks_tomorrow, $tasks_thisweek, $tasks_expired;


    public function render()
    {
        return view('livewire.tasks.tasks-index', [
            'tasks_today' => $this->tasks_today,
            'tasks_tomorrow' => $this->tasks_tomorrow,
            'tasks_thisweek' => $this->tasks_thisweek,
            'tasks_expired' => $this->tasks_expired,
            'carbon' => new Carbon(),
            'users' => User::all()->except(3),
            'statuses' => Status::all(),
        ]);
    }

    public function mount()
    {
        $this->tasks_today = Task::where('user_id', auth()->user()->id)->whereBetween('expiration', [Carbon::today(), Carbon::tomorrow()])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
        $this->tasks_tomorrow = Task::where('user_id', auth()->user()->id)->whereBetween('expiration', [Carbon::tomorrow(), Carbon::tomorrow()->addHour(24)])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
        $this->tasks_thisweek = Task::where('user_id', auth()->user()->id)->whereBetween('expiration', [Carbon::tomorrow()->addDay(1), Carbon::tomorrow()->addMonth(5)])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
        $this->tasks_expired = Task::where('user_id', auth()->user()->id)->where('expiration', '<', Carbon::today())->where('status', 'pending')->orderBy('created_at', 'asc')->get();
    }

    public function filter($filter)
    {
        switch ($filter) {
            case 'all':
                if ($this->all) {
                    $this->tasks_today = Task::whereBetween('expiration', [Carbon::today(), Carbon::tomorrow()])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                    $this->tasks_tomorrow = Task::whereBetween('expiration', [Carbon::tomorrow(), Carbon::tomorrow()->addHour(24)])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                    $this->tasks_thisweek = Task::whereBetween('expiration', [Carbon::tomorrow()->addDay(1), Carbon::tomorrow()->addMonth(5)])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                    $this->tasks_expired = Task::where('expiration', '<', Carbon::today())->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                } else {
                    $this->tasks_today = Task::where('user_id', auth()->user()->id)->whereBetween('expiration', [Carbon::today(), Carbon::tomorrow()])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                    $this->tasks_tomorrow = Task::where('user_id', auth()->user()->id)->whereBetween('expiration', [Carbon::tomorrow(), Carbon::tomorrow()->addHour(24)])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                    $this->tasks_thisweek = Task::where('user_id', auth()->user()->id)->whereBetween('expiration', [Carbon::tomorrow()->addDay(1), Carbon::tomorrow()->addMonth(5)])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                    $this->tasks_expired = Task::where('user_id', auth()->user()->id)->where('expiration', '<', Carbon::today())->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                }
                break;
            case 'user':
                $this->tasks_today = Task::where('user_id', $this->user)->whereBetween('expiration', [Carbon::today(), Carbon::tomorrow()])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                $this->tasks_tomorrow = Task::where('user_id', $this->user)->whereBetween('expiration', [Carbon::tomorrow(), Carbon::tomorrow()->addHour(24)])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                $this->tasks_thisweek = Task::where('user_id', $this->user)->whereBetween('expiration', [Carbon::tomorrow()->addDay(1), Carbon::tomorrow()->addMonth(5)])->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                $this->tasks_expired = Task::where('user_id', $this->user)->where('expiration', '<', Carbon::today())->where('status', 'pending')->orderBy('created_at', 'asc')->get();
                break;
        }
    }
    public function setCompleteTask(Task $task)
    {
        $newTask = Task::create([
            'name' => $task->name,
            'type' => $task->type,
            'platform' => $task->platform,
            'link' => $task->link,
            'place' => $task->place,
            'date_start' => $task->date_start,
            'time_start' => $task->time_start,
            'date_start' => $task->date_end,
            'time_start' => $task->time_end,
            'observations' => $task->observations,
            'expiration' => $task->expiration,
            'status' => 'complete',
            'priority' => $task->priority,
            'lead_id' => $task->lead->id,
            'user_id' => auth()->user()->id,
        ]);

        $task->update([
            'status' => 'create',
        ]);

        $newTask->events()->create(['lead_id' => $task->lead_id]);

        $task->lead->update([
            'updated_at' => Carbon::now()
        ]);

        $this->emit('render');
    }

    public function updateTask(Task $task)
    {
        switch ($this->type) {
            case 'video_conferencia':
                $this->validate([
                    'name' => 'required',
                    'link' => 'required',
                    'platform' => 'required',
                    'date_start' => 'required',
                    'time_start' => 'required',
                    'date_end' => 'required',
                    'time_end' => 'required',
                ]);
                $task->update([
                    'name' => $this->name,
                    'type' => $this->type,
                    'platform' => $this->platform,
                    'link' => $this->link,
                    'date_start' => $this->date_start,
                    'date_end' => $this->date_end,
                    'time_start' => $this->time_start,
                    'time_end' => $this->time_end,
                    'observations' => $this->observations,
                    'expiration' => $this->date_end . ' ' . $this->time_end,
                    'status' => 'modified',
                    'priority' => $this->priority,
                ]);
                $task->save();
                $newTask = Task::create([
                    'name' => $this->name,
                    'type' => $this->type,
                    'platform' => $this->platform,
                    'link' => $this->link,
                    'date_start' => $this->date_start,
                    'date_end' => $this->date_end,
                    'time_start' => $this->time_start,
                    'time_end' => $this->time_end,
                    'observations' => $this->observations,
                    'expiration' => $this->date_end . ' ' . $this->time_end,
                    'status' => 'pending',
                    'priority' => $this->priority,
                    'lead_id' => $task->lead->id,
                    'user_id' => auth()->user()->id,
                ]);
                break;
            case 'reunion':
                $this->validate([
                    'name' => 'required',
                    'place' => 'required',
                    'date_start' => 'required',
                    'time_start' => 'required',
                    'date_end' => 'required',
                    'time_end' => 'required',
                ]);

                $task->update([
                    'name' => $this->name,
                    'type' => $this->type,
                    'place' => $this->place,
                    'date_start' => $this->date_start,
                    'date_end' => $this->date_end,
                    'time_start' => $this->time_start,
                    'time_end' => $this->time_end,
                    'observations' => $this->observations,
                    'expiration' => $this->date_end . ' ' . $this->time_end,
                    'status' => 'pending',
                    'priority' => $this->priority,
                ]);
                $task->save();

                $newTask = Task::create([
                    'name' => $this->name,
                    'type' => $this->type,
                    'place' => $this->place,
                    'date_start' => $this->date_start,
                    'date_end' => $this->date_end,
                    'time_start' => $this->time_start,
                    'time_end' => $this->time_end,
                    'observations' => $this->observations,
                    'expiration' => $this->date_end . ' ' . $this->time_end,
                    'status' => 'pending',
                    'priority' => $this->priority,
                    'lead_id' => $task->lead->id,
                    'user_id' => auth()->user()->id,
                ]);
                break;
            default:
                $this->validate([
                    'name' => 'required',
                    'date_start' => 'required',
                    'time_end' => 'required',
                ]);
                $task->update([
                    'name' => $this->name,
                    'type' => $this->type,
                    'date_start' => $this->date_start,
                    'time_end' => $this->time_end,
                    'observations' => $this->observations,
                    'expiration' => $this->date_start . ' ' . $this->time_end,
                    'status' => 'modified',
                    'priority' => $this->priority,
                ]);
                $task->save();

                $newTask = Task::create([
                    'name' => $this->name,
                    'type' => $this->type,
                    'date_start' => $this->date_start,
                    'time_end' => $this->time_end,
                    'observations' => $this->observations,
                    'expiration' => $this->date_start . ' ' . $this->time_end,
                    'status' => 'pending',
                    'priority' => $this->priority,
                    'lead_id' => $task->lead->id,
                    'user_id' => auth()->user()->id,
                ]);
                break;
        }
        /* $task->events()->create(['lead_id' => $task->lead->id]); */
        $newTask->events()->create(['lead_id' => $task->lead->id]);
        $this->success = true;
        $this->emit('render');
        $this->reset('name', 'observations');
    }
}
