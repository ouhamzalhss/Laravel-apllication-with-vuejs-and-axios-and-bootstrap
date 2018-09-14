@extends('layouts.app')

@section('content')

<div class="container">
     <div class="row">
        <div class="col-md-8">
        <h2>Edition de la téchnologie </h2>
        <hr>
    </div>
     <div class="col-md-4 text-right" >
        <a class="btn btn-success" href="{{url('cvs')}}" style="margin-top:15px"> Retour </a>
    </div> 
    </div>
    
    
  <div class="row">
     <div class="col-md-12">
         
          @if(count($errors))
             <div class="alert alert-danger" role="alert">
                 <ul>
                   @foreach($errors->all() as $message)
                         <li>
                         {{ $message }}
                         </li>
                    @endforeach  
                 </ul>
             </div>
         @endif
         
        <form action="{{url('cvs/'.$cv->id)}}" method="post" enctype="multipart/form-data" >
                <input type="hidden" name="_method" value="PUT">
            {{ csrf_field() }}
            
         <div class="form-group">
          <label for="">Titre</label>  
           <input type="text" name="titre" class="form-control" value="{{$cv->titre}}">
         </div> 
            
         <div class="form-group">
          <label for="">Presentation</label>  
             <textarea  name="presentation" class="form-control">{{$cv->presentation}}</textarea>
         </div>
            
             <div class="form-group">
              <label for="" >Image</label>
                <input class="form-control" type="file" name="photo">
            </div>
            
         <div class="form-group">
         
           <input type="submit" name="action" class="btn btn-success">
         </div>
            
         </form>
      </div>
    </div>

</div>

@endsection('content')