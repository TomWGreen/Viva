<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class StudentController extends Component
{
    public $students, $name, $email, $identificationType;
    public $identificationNumber, $studentId;
    public $updateMode = false;
   
    public function mount()
    {
        $this->resetInputFields();
        
        $this->students = Student::all();
        return view('livewire.student-controller');
    }
  
    public function render()
    {
        $this->students = Student::all();
        return view('livewire.student-controller');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->email = '';
        $this->identificationType = 'ID';
        $this->identificationNumber = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'identificationType' => 'required',
            'identificationNumber' => 'nullable',
        ]);
  
        Student::create($validatedData);
  
        session()->flash('message', 'Student Created Successfully.');
  
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $this->student_id = $id;
        $this->name = $student->name;
        $this->email = $student->email;
        $this->identificationType = $student->identification_type;
        $this->identificationNumber = $student->identification_number;
  
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'identificationType' => 'required',
            'identificationNumber' => 'nullable',
        ]);
  
        $student = Student::find($this->student_id);
        $student->update([
            'name' => $this->name,
            'email' => $this->email,
            'identification_type' => $this->identificationType,
            'identification_number' => $this->identificationNumber,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Student Updated Successfully.');
        $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Student::find($id)->delete();
        session()->flash('message', 'Student Deleted Successfully.');
    }
}
