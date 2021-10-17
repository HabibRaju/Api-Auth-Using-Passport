@extends('app')
<h4 class="card-title">Transaction Details
    <form action="{{route('customers.index')}}" id="filter-form" class="collapse filter-container" method="GET">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="form-group">
                    <br><label for="eventInput4">ID</label>
                    <input type="text" name="id" id="id" class="form-control">
                </div>
                <div class="form-group">
                    <br><label for="eventInput4">First Name</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>
                <div class="form-group">
                    <br><label for="eventInput4">Last name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control">
                </div>
            </div>

        <footer>
            <br><button type="submit">Search</button>
        </footer>
        <hr class="clearfix">
    </form>
@section('contents')
    {{$dataTable->table()}}
@endsection

@push('scripts')
    {{$dataTable->scripts()}}
@endpush