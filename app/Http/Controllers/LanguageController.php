<?php
     
namespace App\Http\Controllers;
      
use App\Language;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
      
class LanguageController extends Controller{
    
    public function create(Request $request){
      
        $language = Language::create($request->all());
  
        return response()->json($language);
  
    }
  
    public function update(Request $request, $id){
       $language  = Language::find($id);
       $language->name = $request->input('name');
       $language->description = $request->input('description');
       $language->url = $request->input('url');
       $language->logo = $request->input('logo');
       $language->save();
  
       return response()->json($language);
    }  
    
    public function delete($id){
       $language  = Language::find($id);
       $language->delete();
  
       return response()->json('Removed successfully.');
    }
   
    public function index(){
  
        $languages  = Language::all();
  
        return response()->json($languages);
  
    }
}
?>