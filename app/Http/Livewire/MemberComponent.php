<?php

namespace App\Http\Livewire;

use App\Imports\ImportMember;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class MemberComponent extends Component
{
    public $file;
    protected $rules = [
        'file'    =>  'required|file|mimes:xlsx,xls,csv',
    ];
    public function upload()
    {
        $this->validate();
        Excel::import(new ImportMember(), $this->file->path());
    }

    use WithFileUploads;

    public function render()
    {
        return view('livewire.member-component');
    }
}
