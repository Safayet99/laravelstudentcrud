@extends('layout.app')
@section('pageHeading','Add New Student')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route('students.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Student Name</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
               
                <div class="form-group">
                    <label for="">Class</label>
                    <input type="number" name="class" id="" class="form-control">
                </div>
               
                <div class="form-group">
                    <label for="">Roll Number</label>
                    <input type="text" name="roll_no" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone_no" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Note</label>
                    <input type="text" name="note" id="" class="form-control">
                </div>
               
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Morning</option>
                        <option value="0">Evening</option>
                        <option value="2">Night</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection