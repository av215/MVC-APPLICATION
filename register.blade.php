@extends('mvcpages/layout')

@section('content')
       <section class="container">
       <h2>Your registration is high recommended and stress free</h2>
       <p>Please fill the form below, all fields are required<p>

       <div class="form">
              <form action="/register"  method="POST">
              @csrf
                     <label>Name:</label>
                     <p><input type="text" name="name" class= "name" placeholder="Enter your full Name"></p>
                     <label>Email:</label>
                     <p><input type="email" name="email" class= "email" placeholder="myemail@host.com"></p>
                     <label>Date of Birth:</label>
                     <p><input type="date" name="dob" class= "dob" placeholder="Enter your date of birth"></p>
                     <label>Password:</label>
                     <p><input type="password" name="password" class= "password" placeholder="*********"></p>
                     <label>Address:</label>
                     <p><input type="textarea" name="address" class= "address" placeholder="where do you live" required></p>
                     <label>Phone Number:</label>
                     <p><input type="phone" name="phone" class= "phone" placeholder="080123456789" required></p>
                     <label>Role:</label>
                     <p><input type="text" name="role" class= "role" placeholder="Patient/Doctor" required></p>
                     <br>
                     <p><button type="submit" class="submit" name="submit">Submit</button></p>
              </form>

       </div>
       </section>
@endsection 

<style>
h2{
       text-align: center;
       font-family: lucida fax;
       font-size: 16px; 
       color: #111;
}
p{
       text-align: center;
       font-family: bell MT;
       font-style: italic;
       font-size: 16px; 
       color: #111;
}
input{
       height: 30px;
       border-radius: 10px;
       text-align: left;
       margin: 0px 40px;

}
label{
       font-size: 16px;
       font-weight: bold;
       font-family: bell MT;
       color: #111;
       margin: 10px;
}
@media only screen and (min-width: 1000px){
.form p{
       text-align: left;
       margin: 20px 40px;
}
input{
       width: 300px;
}
.container p{
       font-size: 18px;
       text-align: left;
       margin: 20px 80px;
}
label{
       font-size: 18px;
       margin: 0px 50px;
}
.submit{
       width: 100px;
       height: 35px;
       border-radius: 7px;
       margin: 0px 150px;
       font-size: 18px;
       font-style: bold;
       background: teal;
}
}

</style>