@extends('layouts.minicrm')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Employees</h5>
          <p class="card-text">Manage available employees.</p>
          <a href="{{ url('/employees') }}" class="btn btn-dark">Go</a>
        </div>
      </div>

      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Companies</h5>
          <p class="card-text">Manage available companies.</p>
          <a href="{{ url('/companies') }}" class="btn btn-dark">Go</a>
        </div>
      </div>
</div>
@endsection
