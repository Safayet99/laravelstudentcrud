@extends('layout.app')
@section('pageHeading','Add New product')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <form action="{{route('students.update',$student->id)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="">Student Name</label>
                    <input type="text" name="name" value="{{$student->name}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Class</label>
                    <input type="number" name="class" value="{{$student->class}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Roll Number</label>
                    <input type="text" name="roll_no" value="{{$student->roll_no}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone_no" value="{{$student->phone_no}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{$student->email}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Note</label>
                    <input type="text" name="note" value="{{$student->note}}" id="" class="form-control">
                </div>
              
                <div class="form-group">
                    <label for="">Stock</label>
                    <select name="status" id="" class="form-control">
                        <option value="1" {{ $student->status==1?"selected":""}}>Morning</option>
                        <option value="0" {{ $student->status==0?"selected":""}}>Evaning</option>
                        <option value="0" {{ $student->status==2?"selected":""}}>Night</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection