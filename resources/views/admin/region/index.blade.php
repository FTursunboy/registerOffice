@extends('layouts.app')
@section('admin')
    <div class="content-wrapper">
<div class="row" style="margin-left: 50px; margin-right: 50px;">
    <div class="col-12">
        <div class="card" style="margin-top: 50px">
            <div class="card-header">
                <a href="#" class="btn btn-primary mr-5" data-bs-target="#add" data-bs-toggle="modal">Илова</a>
                <h3>Регион</h3>
                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Ном</th>
                        <th>Амал</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($regions as $region)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$region->name}}</td>
                            <td>

                                <a class="badge badge-primary p-2"
                                   href="#" data-bs-toggle="modal"
                                   data-bs-target="#update{{ $region->id }}">
                                    <i class="nav-icon bi bi-pencil"></i>
                                </a>
                                <a class="badge badge-danger p-2" href="{{route('region.delete', $region->id)}}" >
                                    <span class="spam"> </span>
                                    <i class="nav-icon bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <div class="modal fade" id="update{{$region->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                             aria-labelledby="add" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ route('region.update', $region->id) }}" method="POST">
                                        @csrf
                                        @method('patch')
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5">Ивазкунии регион</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="role" class="form-label">Ном</label>
                                                <input type="text" name="name" placeholder="Номи региони ворид кунед" class="form-control">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                                            <button type="submit" class="btn btn-primary">Сохранить</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
    </div>

    <div class="modal fade" id="add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('region.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Иловаи регион</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="role" class="form-label">Название</label>
                            <input type="text" name="name" placeholder="Номи регионро ворид кунед" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
</body>
