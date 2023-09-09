@extends('layouts.app')

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

@section('content')
    {{-- <div class="container">
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

<<<<<<< HEAD
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
=======
                    <a class="btn btn-sm btn-info" href="{{ route('todos.create') }}">Create To-do</a>
                    
                    @if (Session::has('alert-info'))
                    <div class="alert alert-info" role="alert">
                    {{ Session::get('alert-info') }}
                    </div>
                    @endif

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
                                    <a class="inner btn btn-sm btn-primary" href="{{ route('todos.edit', $todo->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                    <a class="inner btn btn-sm btn-success" href="{{ route('todos.show', $todo->id) }}"><i class="dw dw-eye"></i> View</a>
                                    <form method="post" action="{{ route('todos.destroy') }}" class="inner">
                                        @csrf
                                        @method('DELETE')
                                            <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="dw dw-delete-3"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                    </table>
                    @else
                    <h4>No to-dos are created yet</h4>
                    @endif
                    </div>
                    </div>
>>>>>>> 94eb5ce0a8a1047b4c908872204e9102a28ee075
                </div>
            </div>
        </div>
    </div> --}}

    <div class="col">
        <div class="card card-box">
            <div class="card-header"><h3 style="margin: 0px;">{{ __('My To-Do List') }}</h3></div>
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

                <a href="{{ route('todos.create') }}" class="btn btn-primary" style="margin: 20px 0px;">Add</a>

                @if (Session::has('alert-info'))
                    <div class="alert alert-info" role="alert">
                        {{ Session::get('alert-info') }}
                    </div>
                @endif

                @if (count($todos) > 0)
                    <div class="table-responsive">
                        <table class="data-table table nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus">Title</th>
                                    <th class="datatable-nosort">Description</th>
                                    <th class="datatable-nosort">Status</th>
                                    <th class="datatable-nosort">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($todos as $todo)
                                    <tr>
                                        <td class="table-plus">
                                            <div class="weight-600">{{ $todo->title}}</div>
                                        </td>
                                        <td>{{ $todo->description}}</td>
                                        <td>
                                            @if ($todo->is_completed == 1 )
                                                <a class="btn btn-sm btn-success" href="">Finished</a>
                                            @else
                                                <a class="btn btn-sm btn-danger" href="">Unfinished</a>
                                            @endif
                                        </td>
                                        <td id="outer">
                                            <a class="inner btn btn-sm btn-primary" href="{{ route('todos.edit', $todo->id) }}"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="inner btn btn-sm btn-success" href="{{ route('todos.show', $todo->id) }}"><i class="dw dw-eye"></i> View</a>
                                            <form method="post" action="{{ route('todos.destroy') }}" class="inner">
                                                @csrf
                                                @method('DELETE')
                                                    <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="dw dw-delete-3"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <h5 class="card-title">There's nothing here. Create one!</h5>
                @endif
            </div>
        </div>
    </div>
@endsection


