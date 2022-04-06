<form align="center" action="/verify-save" enctype="multipart/form-data" method="post">
       <!-- Add csrf token -->
    
<h4>  Admin Registration </h4>
@csrf    
<!-- Here whenever we send the POST request from this from then we need to secure
     it by the help of CROSS-SITE FORGIRY-->

    Name : <input type="text" name="name" > <br>
    <span style="color: red">@error('name'){{$message}}@enderror</span><br>

    Job ID : <input type="text" name="firstname" > <br>
    <span style="color: red">@error('firstname'){{$message}}@enderror</span><br>

    Discription : <input type="text" name="lastname" > <br>
    <span style="color: red">@error('lastname'){{$message}}@enderror</span><br>
    <!-- Admin Have to mention about his work or contribution. -->

    Mail : <input type="email" name="mail"> <br>
    <span style="color: red">@error('email'){{$message}}@enderror</span><br>

    Access Key : <input type="password" name="accesskey" > <br>
    <!-- This is important which provided by the org so that this admin can able to create his account -->
    <span style="color: red">@error('accesskey'){{$message}}@enderror</span><br>

    Team Key : <input type="password" name="teamkey" > <br>
    <!-- Its also an most important key through which he will create the records of devlopers -->
    <span style="color: red">@error('teamkey'){{$message}}@enderror</span><br>

    Username : <input type="password" name="username" > <br>
    <span style="color: red">@error('username'){{$message}}@enderror</span><br>

    Password : <input type="password" name="password" > <br>
    <span style="color: red">@error('password'){{$message}}@enderror</span><br>

    <input type="submit">
</from>
