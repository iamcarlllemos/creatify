<?php

namespace App\Livewire;

use App\Models\UserSkills;
use App\Models\Skills as SkillsList;
use Livewire\Component;

class Skills extends Component
{

    public $skills_list;
    public $all_skills;
    public $items = [];

    public $name = '';

    public $experience = '';

    public $expertise = '';

    public $description = '';

    public function mount() {
        $this->skills_list = SkillsList::all();
    }

    protected function rules():array {
        return [
            'name' => 'required|unique:user_skills,name',
            'experience' => 'required',
            'expertise' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.unique' => 'This skill is already added'
        ];
    }
    
    public function create() {

        $this->validate();
        
        $id = 1;
       
        try {
            UserSkills::create([
                'user_id' => $id,
                'name' => $this->name,
                'experience' => $this->experience,
                'expertise' => $this->expertise,
                'description' => $this->description
            ]);

            $this->reset([
                'name',
                'experience',
                'expertise',
                'description'
            ]);

            $this->dispatch('swal', [
                'type' => 'success',
                'title' => 'Success!',
                'text' => 'Skill added!',
            ]);

        } catch (\Exception $e) {
            $this->dispatch('swal', [
                'type' => 'error',
                'title' => 'Success!',
                'text' => $e->getMessage(),
            ]);
        }
        
    }

    public function items($data = null) {
        if($data->count() > 0) {
            foreach($data as $index => $skills) {
                $this->items[$index] = [
                    'id' => $skills->id,
                    'name' => $skills->name, 
                    'experience' => $skills->experience,
                    'expertise' => $skills->expertise, 
                    'description' => $skills->description
                ];
            }
        }
    }

    public function render()
    {
        $id = 1;
        $data = UserSkills::where('user_id', $id)
            ->orderByDesc('created_at')->get();
        $this->items($data);
        return view('livewire.skills');
    }
}
