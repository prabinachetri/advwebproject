<h1>Update Project Details</h1>
<form action="/save" method="post">
    
@csrf 

<input type="hidden" name="projectid" value="{{$display['projectid']}}" readonly><br/><br/> <!-- hide the id -->
<input type="text" name="projecttype" value="{{$display['projecttype']}}"readonly><br/><br/>
<input type="text" name="projectname" value="{{$display['projectname']}}"readonly><br/><br/>
<input type="text" name="studentname" value="{{$display['studentname']}}"readonly><br/><br/>
<input type="text" name="supervisor" value="{{$display['supervisor']}}"readonly><br/><br/>
<input type="text" name="examinerone" value="{{$display['examinerone']}}"readonly><br/><br/>     
<input type="text" name="examinertwo" value="{{$display['examinertwo']}}"readonly><br/><br/>   
<input type="date" name="startdate" value="{{$display['startdate']}}"><br/><br/>   
<input type="date" name="enddate" value="{{$display['enddate']}}"><br/><br/>   
<input type="text" name="duration" value="{{$display['duration']}}"readonly><br/><br/>   
<input type="text" name="projectprogress" value="{{$display['projectprogress']}}"><br/><br/>  

<select name="projectstatus">
<option >Project's Status</option>
<option name="On Track" id="1">On Track</option>
<option name="Delayed" id="2">Delayed</option>
<option name="Extended" id="3">Extended</option>
<option name="Completed" id="4">Completed</option>   
</select>    

<input type="text" name="projectstatus" value="{{$display['projectstatus']}}"><br/><br/>      

<button type=submit>Update</button>
<button type=reset>Reset</button>

</form>