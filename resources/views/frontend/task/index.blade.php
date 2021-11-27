@extends('frontend.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Manage Task</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('task.create') }}"> Create New</a>
            </div><br>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($tasks))
                @foreach($tasks as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->subject }}</td>
                        <td>{{ $row->message }}</td>
                        <td>{{ $row->fullDate }}</td>
                        <td>
                            <img src="images/{{ $row->img }}" style="height: 50px; width: 50px">
                        </td>
                    </tr>
                @endforeach
            @endif    
        </tbody>
    </table>

@endsection