<h1>add employe to db</h1>
<form action="/addemp" method="POST">
    @csrf
    <input type="text" name="EmpId" placeholder="Enter empid"> <br> <br>
    <input type="text" name="FirstName" placeholder="Enter emp firstname"><br> <br>
    <input type="text" name="LastName" placeholder="Enter emp lastname"><br> <br>
    <input type="text" name="Email" placeholder="Enter emp mail"><br> <br>
    <input type="text" name="PhoneNo" placeholder="Enter emp phone no"><br> <br>
    <input type="text" name="RoleId" placeholder="Enter emp role id"><br> <br>
    <button type="submit" >submit</button>
</form>