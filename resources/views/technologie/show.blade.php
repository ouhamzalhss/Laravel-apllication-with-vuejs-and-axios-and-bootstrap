@extends('layouts.app')

@section('content')

<div class="container" id="app">
  <div class="row">
     <div class="col-md-12">
         <h3>@{{ message }}</h3>
         <!--Experience-->
         <div class="panel panel-primary">
          <div class="panel-heading">
              <div class="row">
                      <div class="col-md-10"><h3 class="panel-title" >Liste des Framwork </h3></div>
                      <div class="col-md-2 text-right"><button class="btn btn-success" v-on:click="open.experience = true">Ajouter</button></div>
                  </div>
             </div>
             <div class="panel-body">
                 
                 <div v-if="open.experience">
                 <form @submit.prevent="validateForm('formexp')" data-vv-scope="formexp" >
                  <div :class="{'form-group': true , 'has-error':errors.has('formexp.titre') }">
                      <label for="titre" class="">Titre</label>
                      <input v-validate="'required|max:5'" type="text" name="titre" class="form-control" v-model="experience.titre">
                      
                      <label v-show="errors.has('formexp.titre')" class="control-label">@{{ errors.first('formexp.titre') }}</label>

                  </div>
                 <div :class="{'form-group': true , 'has-error':errors.has('formexp.contenu') }">
                      <label for="body" class="">Le contenue</label>
                      <textarea v-validate="'required|min:50'" name="contenu" class="form-control"   v-model="experience.body"></textarea>
                      
             <label v-show="errors.has('formexp.contenu')" class="control-label">@{{ errors.first('formexp.contenu') }}</label>

                  </div>
                     
                     <div class="row">
                       <div class="col-md-6">
                             <div class="form-group">
                                  <label for="dated" class="">Date début</label>
                                  <input type="date" class="form-control"  v-model="experience.date_debut">
                              </div>
                        </div>
                         <div class="col-md-6">
                                <div class="form-group">
                                  <label for="datef" class="">Date fin</label>
                                  <input type="date" class="form-control"  v-model="experience.date_fin">
                              </div>
                        </div>
                     </div>
                     <button v-if="edit.experience" class="btn btn-danger btn-block" @click="updateExperience">MODIFIER</button>

                     <button type="submit" v-else class="btn btn-info btn-block">Ajouter</button>
                    </form>
                 </div>
                 <ul class="list-group">
                    <li class="list-group-item" v-for="exp in experiences">
                        <div class="pull-right">
                          <button class="btn btn-warning btn-xs" @click="editExperience(exp)">Editer</button>
                          <button class="btn btn-danger btn-xs" @click="deleteExperience(exp)">Supprimer</button>
                        </div>
                         <h3>@{{ exp.titre }}</h3>
                         <p>@{{ exp.body }}                         
                        </p>
                         <small>@{{ exp.date_debut }} - @{{ exp.date_fin }}</small>
                     </li>
                 </ul>
             </div>
         </div> 
         
        <!--Formation-->
         <div class="panel panel-primary">
          <div class="panel-heading">
              <div class="row">
                      <div class="col-md-10"><h3 class="panel-title" >Formation</h3> </div>
                      <div class="col-md-2 text-right"><button class="btn btn-success" v-on:click="open.formation = true">Ajouter</button></div>
              </div>
            </div>
             <div class="panel-body">
                 
                 <div v-if="open.formation">
                  <div class="form-group">
                      <label for="titre" class="">Titre</label>
                      <input type="text" class="form-control" v-model="formation.titre">
                  </div>
                  <div class="form-group">
                      <label for="body" class="">Le contenue</label>
                      <textarea class="form-control"   v-model="formation.presentation"></textarea>
                  </div>
                     <button v-if="edit.formation" class="btn btn-danger btn-block" @click="updateFormation">MODIFIER</button>

                     <button v-else class="btn btn-info btn-block" @click="addFormation">Ajouter</button>
                 </div>
                 
                <ul class="list-group">
                    <li class="list-group-item" v-for="form in formations">
                        <div class="pull-right">
                          <button class="btn btn-warning btn-xs" @click="editFormation(form)">Editer</button>
                          <button class="btn btn-danger btn-xs" @click="deleteFormation(form)">Supprimer</button>
                        </div>
                        <h3>@{{ form.titre }}</h3>
                         <p>@{{ form.presentation }}   </p>
                         <small>12/12/2017 - 10/02/2018</small>
                     </li>
                 </ul>
             </div>
         </div>
    
      </div>
    </div>

</div>

@endsection
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
                  'idExperience'  => $id,
                  'idFormation'  => $id,
                  'url'           => url('/')
                  ]) !!};
</script>
 <script src="{{ asset('js/script.js') }}"></script>
@endsection


