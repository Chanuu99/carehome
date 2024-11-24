<x-app-web-layout>
    <x-slot name='title'>
        Care Home Patients
    </x-slot>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Patients
                            <a href='{{url('patients/create')}}' class='btn btn-primary float-end'>Add Patient</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Date of Birth</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($patients as $patient)
                                <tr>
                                    <td>{{$patient->id}}</td>
                                    <td>{{$patient->p_name}}</td>
                                    <td>{{$patient->p_address}}</td>
                                    <td>{{$patient->p_dob}}</td>
                                    <td>{{$patient->p_mobile}}</td>
                                    <td>
                                        <a href="{{url('patients/'.$patient->id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                                        <a href="{{url('patients/'.$patient->id.'/delete')}}" 
                                            class="btn btn-danger mx-1"
                                            onclick="return confirm('Are you sure you want to delete this patient?')"
                                            >
                                            Delete
                                        </a>
                                        <a href="{{url('patients/'.$patient->id.'/show')}}" class="btn btn-info mx-2">View</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</x-app-web-layout>
   