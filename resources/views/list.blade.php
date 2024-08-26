<h1>List will display here</h1>

<table border="2">
    <tr>
        <td>EmpId</td>
        <td>FirstName</td>
        <td>LastName</td>
        <td>Email</td>
        <td>PhoneNo</td>
        <td>RoleId</td>
        <td>Operation</td>
    </tr>

    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee['EmpId'] }}</td>
        <td>{{ $employee['FirstName'] }}</td>
        <td>{{ $employee['LastName'] }}</td>
        <td>{{ $employee['Email'] }}</td>
        <td>{{ $employee['PhoneNo'] }}</td>
        <td>{{ $employee['RoleId'] }}</td>
        <td>
            <button>
                <a href={{"delete/".$employee['EmpId']}}>Delete</a>
            
            </button>
            <button>
                <!-- <a href={{"delete/".$employee['EmpId']}}>Delete</a> -->
                <a href={{"edit/".$employee['EmpId']}}>Edit</a>
            </button>
        </td>
    </tr>
    @endforeach
</table>
