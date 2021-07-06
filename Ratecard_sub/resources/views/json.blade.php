@extends('layout.app')

@section('content')

    <div class="h-100 d-flex align-items-center">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Tools</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $user)
                <tr>
                    <th scope="col">{{$user['name']}}</th>
                    <th scope="col">
                        <a href="{{route('report.show',$user['id'])}}" class="btn btn-primary">Show</a>
                        <a href="{{route('report.mail',$user['id'])}}" class="btn btn-primary">Mail</a>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div

@endsection
