
@extends ('home')
@section ('content2')



                        <!-- end: PAGE TITLE & BREADCRUMB -->
<div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                       @foreach ($typeuser as $typeuser)
   
            <h1><a href="javascript:window.history.back();" data-toggle="tooltip" title="Regresar a  todos los Perfiles"><i class="clip-arrow-left-2 "></i></a><label style="padding-right:20px; padding-left:20px;">Perfil: {{$typeuser->name}}</label></h1>
      
           <input id="id_typeuser" type="hidden" value="{{$typeuser->id}}">
         @endforeach
        
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
                        <div class="col-12"><h5>Validar accesos al menu</h5></div>
                    </div>
             
                    <div class="card-body ">
                        <div class="row" id="usertype-list">
                            <div class="row">
                            @foreach ($optionsmenu as $optionmenu)
                            <div class="col-sm-4">
                                        <h1><i class="{{$optionmenu->icon}}"></i> 
                                        @if(($optionmenu->status)==0)<button type="button" value="{{$optionmenu->id}}" id="optionmenu{{$optionmenu->id}}" class="btn btn-success add-option" ><i class="fa fa-unlock-alt"></i></button><h1>
                                        @else <button type="button" value="{{$optionmenu->id}}" id="optionmenu{{$optionmenu->id}}" class="btn btn-danger delete-option" ><i class="fa fa-lock"></i> </button><h1>
                                        @endif
                                        <h4>{{$optionmenu->name}}</h4>
                            </div>
                            @endforeach

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Zero Configuration  Ends -->
        </div>
        <!-- Passing BASE URL to AJAX -->
        <input id="url" type="hidden" value="{{ \Request::url() }}">

   
      
@endsection

<!-- Scripts -->
@section ('scriptOnlyPage')
    <script src="{{asset('ajax/modulos/ajaxtudetalle.js')}}"></script>
@endsection