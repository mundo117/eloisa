
@extends ('home')
@section ('content2')

<div class="container" style="border:none;">
        <div class="row">
                <div class="col-lg-12 margin-tb">
                <div class="page-header">
                <h1> <label style="padding-right:20px; padding-left:20px;">Perfiles</label><button id="btn_add" name="btn_add" class="btn btn-default" >Nuevo Perfil <i class="clip-plus-circle-2 "></i></button></h1>   
                  </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
           
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <div class="input-group col-sm-12">
                      <span class="input-group-btn">
                            <button class="btn" type="button">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </span>
                        <input type="text" class="form-control search-food" placeholder="search">
                  </div>
                  <br>
                </div>
                <div class="col-md-10 col-md-offset-2">
                <div class="row" id="products-list" name="products-list" style="padding-top:20px; padding-bottom:20px;">
                            @foreach ($usertypes as $usertype)
                         
                              <div id="usertype_id{{$usertype->id}}" class="card col-sm-2 bg-light text-white img-thumbnail text-center" style="margin-top:10px; margin-right:10px;">
                                  <img class="card-img-top img-rounded" src="../img/clients/img_avatar1.png" alt="Card image" style="width:80%">
                              
                              
                                  <div class="card-body text-center" style="padding-top:10px; padding-bottom:10px;">
                                  <div class="card-header">
                                     <h4 class="card-title">{{$usertype->name}}
                                     @if (($usertype->status) == 1)
                                      <span class="badge badge-success card-text">Activo</span>
                                      @elseif(($usertype->status) == 0)
                                       <span class="badge badge-secondary card-text">Inactivo</span>
                                      @endif
                                      </h4>
                                  </div> 
                                        <div class="btn-group">
                                                <a class="btn btn-info btn-detail" data-toggle="tooltip" title="Validas opciones de Menu" href="{{ action('TypeUserDetailController@index', ['id' => $usertype->id]) }}">
                                                  <i class="clip-list-2"></i>
                                                </a>
                                                <button class="btn btn-warning btn-detail open_modal"  data-toggle="tooltip" title="Editar nombre del menu"  value="{{$usertype->id}}">
                                                  <i class="clip-pencil-2"></i></li>
                                              </button>
                                                <button class="btn btn-danger btn-delete delete-product" data-toggle="tooltip" title="Desactivar menu" value="{{$usertype->id}}">
                                                  <i class="clip-cancel-circle-2"></i>
                                              </button>
                                        </div>
                                  </div>
                              </div>
                    
                            @endforeach
                        </div>
                    
                </div>
            </div>
        </div>

        <!-- Passing BASE URL to AJAX -->
        <input id="url" type="hidden" value="{{ \Request::url() }}">

        <!-- MODAL SECTION -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Product Form</h4>
              </div>
              <div class="modal-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                  <div class="form-group error">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control has-error" id="name" name="name" placeholder="Product Name" value="">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" value="add">Save Changes</button>
                <input type="hidden" id="usertype_id" name="usertype_id" value="0">
              </div>
            </div>
          </div>
        </div>

@endsection

<!-- Scripts -->
@section ('scriptOnlyPage')
    <script  language="JavaScript" type="text/javascript" src="{{asset('ajax/modulos/ajaxtypes.js')}}"></script>
@endsection