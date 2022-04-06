<form align="center" action="/question1/setCookies" enctype="multipart/form-data" method="post">
       <!-- Add csrf token -->
    
<h4>  Admin Registration </h4>
@csrf    
<!-- Here whenever we send the POST request from this from then we need to secure
     it by the help of CROSS-SITE FORGIRY-->
     
    Name : <input type="text" name="name" > <br><br>
    Project Teams : <input type="text" name="project_team"> <br><br>
    Mail : <input type="text" name="mail"> <br><br>
    Access Key : <input type="password" name="accesskey" > <br><br>
    Team Key : <input type="password" name="teamkey" > <br><br>
    Username : <input type="password" name="username" > <br><br>
    Password : <input type="password" name="pass" > <br><br>
    

      <input type="submit">
</from>
