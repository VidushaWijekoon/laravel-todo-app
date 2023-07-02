@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="page_title text-center">Home Page</h1>
            @if (session('message'))
            <div class="alert alert-success">{{ session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Create Todo List</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="task" class="form-label">Todo Task</label>
                                    <input type="text" class="form-control-sm form-control" id="task"
                                        placeholder="Please Enter Todo Task" name="title">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    <h4>Create Todo List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tasks as $key=>$task)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $task->title }}</td>
                                    <td>
                                        @if ($task->done == '0')
                                        <span class="badge bg-secondary">Not Complete</span>
                                        @else
                                        <span class="badge bg-success">Completed</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('todo.done', $task->id ) }}"
                                            onclick="return confirm('are you sure you want to change the status in this task')">
                                            <i class="fa-solid fa-check-circle text-success mx-1"></i>
                                        </a>
                                        <a href="{{ route('todo.delete', $task->id ) }}"
                                            onclick="return confirm('are you sure you want to delete this todo task')">
                                            <i class="fa-solid fa-trash text-danger mx-1"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <h4>Data not found</h4>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')

<style>
    .page_title {
        padding-top: 10vh;
        font-size: 3rem;
        color: #59bf4b;
        font-weight: bold;
    }

    a {
        text-decoration: none;
    }
</style>

@endpush