@extends('layouts.app')

@section('content')

<div class="container">
 
    <div class="row">
        <div class="col-md-8">
        <h2>Ajout d'une nouvelle téchnologie</h2>
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
         
         
        <form action="{{url('cvs')}}" method="post" enctype="multipart/form-data">
            
            {{ csrf_field() }}
            
         <div class="form-group @if($errors->get('titre')) has-error @endif">
          <label for="">Titre</label>  
           <input type="text" name="titre" class="form-control" value="{{old('titre')}}">
           
             @if($errors->get('titre'))
                 @foreach($errors->get('titre') as $message)
                   <li> {{$message}}</li>
                 @endforeach
             @endif
            </div> 
            
         <div class="form-group @if($errors->get('presentation')) has-error @endif">
          <label for="">Presentation</label>  
             <textarea  name="presentation" class="form-control">{{old('presentation')}}</textarea>
        
             @if($errors->get('presentation'))
                 @foreach($errors->get('presentation') as $message)
                   <li> {{$message}}</li>
                 @endforeach
             @endif
            
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