<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Planning;
use App\User;
use Image;
class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('ajoutplan');




    }
    public function update_avatar(Request $request){
    	// Handle the user upload of avatar
    //	if($request->hasFile('photo')){
    		$avatar = $request->file('photo');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
            $a = new Planning;
    		$a-> photo = $filename;
    		$a->save();
    //	}
    	//return view('prof', array('user' => Auth::user()) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $a = new Planning;
        $a->grp = $request->input('grp');
        if ($request->hasFile('photo'))
          {
             $file =$request->file('photo');
             $extension = $file->getClientOriginalExtension();
          
        Storage::disk('public')->put($file->getFilename().'.'.$extension,  File::get($file));
        $a->photo= $file->getFilename().'.'.$extension;
  
          }     
        $a->save();
    
    }
    public function store1(Request $request)
    
{
    request()->validate([
        'name' => 'required',
        'author' => 'required',
    ]);
    $cover = $request->file('photo');
    $extension = $cover->getClientOriginalExtension();
    Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));

    $book = new Planning();
    $book->name = $request->name;
    $book->author = $request->author;
    $book->mime = $cover->getClientMimeType();
    $book->original_filename = $cover->getClientOriginalName();
    $book->filename = $cover->getFilename().'.'.$extension;
    $book->save();

    return redirect()->route('addplan')
        ->with('success','planning added successfully...');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user=User::find($id);
        $var =$user->grp;
        $planning=Planning::find($var);
      
     
     return view('/affichplan',compact('planning','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
