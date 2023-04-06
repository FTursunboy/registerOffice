@extends('layouts.app')
@section('admin')
    <div class="content-wrapper">
        <div class="row" style="margin-left: 50px; margin-right: 50px;">
            <div class="col-12">
                <div class="card" style="margin-top: 50px">
                    <div class="card-header">
                        @if(\Session::has('mess'))
                            <div class="alert alert-success" id="mess">
                                {{\Session::get('mess')}}
                            </div>
                            <script>
                                setInterval(() => {
                                    document.getElementById('mess').remove()
                                }, 5000)
                            </script>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger" id="err">
                                <ul>
                                    <li>{{$errors->first()}}</li>
                                </ul>
                            </div>
                            <script>
                                setInterval(() => {
                                    document.getElementById('err').remove()
                                }, 5000)
                            </script>
                        @endif
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
                                <th>Регион</th>
                                <th>Амал</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($otdels as $otdel)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$otdel->name}}</td>
                                    <td>{{$otdel->region}}</td>
                                    <td>
                                    <a class="badge badge-primary p-2"
                                       href="{{route('region.details')}}">
                                        <i class="nav-icon bi bi-eye"></i>
                                    </a>
                                    <a class="badge badge-primary p-2"
                                       href="#" data-bs-toggle="modal"
                                       data-bs-target="#update{{ $otdel->id }}">
                                        <i class="nav-icon bi bi-pencil"></i>
                                    </a>
                                    <a class="badge badge-danger p-2" href="{{route('otdels.delete', $otdel->id)}}">
                                        <span class="spam"> </span>
                                        <i class="nav-icon bi bi-trash"></i>
                                    </a>
                                    </td>
                                </tr>
                                <div class="modal fade" id="update{{$otdel->id}}" data-bs-backdrop="static"
                                     data-bs-keyboard="false" tabindex="-1"
                                     aria-labelledby="add" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{ route('otdels.update', $otdel->id) }}" method="POST">
                                                @csrf
                                                @method('patch')
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5">Ивазкунии отдел</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="role" class="form-label">Ном</label>
                                                        <input type="text" name="name" value="{{$otdel->name}}"
                                                               placeholder="Номи отделро ворид кунед"
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="role" class="form-label">Региони мувофикро интихоб
                                                            кунед</label>
                                                        <select class="form-control" name="region_id" id="">
                                                            @foreach($regions as $region)
                                                                <option
                                                                    value="{{$region->id}}" {{ ($region->id == $otdel->region_id  ) ? 'selected' : '' }}>{{$region->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Отмена
                                                    </button>
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
                <form action="{{ route('otdels.store') }}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h1 class="modal-title fs-5">Иловаи регион</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="role" class="form-label">Название</label>
                            <input type="text" name="name" placeholder="Номи отделро ворид кунед" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role" class="form-label">Региони мувофикро интихоб кунед</label>
                            <select class="form-control" name="region_id" id="">
                                @foreach($regions as $region)
                                    <option value="{{$region->id}}">{{$region->name}}</option>
                                @endforeach
                            </select>
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
