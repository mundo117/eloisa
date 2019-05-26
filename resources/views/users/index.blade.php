@extends('home')
@section('content2')
<div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Users</h3>
                </div>
                <div class="col-lg-6">
                    <!-- <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item">Tables</li>
                        <li class="breadcrumb-item">Data Tables</li>
                        <li class="breadcrumb-item active">Basic Init</li>
                    </ol> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!--Zero Configuration  Starts -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                        <div class="col-12"><h5>Users</h5></div>

                        <div class="col-12" style="padding-top:20px"><a style="float:left;" id="btn_add_users" name="btn_add_users" class="btn btn-secondary">New User</a></div>
                        </div>
                    </div>
             
                    <div class="card-body ">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Perfil</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $users)
                                    <tr>
                                        <th scope="row">{{$users->id}}</th>
                                        <td>{{$users->name}}</td>
                                        <td>{{$users->username}}</td>
                                        <td>{{$users->type}}</td>
                                        <td>
                                            @if(($users->status)==1)
                                              <span class="badge badge-success text-white">On</span>
                                            @else
                                              <span class="badge badge-secondary text-white">Off</span>
                                            @endif
                                        </td>
                                        <td>
                                            <span>
                                                <button type="button" style="margin-top:5px"class="btn btn-warning btn-detail open_modal"  data-toggle="tooltip" title="Editar Usuario" value="{{$users->id}}"><i class="fa fa-pencil"></i></button>
                                                <button type="button" style="margin-top:5px"class="btn btn-danger btn-delete delete-product" data-toggle="tooltip" title="Desactivar Usuario" value="{{$users->id}}"><i class="fa fa-trash-o"></i></button>
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                    </div>
                </div>
            </div>
            <!--Zero Configuration  Ends -->    
        </div>
          <!-- Passing BASE URL to AJAX -->
        <input id="url" type="hidden" value="{{ \Request::url() }}">

        <!-- MODAL SECTION -->
        <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">Usuarios</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body grid-showcase">
                                                <div class="container-fluid bd-example-row" >
                                                    <!-- <div class="row" style='border: solid; border-color:green;'> -->
                                                    <form id="frmUsers" name="frmUsers" class="form-horizontal" novalidate="" >
                                                    <!-- <div class="form-group error" style='border: solid; border-color:red;'> -->
                                                        <label for="inputName" class="col-sm-12 control-label">Nombre:</label>
                                                        <div class="col-sm-12">
                                                        <input type="text" class="form-control has-error" id="name" name="name" placeholder="" value="">
                                                        </div><br>
                                                        <label for="inputUserame" class="col-sm-12 control-label">Usuario:</label>
                                                        <div class="col-sm-12">
                                                        <input type="text" class="form-control has-error" id="username" name="username" placeholder="" value="">
                                                        </div><br>
                                                        <label for="inputPwd" class="col-sm-12 control-label">Contraseña:</label>
                                                        <div class="col-sm-12">

                                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                        </div><br>
                                                        <label for="inputPwd" class="col-sm-12 control-label">Confirmar Contraseña:</label>
                                                        <div class="col-sm-12">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                        </div><br>
                                                        <label for="validationCustomUsername">Tipo de Usuario</label>
                                                        <div class="input-group">
                                                            <select class="form-control js-example-basic-single" name="id_perfil" id="id_perfil" >
                                                                <option value="" >Seleccion Perfil</option>
                                                                @foreach ($usertypes as $usertype)
                                                                <option value="{{$usertype->id}}" >{{$usertype->name}}</option>
                                                                @endforeach
                                                            </select><br>

                                                        </div>
                                                    </form>
                                                </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn-save" value="add">Guardar Cambios</button>
                <input type="hidden" id="users_id" name="users_id" value="0">
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection
@section ('scriptusers')
    <script  language="JavaScript" type="text/javascript" src="{{asset('ajax/modulos/ajaxusers.js')}}"></script>
@endsection