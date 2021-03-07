<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MVCAPPLICATION</title>

    </head>
    <header>
    <a href="/" class="brand-name">MVC</a>
        <nav>
            <ul>
                <li><a href="/">Services</a></li>
                <li><a href="/">Contact</a></li>
                <li><a href="/">About</a></li>

            </ul>

        </nav>

    </header>
    <body class="antialiased">
       @yield('content')
    </body>
</html>

<style>
*{
    text-decoration: none;
}
body{
    background: #f3f3f3;
}
header{
    background: teal;
    width: 100%;
    height: 80px;
}
header .brand-name{
    font-family: broadway;
    font-size: 28px;
    font-weight: 900px;
    color: #fff;
    display: block;
    padding: 10px 0;
    text-align: center;
    margin: 0 auto;
}
header nav ul{
margin: 0 auto;
display: block;
width: fit-content;
}
header nav ul li{
    display: inline-block;
    float: left;
    list-style: none;
    padding: 0 10px;
}
header nav ul li a{
    font-family: courier;
    font-size: 16px;
    font-weight: 600px;
    color: #fff;
}
@media only screen and (min-width: 1000px){
   
    header .brand-name{
    padding: 10px;
    text-align: left;
    margin: 10px;
    line-height: 40px;
}
header nav ul{
    margin-top:-20px;
    float: right;
    padding-right: 50px;
    
}header nav ul li{
    padding: 0 16px;
}
header nav ul li a{
    font-size: 20px;
</style>