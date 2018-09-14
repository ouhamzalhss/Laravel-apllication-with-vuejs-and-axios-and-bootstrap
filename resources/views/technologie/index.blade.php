@extends('layouts.app')
@section('content')
<div class="container-fluid" style="margin-bottom:100px" id="app"s>

<div class="row" style="margin-top:0px">
        <div class="col-md-8" style="background: rgb(223, 223, 223);padding-left:120px">
        <h2 class="title">Apprendre Les frameworks facilement avec Lhouceine OUHAMZA</h2>
           <div class="content" style="height:110px">
                <h2 class="subtitle">Apprendre facilement les fondamentaux du web </h2>
                <div class="socialicon">
                   <a href="https://www.facebook.com/ProWebDeve/"><i class="fa fa-facebook"></i></a> 
                   <a href="https://www.facebook.com/ProWebDeve/"><i class="fa fa-twitter"></i></a> 
                   <a href="https://www.linkedin.com/in/houcine-ouhamza-a5a3b1153/"><i class="fa fa-linkedin"></i></a> 
                   <a href="https://www.youtube.com/channel/UC3gabTPMiE18TeVVLdO-Vyw?view_as=subscriber"><i class="fa fw fa-youtube"></i></a> 
          
                    
                </div>
                <div>
                    <button class="btn btn-success">Voire plus</button>  
                </div>
             
           </div>
         </div>
         <div class="col-md-4" style="background: rgb(223, 223, 223);padding:0px">
            <div class="thumbnail slide" >
               <img src="{{asset('storage/image/slide2.jpg')}}" width="490px">
             </div>

         </div>
    </div> 
   <div class="container"> 
<div class="row">

<div class="col-md-9">
    
    <div class="row">
        <div class="col-md-8">
        <h2><i class="fa fa-leanpub" style="color:#ddd"></i> Les Téchnologies Web en 2018</h2>
        <h4>Nos meilleurs blog sur le développement web</h4>
      
    </div>
     <div class="col-md-4 text-right" >
        <a class="btn btn-success" href="{{url('cvs/create')}}" style="margin-top:15px">
         <img src="{{asset('storage/image/plus.png')}}" width="20px"> </a>
    </div> 
    </div>
   
 
    
     <div class="row">
     
     @foreach($tech as $item)
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <a href="{{url('showcvs/'.$item->id)}}">
                    <img src="{{asset('storage/'.$item->photo)}}" alt="...">
                </a>
              <div class="caption">
                <h3 style="text-align:center" class="titre">{{$item->titre}}</h3>
               
                <p><?= substr($item->presentation, 0, 80).'...'; ?></p>
                <small>12/12/2018</small>
                <div id="details">
                   
                   <a href="{{url('showcvs/'.$item->id)}}" class="btn btn-primary btn-xs">Details</a>       
             
                          
                  </div>
              </div>
            </div>
          </div>
     @endforeach
    </div>
    
    </div> 
    <div class="col-md-3" style="margin-top:15px">
        
  <ul class="list-group">
  <li class="list-group-item active" style="background:#4d4d4d !important">Les Framework plus populairs </li>
  <a href="{{url('laravelframework/')}}"><li class="list-group-item item">Laravel 5.4</li></a>
  <li class="list-group-item item">Angular 6</li>
  <li class="list-group-item item">Symfony 5</li>
  <li class="list-group-item item">Codeigniter 3</li>
  <li class="list-group-item item">Bootstrap 3</li>
  <li class="list-group-item item">Vue js 2.0</li>
</ul>
    </div>   
</div>
</div>
</div>

@endsection('content')


@section('javascript')
    <script src="{{asset('js/vue.js')}}"></script>
<!--
    <script src="{{asset('js/veeValidate.js')}}"></script>
-->
      <script src="https://cdn.jsdelivr.net/npm/vee-validate@latest/dist/vee-validate.js"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.2/dist/sweetalert2.all.min.js"></script>
    
<script>
Vue.use(VeeValidate);
    
window.Laravel = {!! json_encode([
                  'csrfToken'     => csrf_token(),
                  'url'           => url('/')
                  ]) !!};
</script>
 <script src="{{ asset('js/script.js') }}"></script>
@endsection


