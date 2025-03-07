
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
    <style>



/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

:root{
    /* ===== Colors ===== */
    --primary-color: #0E4BF1;
    --panel-color: #FFF;
    --text-color: #000;
    --black-light-color: #707070;
    --border-color: #e6e5e5;
    --toggle-color: #DDD;
    --box1-color: #4DA3FF;
    --box2-color: #FFE6AC;
    --box3-color: #E7D1FC;
    --title-icon-color: #fff;
    
    /* ====== Transition ====== */
    --tran-05: all 0.5s ease;
    --tran-03: all 0.3s ease;
    --tran-03: all 0.2s ease;
}

body{
    min-height: 100vh;
    background-color: var(--primary-color);
}
body.dark{
    --primary-color: #3A3B3C;
    --panel-color: #242526;
    --text-color: #CCC;
    --black-light-color: #CCC;
    --border-color: #4D4C4C;
    --toggle-color: #FFF;
    --box1-color: #3A3B3C;
    --box2-color: #3A3B3C;
    --box3-color: #3A3B3C;
    --title-icon-color: #CCC;
}
/* === Custom Scroll Bar CSS === */
::-webkit-scrollbar {
    width: 8px;
}
::-webkit-scrollbar-track {
    background: #f1f1f1;
}
::-webkit-scrollbar-thumb {
    background: var(--primary-color);
    border-radius: 12px;
    transition: all 0.3s ease;
}

::-webkit-scrollbar-thumb:hover {
    background: #0b3cc1;
}

body.dark::-webkit-scrollbar-thumb:hover,
body.dark .activity-data::-webkit-scrollbar-thumb:hover{
    background: #3A3B3C;
}

nav{
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background-color: var(--panel-color);
    border-right: 1px solid var(--border-color);
    transition: var(--tran-05);
}
nav.close{
    width: 73px;
}
nav .logo-name{
    display: flex;
    align-items: center;
}
nav .logo-image{
    display: flex;
    justify-content: center;
    min-width: 45px;
}
nav .logo-image img{
    width: 40px;
    object-fit: cover;
    border-radius: 50%;
}

nav .logo-name .logo_name{
    font-size: 22px;
    font-weight: 600;
    color: var(--text-color);
    margin-left: 14px;
    transition: var(--tran-05);
}
nav.close .logo_name{
    opacity: 0;
    pointer-events: none;
}
nav .menu-items{
    margin-top: 40px;
    height: calc(100% - 90px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.menu-items li{
    list-style: none;
}
.menu-items li a{
    display: flex;
    align-items: center;
    height: 50px;
    text-decoration: none;
    position: relative;
}
.nav-links li a:hover:before{
    content: "";
    position: absolute;
    left: -7px;
    height: 5px;
    width: 5px;
    border-radius: 50%;
    background-color: var(--primary-color);
}
body.dark li a:hover:before{
    background-color: var(--text-color);
}
.menu-items li a i{
    font-size: 24px;
    min-width: 45px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--black-light-color);
}
.menu-items li a .link-name{
    font-size: 18px;
    font-weight: 400;
    color: var(--black-light-color);    
    transition: var(--tran-05);
}
nav.close li a .link-name{
    opacity: 0;
    pointer-events: none;
}
.nav-links li a:hover i,
.nav-links li a:hover .link-name{
    color: var(--primary-color);
}
body.dark .nav-links li a:hover i,
body.dark .nav-links li a:hover .link-name{
    color: var(--text-color);
}
.menu-items .logout-mode{
    padding-top: 10px;
    border-top: 1px solid var(--border-color);
}
.menu-items .mode{
    display: flex;
    align-items: center;
    white-space: nowrap;
}
.menu-items .mode-toggle{
    position: absolute;
    right: 14px;
    height: 50px;
    min-width: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}
.mode-toggle .switch{
    position: relative;
    display: inline-block;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
}
.switch:before{
    content: "";
    position: absolute;
    left: 5px;
    top: 50%;
    transform: translateY(-50%);
    height: 15px;
    width: 15px;
    background-color: var(--panel-color);
    border-radius: 50%;
    transition: var(--tran-03);
}
body.dark .switch:before{
    left: 20px;
}

.dashboard{
    position: relative;
    left: 250px;
    background-color: var(--panel-color);
    min-height: 100vh;
    width: calc(100% - 250px);
    padding: 10px 14px;
    transition: var(--tran-05);
}
nav.close ~ .dashboard{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top{
    position: fixed;
    top: 0;
    left: 250px;
    display: flex;
    width: calc(100% - 250px);
    justify-content: space-between;
    align-items: center;
    padding: 10px 14px;
    background-color: var(--panel-color);
    transition: var(--tran-05);
    z-index: 10;
}
nav.close ~ .dashboard .top{
    left: 73px;
    width: calc(100% - 73px);
}
.dashboard .top .sidebar-toggle{
    font-size: 26px;
    color: var(--text-color);
    cursor: pointer;
}
.dashboard .top .search-box{
    position: relative;
    height: 45px;
    max-width: 600px;
    width: 100%;
    margin: 0 30px;
}
.top .search-box input{
    position: absolute;
    border: 1px solid var(--border-color);
    background-color: var(--panel-color);
    padding: 0 25px 0 50px;
    border-radius: 5px;
    height: 100%;
    width: 100%;
    color: var(--text-color);
    font-size: 15px;
    font-weight: 400;
    outline: none;
}
.top .search-box i{
    position: absolute;
    left: 15px;
    font-size: 22px;
    z-index: 10;
    top: 50%;
    transform: translateY(-50%);
    color: var(--black-light-color);
}
.top img{
    width: 40px;
    border-radius: 50%;
}
.dashboard .dash-content{
    padding-top: 50px;
}
.dash-content .title{
    display: flex;
    align-items: center;
    margin: 60px 0 30px 0;
}
.dash-content .title i{
    position: relative;
    height: 35px;
    width: 35px;
    background-color: var(--primary-color);
    border-radius: 6px;
    color: var(--title-icon-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}
.dash-content .title .text{
    font-size: 24px;
    font-weight: 500;
    color: var(--text-color);
    margin-left: 10px;
}
.dash-content .boxes{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
.dash-content .boxes .box{
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 12px;
    width: calc(100% / 3 - 15px);
    padding: 15px 20px;
    background-color: var(--box1-color);
    transition: var(--tran-05);
}
.boxes .box i{
    font-size: 35px;
    color: var(--text-color);
}
.boxes .box .text{
    white-space: nowrap;
    font-size: 18px;
    font-weight: 500;
    color: var(--text-color);
}
.boxes .box .number{
    font-size: 40px;
    font-weight: 500;
    color: var(--text-color);
}
.boxes .box.box2{
    background-color: var(--box2-color);
}
.boxes .box.box3{
    background-color: var(--box3-color);
}
.dash-content .activity .activity-data{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.activity .activity-data{
    display: flex;
}
.activity-data .data{
    display: flex;
    flex-direction: column;
    margin: 0 15px;
}
.activity-data .data-title{
    font-size: 20px;
    font-weight: 500;
    color: var(--text-color);
}
.activity-data .data .data-list{
    font-size: 18px;
    font-weight: 400;
    margin-top: 20px;
    white-space: nowrap;
    color: var(--text-color);
}

@media (max-width: 1000px) {
    nav{
        width: 73px;
    }
    nav.close{
        width: 250px;
    }
    nav .logo_name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name{
        opacity: 1;
        pointer-events: auto;
    }
    nav li a .link-name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name{
        opacity: 1;
        pointer-events: auto;
    }
    nav ~ .dashboard{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard{
        left: 250px;
        width: calc(100% - 250px);
    }
    nav ~ .dashboard .top{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close ~ .dashboard .top{
        left: 250px;
        width: calc(100% - 250px);
    }
    .activity .activity-data{
        overflow-X: scroll;
    }
}

@media (max-width: 780px) {
    .dash-content .boxes .box{
        width: calc(100% / 2 - 15px);
        margin-top: 15px;
    }
}
@media (max-width: 560px) {
    .dash-content .boxes .box{
        width: 100% ;
    }
}
@media (max-width: 400px) {
    nav{
        width: 0px;
    }
    nav.close{
        width: 73px;
    }
    nav .logo_name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name{
        opacity: 0;
        pointer-events: none;
    }
    nav li a .link-name{
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name{
        opacity: 0;
        pointer-events: none;
    }
    nav ~ .dashboard{
        left: 0;
        width: 100%;
    }
    nav.close ~ .dashboard{
        left: 73px;
        width: calc(100% - 73px);
    }
    nav ~ .dashboard .top{
        left: 0;
        width: 100%;
    }
    nav.close ~ .dashboard .top{
        left: 0;
        width: 100%;
    }
}





    </style>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">Freesociety</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="/dashboard">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="/pages">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Pages</span>
                </a></li>
                <li><a href="/product">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Product</span>
                </a></li>
                
                <li><a href="/data">
                    <i class="uil uil-users-alt"></i>
                    <span class="link-name">Data</span>
                </a></li>
                
            </ul>
            
            <ul class="logout-mode">
                <li><a href="/logout">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
















        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-estate"></i>
                    <span class="text">Shoes data</span>
                </div>

                <table width="100%" border="0" aling="center">
        <tr>
            
            <td>Brand</td>
            <td>details</td>
            <td>Price</td>
            <td colspan="4">pics</td>
            <td colspan="4">operations</td>
        </tr>
        @foreach($data as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeone/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeone2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeone3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeone4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoeone/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoeone/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoeone">view</a></td>
        </tr>
        @endforeach






        @foreach($datatwo as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoetwo/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoetwo2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoetwo3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoetwo4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoetwo/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoetwo/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoetwo">view</a></td>
        </tr>
        @endforeach




        @foreach($datathree as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoethree/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoethree2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoethree3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoethree4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoethree/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoethree/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoethree">view</a></td>
        </tr>
        @endforeach







        @foreach($datafour as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoefour/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoefour2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoefour3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoefour4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoefour/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoefour/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoefour">view</a></td>
        </tr>
        @endforeach







        @foreach($datafive as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoefive/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoefive2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoefive3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoefive4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoefive/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoefive/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoefive">view</a></td>
        </tr>
        @endforeach








        @foreach($datasix as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoesix/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoesix2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoesix3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoesix4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoesix/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoesix/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoesix">view</a></td>
        </tr>
        @endforeach








        @foreach($dataseven as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeseven/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeseven2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeseven3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeseven4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoeseven/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoeseven/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoeseven">view</a></td>
        </tr>
        @endforeach








        @foreach($dataeight as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeeight/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeeight2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeeight3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeeight4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoeeight/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoeeight/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoeeight">view</a></td>
        </tr>
        @endforeach







        @foreach($datanine as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoenine/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoenine2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoenine3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoenine4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoenine/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoenine/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoenine">view</a></td>
        </tr>
        @endforeach









        @foreach($dataten as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeten/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeten2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeten3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeten4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoeten/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoeten/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoeten">view</a></td>
        </tr>
        @endforeach






        @foreach($dataeleven as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeeleven/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeeleven2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeeleven3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoeeleven4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoeeleven/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoeeleven/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoeeleven">view</a></td>
        </tr>
        @endforeach






        @foreach($datatwelve as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoetwelve/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagetwo}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoetwelve2/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagethree}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoetwelve3/{{$d->id}}/edit">edit</a></td>
            <td><img src="/freesociety/{{$d->imagefour}}" width="100px" height="100px" alt=""><a style="text-decoration: none; color: black;" href="/eshoetwelve4/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/reditshoetwelve/{{$d->id}}/edit">edit</a></td>
            <td><a style="text-decoration: none; color: black;" href="/rdelshoetwelve/{{$d->id}}/delete">delete</a></td>
            <td><a style="text-decoration: none; color: black;" href="/shoetwelve">view</a></td>
        </tr>
        @endforeach

























        </table>








        

        </div>















        
    </section>

    <script src="script.js"></script>
</body>
</html>
<script>
    const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})
</script>
