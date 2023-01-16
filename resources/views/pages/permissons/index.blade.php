@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Ruxsatlar</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="">Ruxsatlar</a></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Qo'shish</button>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table table-editable table-nowrap align-middle table-edits">
                            <thead>
                            <tr style="cursor: pointer;">
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Izoh</th>
                                <th>Rollar</th>
                                <th>Amallar</th>
                            </tr>
                            </thead>
                            <tbody>

                             @foreach($permissions as $permission)
                                 <tr data-id="2" style="cursor: pointer;">
                                     <td>#{{$permission->id}}</td>
                                     <td>{{$permission->name}}</td>
                                     <td >{{$permission->title}}</td>
                                     <td data-field="gender">
                                         @foreach($permission->roles as $role)
                                             <button type="button" class="btn btn-info btn-rounded waves-effect waves-light">{{$role->name}}</button>
                                         @endforeach
                                     </td>
                                     <td>
                                         <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                             <i class="fas fa-pencil-alt"></i>
                                         </a>
                                         <a class="btn btn-outline-danger btn-sm edit" title="Edit">
                                             <i class="fas fa-trash-alt"></i>
                                         </a>
                                     </td>
                                 </tr>
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                    <ul class="pagination pagination-rounded justify-content-end mb-2">
                        {!! $permissions->links() !!}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
