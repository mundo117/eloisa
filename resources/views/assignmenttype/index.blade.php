
@extends ('home')
@section ('content2')

<div class="container">

<div class="row">
    <div class="col-lg-12 margin-tb">
    @foreach ($typeuser as $typeuser)
    <div class="page-header">
            <h1><a href="javascript:window.history.back();" data-toggle="tooltip" title="Regresar a  todos los Perfiles"><i class="clip-arrow-left-2 "></i></a><label style="padding-right:20px; padding-left:20px;">Perfil: {{$typeuser->name}}</label></h1>
        </div>
           <input id="id_typeuser" type="hidden" value="{{$typeuser->id}}">
         @endforeach
        
                        <!-- end: PAGE TITLE & BREADCRUMB -->
    </div>
</div>
         <div class="col-md-8 col-md-offset-2">
        
                <div class="row">
                            @foreach ($optionsmenu as $optionmenu)
                            <div class="col-sm-4">
                                        <h1><i class="{{$optionmenu->icon}}"></i> 
                                        @if(($optionmenu->status)==0)<button type="button" value="{{$optionmenu->id}}" id="optionmenu{{$optionmenu->id}}" class="btn btn-success add-option" ><i class="clip-unlocked"></i></button><h1>
                                        @else <button type="button" value="{{$optionmenu->id}}" id="optionmenu{{$optionmenu->id}}" class="btn btn-danger delete-option" ><i class="clip-locked"></i> </button><h1>
                                        @endif
                                        <h4>{{$optionmenu->name}}</h4>
                            </div>
                            @endforeach

               </div>

            </div>
        </div>

        <!-- Passing BASE URL to AJAX -->
        <input id="url" type="hidden" value="{{ \Request::url() }}">

   
      
@endsection

<!-- Scripts -->
@section ('scriptOnlyPage')
    <script src="{{asset('ajax/modulos/ajaxtudetalle.js')}}"></script>
@endsection