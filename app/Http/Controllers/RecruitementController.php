<?php

namespace App\Http\Controllers;

use App\Models\Recruitement;
use App\Models\Status;
use App\Models\Comment;
use Illuminate\Http\Request;

class RecruitementController extends Controller
{
    // Show all Recruitements
    public function index(){
        
        return view('recruitements.index',[
            'recruitements' => Recruitement::latest()->filter(request(['status','search']))->paginate(10),
            'statuses' =>  Status::join('recruitements', 'statuses.id', '=', 'recruitements.status_id')
            ->orderBy('statuses.id','asc')
            ->groupBy('status','status_id')
            ->selectRaw('count(*) as total, status,status_id')
            ->get(),
            'recruitementscount' => Recruitement::count()
        ]);
        
    }

    // Show Create Form
    public function create(){
        return view('recruitements.create');
    }

    // Show Edit Form
    public function edit( Recruitement $recruitement){
        return view('recruitements.edit',[
            'recruitement' => $recruitement,
            'statuses' =>  Status::all(),
            'timeline' => Comment::
            join('statuses', 'comments.status_id', '=', 'statuses.id')
            ->where('candidate_id', $recruitement->id)->get()
    ]);
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' =>  'required',
            'position' => 'required',
            'email' => 'email',
            'experience' => '',
            'mobilenumber' => '',
            'linkedin_url' => '',
            'min_salary' => '',
            'max_salary' => '',
            'cv' => 'mimes:pdf',
            'skills' => '',
            'status_id' => ''
        ]);
        if($request->hasFile('cv')){
            $formFields['cv'] = $request->file('cv')->store('cvs','public');
        }
        Recruitement::create($formFields);

        return redirect('/')->with('message','Candidate successfully added to pipeline!');
    }

    public function update(Request $request, Recruitement $recruitement){

        $formFields = $request->validate([
            'first_name' => 'required',
            'last_name' =>  'required',
            'position' => 'required',
            'email' => 'email',
            'experience' => '',
            'mobilenumber' => '',
            'linkedin_url' => '',
            'min_salary' => '',
            'max_salary' => '',
            'skills' => '',
            'cv' => 'mimes:pdf',
            'status_id' => ''
        ]);
        if($request->hasFile('cv')){
            $formFields['cv'] = $request->file('cv')->store('cvs','public');
        }
        $recruitement->update($formFields);

        return redirect('/')->with('message','Candidate detail successfully Updated!');
    }

    public function destroy(Recruitement $recruitement){
        $recruitement->delete();
        return redirect('/')->with('message','Candidate deleted Successfully!');
    }

    


}
