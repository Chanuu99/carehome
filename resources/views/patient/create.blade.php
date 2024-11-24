<x-app-web-layout>
    <x-slot name='title'>
        Add Patients
    </x-slot>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                @if(@session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Add Patients
                            <a href='{{url('patients')}}' class='btn btn-primary float-end'>Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('patients/create')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="p_name" value="{{ old('p_name') }}" />
                                @error('p_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <textarea name="p_address"  class="form-control" rows="3">{{ old('p_address') }}</textarea>
                                @error('p_address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Date of Birth</label>
                                <input type="date" name="p_dob" value="{{ old('p_dob') }}" />
                                @error('p_dob')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Mobile</label>
                                <input type="text" name="p_mobile" value="{{ old('p_mobile') }}" />
                                @error('p_mobile')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class='mb-3'>
                                <button type='submit' class='btn btn-primary'>Save</button>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</x-app-web-layout>
   