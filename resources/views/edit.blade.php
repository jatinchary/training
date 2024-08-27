<h1>edit employee</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="EmpId" value={{$employee['EmpId']}}> <br> <br>
    <input type="text" name="FirstName" value={{$employee['FirstName']}}><br> <br>
    <input type="text" name="LastName" value={{$employee['LastName']}}><br> <br>
    <input type="text" name="Email" value={{$employee['Email']}}><br> <br>
    <input type="text" name="PhoneNo" value={{$employee['PhoneNo']}}><br> <br>
    <input type="text" name="RoleId" value={{$employee['RoleId']}}><br> <br>
    <button type="submit" >edit</button>
</form>