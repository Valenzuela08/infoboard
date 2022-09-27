@extends('admin.admin_master')
@section('admin')
<div class="card card-default">
<div class="card-header card-header-border-bottom">
    <h2>Change Password</h2>
</div>
<div class="card-body">
    <form  method="POST" action = "{{ route('password.change')}}" class="form-pill" >

        @csrf

        <div class="form-group">
            <label for="exampleFormControlInput3">Current Password</label>
            <input type="password" class="form-control" id="current_password" name = "current_password" placeholder="current_password">
       @error('current_password')
       <span class="text-danger" >{{ $message }}</span>
       @enderror
        </div>
        <div class="form-group">
            <label for="exampleFormControlPassword3">Password</label>
            <input type="password" class="form-control" id="password" name = "password" placeholder="Password">
            @error('password')
       <span class="text-danger" >{{ $message }}</span>
       @enderror
        </div>

        <div class="form-group">
            <label for="exampleFormControlPassword3">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name = "password_confirmation" placeholder="password_confirmation">
            @error('password_confirmation')
       <span class="text-danger" >{{ $message }}</span>
       @enderror
        </div>
       
        <button type = "submit" class = "btn btn-primary btn-default">Save</button>
    </form>
</div>
</div>
@endsection