<h1>Project Details</h1>

<table border="border">
    <tr>
        <td>Project ID: </td>
        <td>Project Type: </td>
        <td>Project Name:  </td>
        <td>Student Name:  </td>
        <td>Supervisor Name:  </td>
        <td>Examiner 1 Name: </td>
        <td>Examiner 2 Name: </td>
        <td> Start Date: </td>
        <td> End Date: </td>
        <td> Duration(months): </td>
        <td> Progress: </td>
        <td> Status </td>
    </tr>

    @foreach($output as $display)

    <tr>
        <td> {{$display['projectid']}} </td>
        <td> {{$display['projecttype']}} </td>
        <td> {{$display['projectname']}} </td>
        <td> {{$display['studentname']}} </td>
        <td> {{$display['supervisor']}} </td>
        <td> {{$display['examinerone']}} </td>
        <td> {{$display['examinertwo']}} </td>
        <td> {{$display['startdate']}} </td>
        <td> {{$display['enddate']}} </td>
        <td> {{$display['duration']}} </td>
        <td> {{$display['projectprogress']}} </td>
        <td> {{$display['projectstatus']}} </td>
        <!-- <td><a href=>Delete Student</a></td>   -->
        <!-- <td><a href={{"del/".$display["student_id"]}}>Delete Student </a></td>    -->
        <!-- <td><a href={{"upd/".$display["student_id"]}}>Update Student </a></td>    -->
    </tr>

    @endforeach