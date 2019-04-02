<?php

namespace App\Http\Controllers;
use App\crud;
use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function store(Request $request)
    {
        
    	
                   
         $crud=new crud();
   

            $crud->name=request('name');
            $crud->rollno=request('rollno');
            $crud->age=request('age');
            $crud->email=request('email');
           
       

     


        if($request->hasfile('photo'))
         {

         	$file=$request->file('photo');

                $extension=$file->getClientOriginalExtension();
                $filename=time() . '.' . $extension;
                $file->move('images/', $filename);  
                  
         $crud->filename=$filename;
            
         }

         

        
       


        $crud->save();
    $crud=crud::all();
    	return view('/info',compact('crud'));   

}


 public function update(Request $request , $id)
{
$crud=crud::find($id);


         $crud->name=request('name');
       
            $crud->rollno=request('rollno');
            $crud->age=request('age');
            $crud->email=request('email'); 
   

        if($request->hasfile('photo'))
         {

         	$file=$request->file('photo');

                $extension=$file->getClientOriginalExtension();
                $filename=time() . '.' . $extension;
                $file->move('images/', $filename);  
                  
         $crud->filename=$filename;
            
         }


        $crud->save();
          $crud=crud::all();
        return view('/info',compact('crud'));

      
}

public function edit($id)
{
    $crud=crud::find($id);
 

    return view('/link',compact('crud'));
}

public function destroy($id){
   
    $crud=\App\crud::find($id)->delete($id);
  
    return response()->json([
        'success' => 'Record deleted successfully!'
    ]);
}




}
