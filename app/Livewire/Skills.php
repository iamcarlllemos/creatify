<?php

namespace App\Livewire;

use App\Models\SkillsInformation;
use App\Models\SkillsList;
use Livewire\Component;

class Skills extends Component
{

    public $skills_list;
    public $all_skills;
    public $rows = [];

    public function mount() {
        $id = 1;
        $this->skills_list = SkillsList::all();
        $all_skills = SkillsInformation::where('user_id', $id)->get();
    }

    public function add_row($data = null) {
        if(is_object($data) && $data->count() > 0) {
            foreach($data as $index => $skills) {
                $this->rows[$index] = [
                    'id' => $skills->id,
                    'name' => $skills->name, 
                    'experience' => $skills->experience,
                    'expertise' => $skills->expertise, 
                    'description' => $skills->description
                ];
            }
        } else {
            $this->rows[] = [
                'id' => '',
                'name' => '', 
                'experience' => '', 
                'expertise' => '', 
                'description' => ''
            ];
        }
    }

    public function remove_row($index, $id = null) {

        if($id != null) {
            $record = SkillsInformation::where('id', $id);

            if($record->exists()) {
                $record->delete();
            }
        }

        unset($this->rows[$index]);
        $this->rows = array_values($this->rows);
    }

    public function create() {
        $validated = $this->validate();
        $id = 1;
       
        foreach ($validated['rows'] as &$row) {
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
            'rows.*.id' => '',
            'rows.*.name' => 'required',
            'rows.*.experience' => 'required',
            'rows.*.expertise' => 'required',
            'rows.*.description' => '',
        ];
    }

    public function messages() {
        return [
            'rows.*.name.required' => 'The name field is required.',
            'rows.*.experience.required' => 'The experience field is required.',
            'rows.*.expertise.required' => 'The expertise field is required.',
        ];
    }

    public function render()
    {
        return view('livewire.skills');
    }
}
