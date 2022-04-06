<div align="center">
<h4>  LogIn </h4>
<form action="" method="post">
@csrf    
<!-- Here whenever we send the POST request from this from then we need to secure
     it by the help of CROSS-SITE FORGIRY-->
    UserName : <input type="text" name="uname" > <br><br>
    Password : <input type="password" name="pass"> <br><br>
    

      <input type="submit" vlue="LogIn">
      </form>


      <h4>New Admin?</h4>
      <a href="/signup"><button>Get Register</button></a>   
</div>