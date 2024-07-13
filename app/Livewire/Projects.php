<?php

namespace App\Livewire;

use App\Models\UserProjects;
use App\Http\Controllers\Helper;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Projects extends Component
{

    public $items;
    public $temp_id;

    public $selected = [];

    protected $listeners = ['confirmDelete', 'delete'];

    public function mount() {
        $this->projects();
    }

    public function updateSelected(int $id) {
        if(in_array($id, $this->selected)) {
            $this->selected = array_diff($this->selected, [$id]);
        } else {
            $this->selected[] = $id;
        }
    }

    public function attemptDelete(int $id = null) {
        $this->temp_id = $id ?? $this->selected;
        $this->dispatch('confirmDelete');
    }

    public function delete() {
        DB::beginTransaction();
        try {

            if(is_array($this->temp_id)) {
                UserProjects::whereIn('id', $this->temp_id)->delete();
            } else if(is_integer($this->temp_id)) {
                UserProjects::where('id', $this->temp_id)->delete();
            }

            $this->projects();

            $this->reset('selected');

            $this->dispatch('swal', [
                'type' => 'success',
                'title' => 'Yeey!',
                'text' => 'Project selected was deleted',
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            $this->dispatch('swal', [
                'type' => 'error',
                'title' => 'Ooops',
                'text' => 'Error: ' . $e->getMessage(),
            ]);
        }
    }

    public function projects() {
        $id = 1;
        $items = UserProjects::with(['technologies', 'attachments'])
            ->where('user_id', $id)
            ->orderByDesc('created_at')
            ->get();
        $this->items = $items;
    }

    public function remove_project(int $id) {

        
    }

    public function render()
    {       
        return view('livewire.projects', [
            'items' => $this->items
        ]);
    }
}
