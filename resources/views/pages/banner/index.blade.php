@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="page_title text-center">Banner Page</h1>
            @if (session('message'))
            <div class="alert alert-success">{{ session('message')}}</div>
            @endif
            <div class="card">
                @if ($errors->any())
                <div class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                    <div class="">{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <div class="card-header">
                    <h4>Create Banner List</h4>
                </div>
                <div class="card-body">
                    <form role="form" action="{{ route('banner.save') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <input class="form-control" name="title" type="text"
                                        placeholder="Enter Banner Title" required>
                                </div>
                                <div class="mt-5 form-group">
                                    <input class="form-control dropify" name="images" type="file"
                                        accept="image/jpg, image/jpeg, image/png" required>
                                </div>
                            </div>
                            <div class="mt-4 text-center col-lg-8">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header">
                    <h4>Create Banner List</h4>
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
                                @forelse ($banners as $key => $banner)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $banner->title }}</td>
                                    <td>
                                        @if ($banner->done == '0')
                                        <span class="badge bg-secondary">Not Complete</span>
                                        @else
                                        <span class="badge bg-success">Completed</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('banner.delete', $banner->id ) }}"
                                            onclick="return confirm('are you sure you want to delete this todo banner')">
                                            <i class="fa-solid fa-trash text-danger mx-1"></i>
                                        </a>
                                        <a href="{{ route('banner.status', $banner->id) }}"
                                            onclick="return confirm('are you sure you want to change the status in this task')">
                                            <i class="fa-solid fa-check-circle text-success mx-1"></i>
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <span>No Data</span>
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