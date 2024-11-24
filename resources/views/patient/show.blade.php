<x-app-web-layout>
    <x-slot name="title">
        Patient Details
    </x-slot>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h4>Patient Details
                            <a href="{{ url('patients') }}" class="btn btn-secondary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <td>{{ $patient->id }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $patient->p_name }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $patient->p_address }}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth</th>
                                <td>{{ $patient->p_dob }}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{ $patient->p_mobile }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-web-layout>
