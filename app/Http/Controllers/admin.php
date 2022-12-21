<?php

namespace App\Http\Controllers;
use App\Models\project;

use Illuminate\Http\Request;



class admin extends Controller
{
    function assignproject(Request $req)
    {
       $output = new project;
       $output ->projectid = $req->input('projectid');
       $output ->projecttype = $req->input('projecttype');
       $output ->projectname = $req->input('projectname');
       $output ->studentname = $req->input('studentname');
       $output ->supervisor = $req->input('supervisor');
       $output ->examinerone = $req->input('examinerone');
       $output ->examinertwo = $req->input('examinertwo');
       $output ->startdate = $req->input('startdate');
       $output ->enddate = $req->input('enddate');
       $output ->duration = $req->input('duration');
       $output ->projectprogress = $req->input('projectprogress');
       $output ->projectstatus = $req->input('projectstatus');
       $output->save();
       return redirect('projectdetails');
    }

    function display()
    {
         $output = project::paginate(2);
         return view('admin.displayproject',['output'=> $output]);
    }

    
}
