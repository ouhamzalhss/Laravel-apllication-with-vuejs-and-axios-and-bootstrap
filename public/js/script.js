 var app = new Vue({
    el: '#app',
    data: {
     message: 'Application web avec Laravel framework 5.4',
     experiences : [],
     formations : [],
     open :{
         experience : false,
         formation: false
     },
     edit : {
         experience : false,
         formation: false
     },
     experience:{
         id: 0,
         cv_id: window.Laravel.idExperience,
         titre:'',
         body: '',
         date_debut: '',
         date_fin: ''
     },
    formation:{
         id: 0,
         cv_id: window.Laravel.idFormation,
         titre:'',
         presentation: ''
     },
        contact:{
         name: '',
         phone:'',
         email: '',
         message: ''
     }
        
    },
     methods: {
      getData: function(){
      
         axios.get(window.Laravel.url+'/getdata/'+window.Laravel.idExperience)
              .then(response => {
                 this.experiences = response.data.experiences;
                 this.formations = response.data.formations;
                })
             .catch(error =>{
                 console.log(error);
             })
       },
        addExperience: function(){
           
             axios.post(window.Laravel.url+'/addexperience',this.experience)
                 .then(response => {
                    if(response.data.etat){
                        this.open.experience = false;
                        this.experience.id=response.data.id;
                        this.experiences.unshift(this.experience);
                        this.experience = {
                                     id: 0,
                                     cv_id: window.Laravel.idExperience,
                                     titre:'',
                                     body: '',
                                     date_debut: '',
                                     date_fin: ''
                             };
                    }
                 })
                 .catch(error =>{
                     console.log(error);
                 })
         },
        addFormation: function(){
             axios.post(window.Laravel.url+'/addformation',this.formation)
                 .then(response => {
                    if(response.data.etat){
                        this.open.formation = false;
                        this.formations.unshift(this.formation);
                        this.formation = {
                                 id: 0,
                                 cv_id: window.Laravel.idFormation,
                                 titre:'',
                                 presentation: ''
                             };
                    }
                 })
                 .catch(error =>{
                     console.log(error);
                 })
         },
        addContact: function(){
             axios.post(window.Laravel.url+'/contact',this.contact)
                 .then(response => {
                    if(response.data.etat){
                        this.contact = {
                                 name: '',
                                 phone: '',
                                 email:'',
                                 message: ''
                             };
                    }
                 })
                 .catch(error =>{
                     console.log(error);
                 })
         },
         editExperience: function(exp){
             this.open.experience = true;
             this.edit.experience = true;
             this.experience = exp;
         },
         editFormation: function(format){
             this.open.formation = true;
             this.edit.formation = true;
             this.formation = format;
         },
         updateExperience: function(){
                axios.put(window.Laravel.url+'/updateexperience',this.experience)
                 .then(response => {
                    if(response.data.etat){
                        this.open.experience = false;
                    
                        this.experience = {
                                     id: 0,
                                     cv_id: window.Laravel.idExperience,
                                     titre:'',
                                     body: '',
                                     date_debut: '',
                                     date_fin: ''
                             };
                    }
                    this.edit.experience = false;
                 })
                 .catch(error =>{
                     console.log(error);
                 })
         },
         updateFormation: function(){
                axios.put(window.Laravel.url+'/updateformation',this.formation)
                 .then(response => {
                    if(response.data.etat){
                        this.open.formation = false;
                    
                        this.formation = {
                                 id: 0,
                                 cv_id: window.Laravel.idFormation,
                                 titre:'',
                                 presentation: ''
                             };
                    }
                    this.edit.formation = false;
                 })
                 .catch(error =>{
                     console.log(error);
                 })
         },
         deleteExperience: function(experience){
             
                     swal({
                      title: 'Are you sure?',
                      text: "You won't be able to revert this!",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.value) {
                          
                          
                            axios.delete(window.Laravel.url+'/deleteexperience/'+experience.id)
                             .then(response => {
                                if(response.data.etat){

                                    var position = this.experiences.indexOf(experience);
                                    this.experiences.splice(position,1);
                                 }
                             })
                             .catch(error =>{
                                 console.log(error);
                             })
                
                          
                          
                        swal(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    })
               
         },
         deleteFormation: function(formation){
             
                     swal({
                      title: 'Are you sure?',
                      text: "You won't be able to revert this!",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.value) {
                          
                          
                            axios.delete(window.Laravel.url+'/deleteformation/'+formation.id)
                             .then(response => {
                                if(response.data.etat){

                                    var position = this.experiences.indexOf(formation);
                                    this.formations.splice(position,1);
                                 }
                             })
                             .catch(error =>{
                                 console.log(error);
                             })
                          
                        swal(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    })
               
         },
         deleteTechnologie: function(idtech){
             
                     swal({
                      title: 'Are you sure?',
                      text: "You won't be able to revert this!",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.value) {
                          
                          
                            axios.delete(window.Laravel.url+'/deletetechnologie/'+idtech)
                             .then(response => {
                                if(response.data.etat){

                                   location.reload();
                                 }
                             })
                             .catch(error =>{
                                 console.log(error);
                             })
                
                          
                          
                        swal(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    })
               
         },
          validateForm(scope) {
      this.$validator.validateAll(scope).then((result) => {
        if (result) {
          this.addExperience();
        }
      });
     },
          validateContact(scope) {
      this.$validator.validateAll(scope).then((result) => {
        if (result) {
          this.addContact();
        }
      });
    }
     },
    mounted:function(){
        this.getData(); 
     }
 });