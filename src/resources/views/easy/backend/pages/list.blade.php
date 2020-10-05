@extends('easyview::backend.layout')
@section('title','Dashboard')
@section('container')

    @php($user = \Illuminate\Support\Facades\Auth::user())
    <div class="row">

        <div class="col-12">
            <div class="card">

                <div class="card-body">
                    <a class="btn btn-app" href="{{route($metaData->view->getRoutePrefix('.create'))}}">
                        <i class="fas fa-plus"></i> Add
                    </a>
{{--                    <a class="btn btn-app">--}}
{{--                        <i class="fas fa-pause"></i> Pause--}}
{{--                    </a>--}}
{{--                    <a class="btn btn-app">--}}
{{--                        <i class="fas fa-save"></i> Save--}}
{{--                    </a>--}}
{{--                    <a class="btn btn-app">--}}
{{--                        <span class="badge bg-warning">3</span>--}}
{{--                        <i class="fas fa-bullhorn"></i> Notifications--}}
{{--                    </a>--}}
{{--                    <a class="btn btn-app">--}}
{{--                        <span class="badge bg-success">300</span>--}}
{{--                        <i class="fas fa-barcode"></i> Products--}}
{{--                    </a>--}}
{{--                    <a class="btn btn-app">--}}
{{--                        <span class="badge bg-purple">891</span>--}}
{{--                        <i class="fas fa-users"></i> Users--}}
{{--                    </a>--}}
{{--                    <a class="btn btn-app">--}}
{{--                        <span class="badge bg-teal">67</span>--}}
{{--                        <i class="fas fa-inbox"></i> Orders--}}
{{--                    </a>--}}
{{--                    <a class="btn btn-app">--}}
{{--                        <span class="badge bg-info">12</span>--}}
{{--                        <i class="fas fa-envelope"></i> Inbox--}}
{{--                    </a>--}}
{{--                    <a class="btn btn-app">--}}
{{--                        <span class="badge bg-danger">531</span>--}}
{{--                        <i class="fas fa-heart"></i> Likes--}}
{{--                    </a>--}}
                </div>
                <!-- /.card-body -->
            </div>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User List</h3>
                    <div class="card-tools">
                        <form action="" method="get">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="key" class="form-control float-right" placeholder="Search By Email">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            @php($listHeaders = $metaData->view->headers())
            @php($listData = $metaData->view->list())

            <!-- /.card-header -->
                <div class="card-body table-head-fixed text-nowrap">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            @include('easyview::backend.easy.table.header')
                        </tr>
                        </thead>
                        <tbody>
                            @include('easyview::backend.easy.table.body')
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
{{--                {!! $list->links() !!}--}}
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
