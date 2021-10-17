@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                
                <div class="card-body">
                   <table class="table border" id="myTable">
                        <thead>
                            <th>ID</th>
                            <th>Fist Name</th>
                            <th>Last Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Address</th>
                        </thead>
                        <tbody>
                            @foreach ($customers as $key=>$customer)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$customer->first_name}}</td>
                                    <td>{{$customer->last_name}}</td>
                                    <td>{{$customer->phone}}</td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->age}}</td>
                                    <td>{{$customer->gender}}</td>
                                    <td>{{$customer->address}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
