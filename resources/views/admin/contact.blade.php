@extends('admin.layout.app')
@section('title')
    All Contact
@endsection
@section('content')
    <div class="table-responsive">
        <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">Registration Date</th>
            <th scope="col">FullName</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contact as $item)
                <tr>
                    <th scope="row">{{$item->created_at}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->message}}</td>
                    <td><a href="{{route('admin.contact.delete',$item)}}" class="text-decoration-none" onclick="return confirm('are you sure to delete this teacher ')">Delete</a></td>
                </tr>
            @endforeach
        

        </tbody>
        </table>
    </div>
@endsection
        
      
