<?php

namespace App\Livewire;

use App\Models\ProjectAttachments;
use App\Models\ProjectTechnologies;
use App\Models\Technologies;
use App\Models\UserProjects;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Livewire\Component;

class EditProjects extends Component
{

    use WithFileUploads;
    public $technologies_lists;
    public $selectedTechnologies;
    public $caption;
    public $date_started;
    public $date_finished;
    public $description;
    public $attachments;

    protected $listeners = ['init'];

    public function mount() {
        $project_technologies = Technologies::all()->toArray();
        $groupedProjects = array_reduce($project_technologies, function($result, $project) {
            $category = $project['category'];
            if (!isset($result[$category])) {
                $result[$category] = [];
            }
            $result[$category][] = $project;
            return $result;
        }, []);
        $this->technologies_lists = $groupedProjects;
    }
    
    public function rules() {
        return [
            'selectedTechnologies' => 'required',
            'caption' => 'required',
            'date_started' => 'required',
            'date_finished' => 'required',
            'attachments' => 'required',
            'attachments.*' => 'image|mimes:jpg,jpeg,png,gif',
        ];
    }

    public function messages() {
        return [
          
        ];
    }
    
    public function remove_image(int $index) {
        unset($this->attachments[$index]);
    }

    public function create() {

        $this->dispatch('reloadSelectize');

        $this->validate();

        $id = 1;

        DB::beginTransaction();

        try {

            $project = UserProjects::create([
                'user_id' => $id,
                'caption' => $this->caption,
                'date_started' => $this->date_started,
                'date_finished' => $this->date_finished,
                'description' => $this->description,
            ]);
    
            if($this->selectedTechnologies) {
                foreach($this->selectedTechnologies as $item) {
                    ProjectTechnologies::create([
                        'project_id' => $project->id,
                        'name' => $item
                    ]);
                }
            }
    
            if($this->attachments) {
                foreach($this->attachments as $item) {
                    $original = $item->getClientOriginalName();
                    $filename = $original . '_' . time() . '.' . $item->getClientOriginalExtension();
                    ProjectAttachments::create([
                        'project_id' => $project->id,
                        'caption' => '',
                        'attachment' => $filename
                    ]);
                    $item->storeAs('project_attachments', $filename, 'public');
                }
            }
    
            $this->dispatch('swal', [
                'type' => 'success',
                'title' => 'Success!',
                'text' => 'Saved!',
            ]);

            $this->dispatch('resetSelectize');

            $this->resetExcept('technologies_lists');

            DB::commit();
            
        } catch (\Exception $e) {

            $this->dispatch('swal', [
                'type' => 'error',
                'title' => 'Ooops',
                'text' => 'Error: ' . $e->getMessage(),
            ]);

            DB::rollBack();
        }

    }
    public function render()
    {
        return view('livewire.edit-projects');
    }
}
