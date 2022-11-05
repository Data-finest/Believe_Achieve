<div>
    <div class="card">
        <div class="card-title">
            <div class="d-flex flex-row justify-content-between">
                <div class="mx-2" style="text-transform: uppercase;">All Members</div>
                {{-- <div class="mx-2">
                    <input type="search" placeholder="Search" class="form-control " style="width: 300px;"
                        wire:model="search">
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                @include('layouts.messages')
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                @endif
                <!--Table-->
                <table class="table">

                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th class="th-lg">First name</th>
                            <th class="th-lg">Last name</th>
                            <th class="th-lg">Parents name</th>
                            <th class="th-lg">Emergency contact</th>
                            <th class="th-lg">Birth Date</th>
                            <th class="th-lg">Age</th>
                            <th class="th-lg">Address</th>
                            <th class="th-lg">City</th>
                            <th class="th-lg">Post Code</th>
                            <th class="th-lg">Communication Mode</th>
                        </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody>


                        @forelse ($members as $member)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $member->first_name }}</td>
                                <td>{{ $member->last_name }}</td>
                                <td>{{ $member->parents_name }}</td>
                                <td>{{ $member->emergency_contact }}</td>
                                <td>{{ $member->birth_date }}</td>
                                <td>{{ $member->age }}</td>
                                <td>{{ $member->address }}</td>
                                <td>{{ $member->city }}</td>
                                <td>{{ $member->post_code }}</td>
                                <td>{{ $member->communication_mode }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-danger">
                                    No record found!
                                </td>
                            </tr>
                        @endforelse
                </table>
                @if ($members->all())
                    {{ $members->links() }}
                @endif
                <!--Table-->

            </div>
        </div>
    </div>
</div>
