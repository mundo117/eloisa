
@extends ('home')
@section ('content2')



    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Profiles</h3>
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
                        <div class="col-12"><h5>Profiles</h5></div>

                        <div class="col-12" style="padding-top:20px"><a style="float:left;" id="btn_add" name="btn_add" class="btn btn-secondary">New Profile</a></div>
                        </div>
                    </div>
             
                    <div class="card-body ">
                        <div class="row center" id="usertype-list">
                          @foreach ($usertypes as $usertype)
                              <div class="col-sm-2 " id="usertype_id{{$usertype->id}}">
                              <div class="card"  >
                                <div class="card-header text-center">
                                  <h4>{{$usertype->name}}</h4> 
                                  @if(($usertype->status)==1)
                                              <span class="badge badge-success text-white">On</span>
                                      @else
                                              <span class="badge badge-secondary text-white">Off</span>
                                      @endif
                                </div>
                                <div class="card-body">
                                  <img class="card-img-top img-rounded" src="{{asset('images/user/img_avatar5.png')}}" alt="Card image" style="width:100%">
                                <div class="col-sm-12 text-center">
                                            <a type="button"   style="margin-top:5px" class="btn btn-secondary btn-detail" data-toggle="tooltip" title="Validas opciones de Menu" href="{{ action('TypeUserDetailController@index', ['id' => $usertype->id]) }}"><i class="fa fa-navicon"></i></a>
                                            <button type="button" style="margin-top:5px"class="btn btn-warning btn-detail open_modal"  data-toggle="tooltip" title="Editar nombre del menu" value="{{$usertype->id}}"><i class="fa fa-pencil"></i></button>
                                            <button type="button" style="margin-top:5px"class="btn btn-danger btn-delete delete-product" data-toggle="tooltip" title="Desactivar menu" value="{{$usertype->id}}"><i class="fa fa-trash-o"></i></button>
                                </div>
                                </div>
                                
                              </div>
                            </div>
        
                        @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Zero Configuration  Ends -->
        </div>
          <!-- Passing BASE URL to AJAX -->
        <input id="url" type="hidden" value="{{ \Request::url() }}">

        <!-- MODAL SECTION -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                
                <h4 class="modal-title" id="myModalLabel">Perfiles</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form id="frmProducts" name="frmProducts" class="form-horizontal" novalidate="">
                  <div class="form-group error">
                    <label for="inputName" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control has-error" id="name" name="name" placeholder="" value="">
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
    </div>



      

@endsection

<!-- Scripts -->
@section ('scriptOnlyPage')
    <script  language="JavaScript" type="text/javascript" src="{{asset('ajax/modulos/ajaxtypes.js')}}"></script>
@endsection