@extends('layouts.app')
@section('content')

<div class="container" id="app">
   
   
   
   
   <div class="panel panel-primary" style="margin-top:20px">
          <div class="panel-heading">
              <div class="row">
                      <div class="col-md-10">
                          
                              <center><h2 class="title" style="margin:3px;">Contact us</h2></center>
                             
                     
                     
                      </div>
                  </div>
             </div>
             <div class="panel-body">
                     <form @submit.prevent="validateContact('formcontact')" data-vv-scope="formcontact">
       {{ csrf_field() }}
       
         <div class="row"> 
         
         
         
           	<div class="col-md-7">								
              <div class="form-group">
				<label class="col-md-3 control-label" for="inputDefault">
                    Votre Nom<font color='red' size=4>*</font></label>
				<div class="col-md-8">
				   <div :class="{'form-group': true , 'has-error':errors.has('formcontact.name') }">
                   <input v-validate="'required|max:10'" class="form-control" type="text" name="name" v-model="contact.name" placeholder="Entrer votre nom">
                    <label v-show="errors.has('formcontact.name')" class="control-label">@{{ errors.first('formcontact.name') }}</label>
               </div>
				</div>
				</div>	
			</div>
								 
					
         
           	<div class="col-md-7">								
              <div class="form-group">
				<label class="col-md-3 control-label" for="inputDefault">
                    Téléphone<font color='red' size=4>*</font></label>
				<div class="col-md-8">
				    <div :class="{'form-group': true , 'has-error':errors.has('formcontact.phone') }">
                       <input v-validate="'required|max:10'" class="form-control"  type="text" name="phone" v-model="contact.phone" placeholder="Entrer votre Telephone">
                       <label v-show="errors.has('formcontact.phone')" class="control-label">@{{ errors.first('formcontact.phone') }}</label>
                   </div>
				</div>
				</div>	
			</div>
								
         
           	<div class="col-md-7">								
              <div class="form-group">
				<label class="col-md-3 control-label" for="inputDefault">
                    Email<font color='red' size=4>*</font></label>
				<div class="col-md-8">
				     <div :class="{'form-group': true , 'has-error':errors.has('formcontact.email') }">
                       <input v-validate="'required|max:40'" class="form-control" type="email" name="email" v-model="contact.email" placeholder="Entrer votre Email">
                     <label v-show="errors.has('formcontact.email')" class="control-label">@{{ errors.first('formcontact.email') }}</label>
                    </div>
				</div>
				</div>	
			</div>
              
              
           	<div class="col-md-7">								
              <div class="form-group">
				<label class="col-md-3 control-label" for="inputDefault">
                    Message<font color='red' size=4>*</font></label>
				<div class="col-md-8">
				    <div :class="{'form-group': true , 'has-error':errors.has('formcontact.message') }">
                      <textarea v-validate="'required|min:10'" name="message" class="form-control" v-model="contact.message" placeholder="Entrer Votre message"></textarea>
                      <label v-show="errors.has('formcontact.message')" class="control-label">@{{ errors.first('formcontact.message') }}</label>
                    </div>
				</div>
				</div>	
			</div> 
              
                    
           	<div class="col-md-7">								
              <div class="form-group">
				<label class="col-md-3 control-label" for="inputDefault"></label>
				<div class="col-md-8">
				   <input type="submit" name="envoyer" value="Valider" class="btn btn-success" >
				</div>
				</div>	
			</div>
								 

         </div>
       
    </form>
                  
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
























