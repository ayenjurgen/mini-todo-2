@extends('layouts.app')

@section('styles')
<style>
#outer
{
    width: auto;
    text-align: center;
}
.inner
{
    display: inline-block;
    margin: 5px;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">{{ __('To-do Lists') }}</div>

                <div class="card-body">

                @if (Session::has('alert-success'))
                <div class="alert alert-success" role="alert">
                {{ Session::get('alert-success') }}
                </div>
                @endif

                @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
                </div>
                @endif

                @if (Session::has('alert-info'))
                <div class="alert alert-info" role="alert">
                {{ Session::get('alert-info') }}
                </div>
                @endif

                <a class="btn btn-sm btn-info" href="{{ route('todos.create') }}">Create To-do</a>
                

                @if (count($todos) > 0)
                <div class="table-responsive">
	            <table class="table table-striped">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($todos as $todo)
                        <tr>
                            <td>{{ $todo->title}}</td>
                            <td>{{ $todo->description}}</td>
                            <td>
                                @if ($todo->is_completed == 1 )
                                    <a class="btn btn-sm btn-success" href="">Completed</a>
                                @else
                                    <a class="btn btn-sm btn-danger" href="">Not finish</a>
                                @endif
                            </td>
                            <td id="outer">
                                <a class="inner btn btn-sm btn-primary" href="{{ route('todos.edit', $todo->id) }}">Edit</a>
                                <a class="inner btn btn-sm btn-success" href="{{ route('todos.show', $todo->id) }}">View</a>
                                <form method="post" action="{{ route('todos.destroy') }}" class="inner">
                             @csrf
                             @method('DELETE')
                                <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                                <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                
    
                            </form>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
                </table>
                {{ $todos->links('pagination::bootstrap-4') }}
                @else
                <h4>No to-dos are created yet</h4>
                @endif
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
