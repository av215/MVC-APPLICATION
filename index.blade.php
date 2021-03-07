@extends('mvcpages/layout')

@section('content')
       <div class="container">
              <div class="txt">
                     <div class="txt-1">
                            <h2>Welcome</h2>
                            <p>Your health is our concern...<br>
                            Ensuring efficient health-care delivery</p>
                     </div>

                     <div class="txt-2">
                            <p>Create an account with us today</p>
                            <a href="register"><input type="button" class="register" name="register" value="Create Account"></a>
                            </div>
              </div>

              <div class="login">
                     <p>Login Here</p>
                     <form action="/index" method="POST">
                     @csrf
                     <p><input type="text" class="username" name="username" placeholder="Enter your phonenumber..." required></p>
                     <p><input type="password" class="pwd" name="pwd" placeholder="*********" required></p>
                     <p><button type="submit" class="submit">Login</button></p>
                     </form>
                     <a href="/">Forgot password?</a>

              </div>
       </div>
@endsection

<style>
.container{
       text-align: center;
       background: #f3f3f3;
       padding-bottom: 20px;
       margin: 10px 10px;
       }
.txt  {  
      text-align: center;
       font-size: 18px;
       font-style: italic; 
       color: #111;
}
.register{
       border: none;
       outline: none;
       height: 40px;
       font-size: 15px;
       font-style: bell MT;
       background: grey;
       color: #f2f2f2;
       cursor: pointer;
       border-radius: 10px;
}
.login{
       margin: 50px;
}
.login p{
       padding: 0 20px 0 0;
       font-size: 20px;
       font-family: arial black;
       color: teal;
       font-weight: 800px;
}
.login input{
       padding: center;
       height: 30px;
       font-size: 17px;
       border-radius: 5px;
       
} 
.submit{
       background: teal;
}      
@media only screen and (min-width: 1000px){
       .container{
              margin: 0px 50px;
       }
       .txt  {  
              text-align: center; 
          margin-top: 0px;
       }
       .txt-1, .txt-2{
              text-align:center;
              font-size: 20px; 
              margin: 20px;  
              padding: 0 0px;          
       }
       div{
              display: inline-block;
              list-style: none;
              margin-top: 0;
              padding: 20px;
       }
       .submit{
              height: 35px;
              width: 100px;
              font-style: bold;
              border-radius: 5px;
       }
}

</style>