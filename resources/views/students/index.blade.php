@extends('layout.app')
@section('pageHeading','Students List')

@section('content')
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-hover">
                <tr>
                    <th class="bg-primary text-white">ID</th>
                    <th class="bg-primary text-white">Student Name</th>
                    <th class="bg-primary text-white">Class</th>
                    <th class="bg-primary text-white">Roll Number</th>
                    <th class="bg-primary text-white">Phone Number</th>
                    <th class="bg-primary text-white">Email</th>
                    <th class="bg-primary text-white">Note</th>
                    <th class="bg-primary text-white">Status</th>
                    <th class="bg-warning text-white">Action</th>
                </tr>
                @forelse($student as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->class}}</td>
                        <td>{{$s->roll_no}}</td>
                        <td>{{$s->phone_no}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->note}}</td>
                      
                       
                        <td>{{$s->status}}</td>
                        <td>
                            <a href="{{route('students.edit',$s->id)}}" class="btn btn-primary"> Edit </a>
                            <form action="{{route('students.destroy',$s->id)}}" method="post">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No Data Found</td>
                    </tr>
                @endforelse
            </table>
            {{$student->links()}}
        </div>
    </div>

@endsection