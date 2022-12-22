<?php

namespace App\Http\Controllers;
use App\Models\project;

use Illuminate\Http\Request;


class supervisor extends Controller
{
    function display()
    {
         $output = project::paginate(2);
         return view('user.displaydata',['output'=> $output]);
    }

    
    function displayform($id)
    {
        $output= project::find($id);
        return view('user.updatedata',['display'=>$output]);
    }

    function update()
    {
        $output = project::find($req->id);
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
        return redirect('svdisplay');
    
    }

     function savedata(Request $req)
     {
       $output = project::find($req->projectid);
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
        return redirect("displaydetails");
     }


}
