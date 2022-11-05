<?php

namespace App\Http\Livewire;

use App\Models\Member;
use Livewire\Component;
use Livewire\WithPagination;

class GetMembersComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $members = Member::paginate(10);
        return view('livewire.get-members-component', compact('members'));
    }
}
