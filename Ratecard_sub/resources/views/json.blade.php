@extends('layout.app')

@section('content')

<div class="container mx-auto">

<table class="table-auto w-full p-full">
    <thead>
        <tr>
            <th class=" p-4 text-left"  scope="col">id</th>
            <th class= text-left scope="col">Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $report)
        <tr>

            <td scope="col" class="p-5 underline">{{$report['name']}}</td>
            <td scope="col">
                <a href="{{route('report.show',$report['id'])}}" class= "border-solid border-4 border-light-blue-500 p-2 w-full">Show</a>
                <a href="{{route('report.mail',$report['id'])}}" class="border-solid border-4 border-light-blue-500 p-2 w-full">Mail</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>

@endsection
