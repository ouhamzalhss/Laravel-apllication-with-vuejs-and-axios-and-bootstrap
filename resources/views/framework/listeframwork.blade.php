@extends('layouts.app')

@section('content')

<div class="container-fluid" style="margin-bottom:100px">

     <div class="row" style="margin-top:0px; height:150px">
      
         <div class="col-md-12" style="background: rgb(223, 223, 223);padding-right:0px">
           <h3  class="title">Les frameworks PHP</h3>

        <p>Soyez toujours informé : Actualités, Tendances, Buzz, High-Tech, et PLUS ENCORE !</p>
        <a href="https://laravel.com/docs/5.6">Documantation</a>
         </div>
    </div>


<div class="container-fluid">
<div class="row" style="height:100%">
    <div class="col-md-9">
        <h2> <i class="fa fa-leanpub" style="color:#ddd"></i> Les Framworks</h2>
        
           <div class="row">
            <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
                <a href="#">
                    <img src="{{asset('storage/image/laravel.jpeg')}}" alt="...">
                </a>
              <div class="caption">
                <small>12/12/2018</small>
              </div>
            </div>
          </div>   
             <div class="col-sm-8 col-md-8">
            <h4>Laravel</h4>
            <p>All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by the framework. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group, which provides features like session state and CSRF protection. The routes in routes/api.php are stateless and are assigned the api middleware group.</p>
            <button class="btn btn-success btn-xs pull-right" id="liresuite">Lire la suite</button>
          </div>
        </div>
          
           <div class="row">
            <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
                <a href="#">
                    <img src="{{asset('storage/image/symfony.png')}}" alt="...">
                </a>
              <div class="caption">
                <small>12/12/2018</small>
              </div>
            </div>
          </div>   
             <div class="col-sm-8 col-md-8">
            <h4>Symfony</h4>
            <p>All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by the framework. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group, which provides features like session state and CSRF protection. The routes in routes/api.php are stateless and are assigned the api middleware group.</p>
            <button class="btn btn-success btn-xs pull-right" id="liresuite">Lire la suite</button>
          </div>
        </div>
          
           <div class="row">
            <div class="col-sm-4 col-md-4">
            <div class="thumbnail">
                <a href="#">
                    <img src="{{asset('storage/image/codeigniter.jpg')}}" alt="...">
                </a>
              <div class="caption">
                <small>12/12/2018</small>
              </div>
            </div>
          </div>   
             <div class="col-sm-8 col-md-8">
            <h4>Codeigniter</h4>
            <p>All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by the framework. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group, which provides features like session state and CSRF protection. The routes in routes/api.php are stateless and are assigned the api middleware group.</p>
            <button class="btn btn-success btn-xs pull-right" id="liresuite">Lire la suite</button>
          </div>
        </div>
        
        
    </div>   

  <div class="col-md-3" style="margin-top:15px">      
  <ul class="list-group">
  <li class="list-group-item active" style="background:#4d4d4d !important">Les Framework plus populairs </li>
  <li class="list-group-item item"><a href="{{url('laravelframework/')}}">Laravel 5.4</a></li>
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