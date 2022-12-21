<h1> Assign Project </h1> 

<form action="/add" method="POST"> 
    @csrf

    Project ID: <input type="int" name="projectid" > 
    <br> <br> 

    Project Type:
    <select name="projecttype" id="projecttype">
        <option value="development">Development</option>
        <option value="research">Research</option>
    </select>

    <br><br>

    Project Name: <input type="text" name="projectname" > 
    <br> <br> 

    Student Name: <input type="text" name="studentname" > 
    <br> </br> 

    Supervisor Name: <input type="int" name="supervisor" > 
    <br> </br> 

    Examiner 1 Name: <input type="int" name="examinerone" > 
    <br> </br> 

    Examiner 2 Name: <input type="int" name="examinertwo" > 
    <br> </br> 

    Start Date: <input type="date" name="startdate" > 
    <br> </br> 

    End Date: <input type="date" name="enddate" > 
    <br> </br>

    Duration(months): <input type="int" name="duration" > 
    <br> </br>
    
    Progress:
    <select name="projectprogress" id="projectprogress">
        <option value="milestone1">Milestone1</option>
        <option value="milestone2">Milestone2</option>
        <option value="finalreport">Final Report</option>
    </select>

    Status:
    <select name="projectstatus" id="projectstatus">
        <option value="ontrack">On track</option>
        <option value="delayed">Delayed</option>
        <option value="extended">Extended</option>
        <option value="completed">Completed</option>
    </select>


    <button type="submit"> Assign </button>
    <button type="reset"> Reset </button> 


</form>