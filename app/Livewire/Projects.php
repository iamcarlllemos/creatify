<?php

namespace App\Livewire;

use App\Models\ProjectTechnologies;
use App\Models\SkillsInformation;
use Livewire\WithFileUploads;
use Livewire\Component;

class Projects extends Component
{

    use WithFileUploads;

    public $technologies;
    public $all_skills;
    public $items = [];
    public $images = [];

    protected $listeners = ['rowAdded'];

    public function mount() {
        $projects = ProjectTechnologies::all()->toArray();
        $groupedProjects = array_reduce($projects, function($result, $project) {
            $category = $project['category'];
            if (!isset($result[$category])) {
                $result[$category] = [];
            }
            $result[$category][] = $project;
            return $result;
        }, []);

        $this->technologies = $groupedProjects;
        $this->add_row();
    }

    public function add_row($data = null) {
        if(is_object($data) && $data->count() > 0) {
            foreach($data as $index => $skills) {
                $this->items[$index] = [
                    'id' => $skills->id,
                    'name' => $skills->name, 
                    'experience' => $skills->experience,
                    'expertise' => $skills->expertise, 
                    'description' => $skills->description
                ];
            }
        } else {
            $this->items[] = [
                'id' => '',
                'name' => '', 
                'experience' => '', 
                'expertise' => '', 
                'description' => ''
            ];
        }

        $this->dispatch('test'); 

    }

    public function remove_row($index, $id = null) {

        if($id != null) {
            $record = SkillsInformation::where('id', $id);

            if($record->exists()) {
                $record->delete();
            }
        }

        unset($this->items[$index]);
        $this->items = array_values($this->items);
    }

    public function create() {
        $validated = $this->validate();
        $id = 1;
       
        foreach ($validated['items'] as &$row) {
            SkillsInformation::updateOrCreate(['id' => $row['id']], [
                'user_id' => $id,
                'name' => $row['name'],
                'experience'  => $row['experience'],
                'expertise' => $row['expertise'],
                'description' => $row['description']
            ]);
        }
    }

    public function rules() {
        return [
            'items.*.id' => '',
            'items.*.name' => 'required',
            'items.*.experience' => 'required',
            'items.*.expertise' => 'required',
            'items.*.description' => '',
        ];
    }

    public function messages() {
        return [
            'items.*.name.required' => 'The name field is required.',
            'items.*.experience.required' => 'The experience field is required.',
            'items.*.expertise.required' => 'The expertise field is required.',
        ];
    }

    public function render()
    {
        $id = 1;
        $all_skills = SkillsInformation::where('user_id', $id)->get();
        if($all_skills->count() > 0) {
            $this->add_row($all_skills);
        }
        return view('livewire.projects');
    }
}
