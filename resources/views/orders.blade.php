<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/animate.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">











<!-- link for animation  -->


        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      />  
      <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>














<style>
    a {
    text-decoration: none; /* removes underline */
    color: black;
  }
  .abt{
    color:white;
  }
  .sneak{
    font-size: 30px;
    letter-spacing: 1px;
    font-weight: bold;
    font-family: 'Anton', sans-serif;
  font-weight: 400;
  font-style: normal;
  overflow: hidden;
  opacity: 0;
  }
  .image,.txt,.txttwo,.txtthree,.imagetwo,.txtfour,.txtfive,.txtsix,.imagethree,.txtseven,.txteight,.txtnine,.imagefour,.txtten,.txteleven,.txttwelve,.imagefive,.txtthirteen,.txtfourteen,.txtfifteen,.imagesix,.txtsixteen,.txtseventeen,.txteighteen,.vintage{
    overflow: hidden;
    opacity: 0;
    
  }
  .clothing{
    font-size: 30px;letter-spacing: 1px;font-weight: bold;font-family: 'Anton', sans-serif;
  font-weight: 400;
  font-style: normal;margin-top: 80px;
  opacity: 0;
  }
  .aboutus{
    color:white;
    margin-left: 350px;
    font-size:18px;
    letter-spacing: 1px;
    font-weight: bold;
    font-family: 'Anton', sans-serif;
  font-weight: 400;
  }
  .contactus{
    color:white;
    margin-left: 50px;
    font-size:18px;
    letter-spacing: 1px;
    font-weight: bold;
    font-family: 'Anton', sans-serif;
  font-weight: 400;
  margin-top: 10px;
  }
  .fs{
    letter-spacing: 1px;
    font-weight: bold;
    font-family: 'Anton', sans-serif;
  font-weight: 400;
  }
 
  .nav{
    height: 90px;
    opacity: 1;
  }





























h2 {
  margin-bottom:0px;
  margin-top:25px;
  text-align:center;
  font-weight:200;
  font-size:19px;
  font-size:1.2rem;
  
}
.container {
  height:100%;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  -webkit-box-align:center;
  -webkit-align-items:center;
      -ms-flex-align:center;
          align-items:center;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;

.dropdown-select.visible {
  display:block;
}
.dropdown {
  position:relative;
}
ul {
  margin:0;
  padding:0;
}
ul li {
  list-style:none;
  padding-left:10px;
  cursor:pointer;
}
ul li:hover {
  background:rgba(255,255,255,0.1);
}
.dropdown-select {
  position:absolute;
  background:#77aaee;
  text-align:left;
  box-shadow:0px 3px 5px 0px rgba(0,0,0,0.1);
  border-bottom-right-radius:5px;
  border-bottom-left-radius:5px;
  width:90%;
  left:2px;
  line-height:2em;
  margin-top:2px;
  box-sizing:border-box;
}
.thin {
  font-weight:400;
}
.small {
  font-size:12px;
  font-size:.8rem;
}
.half-input-table {
  border-collapse:collapse;
  width:100%;
}
.half-input-table td:first-of-type {
  border-right:10px solid black;
  width:50%;
}
.window {
  height:540px;
  width:800px;
  background:#fff;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
  border-radius:30px;
  z-index:10;
}
.order-info {
  height:100%;
  width:50%;
  padding-left:25px;
  padding-right:25px;
  box-sizing:border-box;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  position:relative;
}
.price {
  bottom:0px;
  position:absolute;
  right:0px;
  color:#4488dd;
}
.order-table td:first-of-type {
  width:25%;
}

.line {
  height:1px;
  width:100%;
  margin-top:10px;
  margin-bottom:10px;
  background:#ddd;
}
.order-table td:last-of-type {
  vertical-align:top;
  padding-left:25px;

}
.order-info-content {
  table-layout:fixed;

}

.full-width {
  width:100%;
}
.pay-btn {
  border:none;
  background:#22b877;
  line-height:2em;
  border-radius:10px;
  font-size:19px;
  font-size:1.2rem;
  color:#fff;
  cursor:pointer;
  position:absolute;
  bottom:25px;
  width:calc(100% - 50px);
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}
.pay-btn:hover {
  background:#22a877;
    color:#eee;
  -webkit-transition:all .2s ease;
          transition:all .2s ease;
}

.total {
  margin-top:25px;
  font-size:20px;
  font-size:1.3rem;
  position:absolute;
  bottom:30px;
  right:27px;
  left:35px;
}
.dense {
  line-height:1.2em;
  font-size:16px;
  font-size:1rem;
}
.input-field {
  background:rgba(255,255,255,0.1);
  margin-bottom:10px;
  margin-top:3px;
  line-height:1.5em;
  font-size:20px;
  font-size:1.3rem;
  border:none;
  padding:5px 10px 5px 10px;
  color:#fff;
  box-sizing:border-box;
  width:100%;
  margin-left:auto;
  margin-right:auto;
}
.credit-info {
  background-color:black;
  height:100%;
  width:50%;
  color:#eee;
  -webkit-box-pack:center;
  -webkit-justify-content:center;
      -ms-flex-pack:center;
          justify-content:center;
  font-size:14px;
  font-size:.9rem;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  box-sizing:border-box;
  padding-left:25px;
  padding-right:25px;
  border-top-right-radius:30px;
  border-bottom-right-radius:30px;
  position:relative;
  
}
.dropdown-btn {
  background:rgba(255,255,255,0.1);
  width:100%;
  border-radius:5px;
  text-align:center;
  line-height:1.5em;
  cursor:pointer;
  position:relative;
  -webkit-transition:background .2s ease;
          transition:background .2s ease;
}
.dropdown-btn:after {
  content: '\25BE';
  right:8px;
  position:absolute;
}
.dropdown-btn:hover {
  background:rgba(255,255,255,0.2);
  -webkit-transition:background .2s ease;
          transition:background .2s ease;
}
.dropdown-select {
  display:none;
}
.credit-card-image {
  display:block;
  max-height:80px;
  margin-left:auto;
  margin-right:auto;
  margin-top:35px;
  margin-bottom:15px;
}
.credit-info-content {
  margin-top:25px;
  -webkit-flex-flow:column;
      -ms-flex-flow:column;
          flex-flow:column;
  display:-webkit-box;
  display:-webkit-flex;
  display:-ms-flexbox;
  display:flex;
  width:100%;
  overflow-y: scroll;
  overflow-x: hidden;
}
@media (max-width: 600px) {
  .window {
    width: 100%;
    height: 100%;
    display:block;
    border-radius:0px;
  }
  .order-info {
  height: 100%;
  width: 50%;
  padding-left: 25px;
  padding-right: 25px;
  box-sizing: border-box;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow-y: scroll;
}

.credit-info {
  height: 100%;
  width: 50%;
  color: #eee;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  padding-left: 25px;
  padding-right: 25px;
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;
  position: relative;
  overflow-y: auto; /* Enables vertical scrolling */
}
body {
  overflow-x: hidden; /* Prevents horizontal scrolling */
}


  .pay-btn {
    border-radius:0px;
  }
}

@media (max-width: 600px) {
  .window {
    width: 100%;
    height: auto; /* Allows height to adjust based on content */
    display: block;
    border-radius: 0;
  }
  .order-info {
    padding-bottom: 100px;
    overflow-y: auto; /* Ensures vertical scrolling */
  }
  .credit-info {
    padding-bottom: 100px;
    overflow-y: scroll; /* Ensures vertical scrolling */
  }
}


.table-container {
  max-height: 380px; /* Adjust height as needed */
  overflow-y: auto; /* Enables vertical scrolling */
  display: block; /* Ensures the div handles scrolling correctly */
}

.order-table {
  width: 100%; /* Ensure table fits within the container */
  border-collapse: collapse; /* Optional: Collapses table borders */
}

.order-table td {
  padding: 10px; /* Adjust as needed */
  border-bottom: 1px solid #ddd; /* Optional: Adds border to table rows */
}

.order-table img {
  width: 100%; /* Ensures image fits within its cell */
  height: auto; /* Maintains aspect ratio */
}


    



</style>





<script>
    var cardDrop = document.getElementById('card-dropdown');
var activeDropdown;
cardDrop.addEventListener('click',function(){
  var node;
  for (var i = 0; i < this.childNodes.length-1; i++)
    node = this.childNodes[i];
    if (node.className === 'dropdown-select') {
      node.classList.add('visible');
       activeDropdown = node; 
    };
})

window.onclick = function(e) {
  console.log(e.target.tagName)
  console.log('dropdown');
  console.log(activeDropdown)
  if (e.target.tagName === 'LI' && activeDropdown){
    if (e.target.innerHTML === 'Master Card') {
      document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/2vbqk5lcpi7hjoc/MasterCard_Logo.svg.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Master Card';
    }
    else if (e.target.innerHTML === 'American Express') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/f5hyn6u05ktql8d/amex-icon-6902.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'American Express';      
    }
    else if (e.target.innerHTML === 'Visa') {
         document.getElementById('credit-card-image').src = 'https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Visa';
    }
  }
  else if (e.target.className !== 'dropdown-btn' && activeDropdown) {
    activeDropdown.classList.remove('visible');
    activeDropdown = null;
  }
}

</script>









</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm sticky-top nav ">
            <div class="container d-flex justify-content-center">
                <a class="navbar-brand bg-dark d-flex" href="{{ url('/') }}">
                    <div class="pt-1"><img src="/freesociety/fs_logo.png"  style="margin-right: 5px;width: 35px;border-right: 1px solid white"></div>
                    <div class="text-light pt-1 fs">FREE SOCIETY</div>
                </a>
                
                <h5 class="aboutus d-flex mt-3"><a class="abt" href="{{ url('/home') }}">Home</a></h5>
                
                <h5 class="contactus d-flex mt-3"><a class="abt" href="{{ url('/aboutus') }}">About us</a></h5>
                <h5 class="contactus mt-3"><a class="abt" href="{{ url('/contactus') }}">Contact us</a></h5>
                <h5 class="contactus mt-3"><a class="abt" href="{{ url('/seeorders') }}">Orders</a></h5>
                <h5 class="contactus mt-3"><a class="abt" href="{{ url('/cart') }}">Cart</a></h5>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-light dropdown-toggle mt-1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>















    <div class="container-fluid " style="margin-top: 100px">
    <div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
                <div class='line'></div>
                <div class="table-container">
    <table class='order-table'>
        @foreach($data as $d)
        <tbody>
            <tr>
                <td><img src='/freesociety/{{$d->image}}' class='full-width'></td>
                <td>
                    <br><span class='thin'>{{$d->textstwo}}</span>
                    <br>{{$d->texts}}<br>
                    <span class='thin small'>
                        Quantity: {{$d->quantity}}
                        <span style="float:right">Rs.{{$d->textsthree}}</span>
                        <br><br>
                    </span>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

        

<div class='total'>
  
</div>

</div>
</div>
        <div class='credit-info'>
          <div class='credit-info-content'>
            
            <img src='/freesociety/fs_logo (1).png' id='credit-card-image'width='250px'height='150px'style="margin-left: 50px"></img>
            @foreach($info as $i)
            <div class="row mt-5">
                <div class="col-1"></div>
                <div class="col-10 text-center fs-3">Delivered to: {{$i->name}}</div>
                <div class="col-1"></div>
            </div>
            <div class="row">
                <div class="col-12 text-center fs-3">Address: {{$i->address}}</div>
            </div>
            <div class="row">
                <div class="col-12 text-center fs-3">Ph-Number: {{$i->phone}}</div>
            </div>
            <div class="row">
                <div class="col-12 text-center fs-3">Email: {{$i->email}}</div>
            </div>
            @endforeach
          </div>

        </div>
      </div>
</div>
    </div>
    <div class="container-fluid">
<div class="row bg-black text-white "style="margin-top: 100px">
    <div class="col-12">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-3">
                <div class="row mt-5">
                    <div class="col-12 "style="font-size: 20px;letter-spacing: 1px;font-weight: bold;font-family: 'Anton', sans-serif;
  font-weight: 400;
  font-style: normal;">SHOP TO OUR NEWSLETTER</div>
                </div>
                <div class="row">
                    <div class="col-12"><img style="width: 70%;" src="freesociety/fs_logo (1).png" alt=""></div>
                </div>
                <div class="row mt-5 mb-2">
                © 2024, FreeSociety Private Limited.
                    </div>
            </div>
            <div class="col-1"></div>
            <div class="col-2"style="">
            <div class="row mt-5">
                <div class="col-12"style="font-size: 20px;letter-spacing: 1px;font-weight: bold;font-family: 'Anton', sans-serif;
  font-weight: 400;
  font-style: normal;">INFORMATION</div>
            </div>
            <div class="row">
                <div class="col-12"><a class="abt" href="{{ url('/aboutus') }}">About Us</a></div>
            </div>
            <div class="row">
                <div class="col-12"><a href="{{ url('/contactus') }}" class="abt">Contact Us</a></div>
            </div>
            <div class="row">
                <div class="col-12"><a href="{{ url('/terms') }}" class="abt">Terms & Conditions</a></div>
            </div>
            </div>
            <div class="col-1"></div>
            <div class="col-3">
                <div class="row mt-5">

            <div class="col-12"style="font-size: 20px;letter-spacing: 1px;font-weight: bold;font-family: 'Anton', sans-serif;
  font-weight: 400;
  font-style: normal;">ADDRESS</div>

            </div>
            <div class="row">
                <div class="col-12" >Freesociety, Shop No 1, Nav Pooja Apartment, Perry Cross Rd, Bandra West 400050, Mumbai, Maharashtra, India</div>
            </div>
        </div>
            <div class="col-1"></div>
            
            
        </div>
    </div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js" integrity="sha512-ZKNVEa7gi0Dz4Rq9jXcySgcPiK+5f01CqW+ZoKLLKr9VMXuCsw3RjWiv8ZpIOa0hxO79np7Ec8DDWALM0bDOaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
