<?php

namespace WebPro\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use WebPro\Technologie;
use WebPro\Experience;
use WebPro\Formation;
use Auth;

use WebPro\Http\Requests\cvRequest;

class CvController extends Controller
{
    //middleware auth
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index(){
       //$listcv = Cv::all();
        if(Auth::user()->is_admin){
           $listtech = Technologie::all(); 
        }else{
              $listtech = Auth::user()->technologies;
        }
      
        //$listcv = Cv::where('user_id',Auth::user()->id)->get();
        return view('technologie.index',['tech'=>$listtech]);
    }
    //
    public function create(){
    return view('technologie.create');   
    }
    //
    public function store(cvRequest $request){
        $cv = new Cv();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->user_id = Auth::user()->id;
        
        if($request->hasFile('photo')){
           $cv->photo =  $request->photo->store('image');  
        }
        
        $cv->save();
        session()->flash('success','La téchnologie a été ajoutée !');
        
        return redirect('cvs');
    }
    // get cv --------------------------------//
    public function edit($id){
        $cv = Cv::find($id);
        // apply the policy
        $this->authorize('update',$cv);
        return view('technologie.edit' , ['cv'=> $cv ]);
    }
    // Modifier un cv----------------------------//
    public function update(cvRequest $request, $id){
           $cv = Cv::find($id);
           $cv->titre = $request->input('titre');
           $cv->presentation = $request->input('presentation');
        if($request->hasFile('photo')){
           $cv->photo =  $request->photo->store('image');  
        }
        $cv->save();
                session()->flash('success','La téchnologie a été modifiée !');
        return redirect('cvs');
    }
    // detruire un cv-----------------------------//
    public function deleteTechnologie(Request $request, $id){
       $cv = Cv::find($id);
         $this->authorize('delete',$cv);
        $cv->delete();
        return redirect('cvs');
    }
    public function show($id){
        return view('technologie.show',['id'=>$id]);
    }
    
    public function getData($id){
        $cv = Cv::find($id);
        $experiences = $cv->experiences()->orderBy('date_debut','desc')->get();
        $formations = $cv->formations()->orderBy('id','desc')->get();;
        
        return Response()->json([
            'experiences' => $experiences,
            'formations' => $formations,
            'cv' => $cv
        ]);
       // return view('cv.test' , ['cv'=> $cv ]);
    } /*
    public function getFormations($id){
        $cv = Cv::find($id);
        return $cv->formations;
        // return view('cv.test' , ['formations'=> $formations ]);
    }*/
    
    public function addExperience(Request $request){
        $experience = new Experience();
        $experience->titre      = $request->titre;
        $experience->body       = $request->body;
        $experience->date_debut = $request->date_debut;
        $experience->date_fin   = $request->date_fin;
        $experience->cv_id      = $request->cv_id;
        $experience->save();

        return Response()->json(['etat' => true , 'id' => $experience->id]);
    }
    public function addFormation(Request $request){
        $formation = new Formation();
        
        $formation->titre        = $request->titre;
        $formation->presentation = $request->presentation;
        $formation->cv_id      = $request->cv_id;
        $formation->save();

        return Response()->json(['etat' => true , 'id' => $formation->id]);
    }
    
    public function updateExperience(Request $request){
        $experience = Experience::find($request->id);
        
        $experience->titre      = $request->titre;
        $experience->body       = $request->body;
        $experience->date_debut = $request->date_debut;
        $experience->date_fin   = $request->date_fin;
        $experience->cv_id      = $request->cv_id;
        $experience->save();

        return Response()->json(['etat' => true ]);
    }
    
    public function updateFormation(Request $request){
        $formation = Formation::find($request->id);
        
        $formation->titre      = $request->titre;
        $formation->presentation       = $request->presentation;
        $formation->cv_id      = $request->cv_id;
        $formation->save();

        return Response()->json(['etat' => true ]);
    }
    public function deleteExperience($id){
           $experience = Experience::find($id);
           $experience->delete();

        return Response()->json(['etat' => true ]);
    }
    public function deleteFormation($id){
           $formation = Formation::find($id);
           $formation->delete();

            return Response()->json(['etat' => true ]);
    }
    public function laravelFramework(){
        return view('framework.laravelFramework');
    }
    public function listeFramwork(){
        return view('framework.listeframwork');
    }
}
