@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-2">
      @include('sidebar')
        
        </div>

        <div class="col-10">
    <div class="card">
        <div class="card-header">
        <h6>Create New Category</h6>
         </div>
        <div class="card-body">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
        {{ $error }}    
        </div>
    
@endforeach



        <form action="/management/table/{{$table__SR->id}}" method='POST'>
        @csrf
        @method('PUT')
            <label for="">Edit Table</label>
            <input type="text" class='form-control' value='{{$table__SR->name}}' name='name'>
            <input type="submit" class='btn btn-danger' value='Update'>
        </form>
        </div>

        <div class="card-footer">
        
        </div>
    </div>


        </div>
    </div>

</div>
@endsection