@extends('layouts.app')


@section('content')
<div class="container-fluid">
   <div class="row">
    <div class="col-12 w-100" >
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/freesociety/rio_-_Website_Banner_-_1920-800.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/freesociety/Website_Banner_-_1920-800_-_BIRKENSTOCK_ARIZONA.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/freesociety/Website_Banner_-_1920-800_-_NA.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/freesociety/Website_Banner_-_1920-800_monsoon_madness.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
<div class="container">
<div class="row"style="margin-top: 125px">
    <div class="col-5"></div>
    <div class="col-2 d-flex justify-content-center text-center fw-bold sneak">SNEAKERS</div>
    <div class="col-5"></div>
</div>
<div class="row " style="margin-top: 40px">



@foreach($firstHalf as $detail)




    <div class="col-3 bor"  @if($loop->first) class="" @endif>
<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-10 "><a href="/{{$detail->links}}"><img class="image" style="width:100%;" src="/freesociety/{{$detail->image}}" alt=""></a></div>
    <div class="col-1"></div>
</div>
<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-2 txt"><a href="/{{$detail->links}}">{{$detail->textstwo}}</a></div>
    <div class="col-9"></div>

</div>
<div class="row mt-0">
    <div class="col-1"></div>
    <div class="col-10 fw-bold txttwo"><a href="/{{$detail->links}}">{{$detail->texts}}</a></div>
    <div class="col-1"></div>

</div>
<div class="row mb-3">
    <div class="col-1"></div>
    <div class="col-10 txtthree"><a href="/{{$detail->links}}">{{$detail->textsthree}}</a></div>
    <div class="col-1"></div>

</div>
    </div>



@endforeach
    



    
    
    
</div>
















<div class="row " style="margin-top: 20px;">



@foreach($secondHalf as $detail)


    <div class="col-3 bor" style="height: 236px">
<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-10 imagetwo"><a href="/{{$detail->links}}"><img style="width:100%;height: 121px;" src="/freesociety/{{$detail->image}}" alt="" ></a></div>
    <div class="col-1"></div>
</div>
<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-6 txtfour"><a href="/{{$detail->links}}">{{$detail->textstwo}}</a></div>
    <div class="col-5"></div>

</div>
<div class="row mt-0">
    <div class="col-1"></div>
    <div class="col-10 fw-bold txtfive"><a href="/{{$detail->links}}">{{$detail->texts}}</a></div>
    <div class="col-1"></div>

</div>
<div class="row mb-3">
    <div class="col-1"></div>
    <div class="col-10 txtsix"><a href="/{{$detail->links}}">{{$detail->textsthree}}</a></div>
    <div class="col-1"></div>

</div>
    </div>


@endforeach



    
   
   
    




    <div class="row"style="margin-top: 50px">
      <div class="col-1"></div>
      <div class="col-10 fw-bold d-flex justify-content-center"><a href="/shoes"><input type="button" value="View More" class="bn1 "></a></div>
      <div class="col-1"></div>
    </div>








<div class="row d-flex justify-content-center">
  <div class="col-5"></div>
  <div class="col-2 fw-bold d-flex justify-content-center clothing">CLOTHING</div>
  <div class="col-5"></div>
</div>








    </div>




    <div class="row " style="margin-top: 30px;">





    @foreach($firsthalfclothing as $details)





    <div class="col-3 borr" style="">
<div class="row mt-3">
    
    <div class="col-12 imagethree"><a href="/{{$details->links}}"><img style="width:100%; height: 234px;" src="/freesociety/{{$details->image}}" alt=""></a></div>
    
</div>
<div class="row mt-3">
   
    <div class="col-12 txtseven"><a href="/{{$details->links}}">{{$details->textstwo}}</a></div>
    

</div>
<div class="row mt-0">
    
    <div class="col-12 fw-bold txteight"><a href="/{{$details->links}}">{{$details->texts}}</a> </div>
    
</div>
<div class="row mb-3">
    
    <div class="col-12 txtnine"><a href="/{{$details->links}}">{{$details->textsthree}}</a></div>
    

</div>
    </div>



    @endforeach





    
    










   </div>
   



   <div class="row " style="margin-top: 20px;">





@foreach($secondhalfclothing as $details)




    <div class="col-3 borr" style="">
<div class="row mt-3">
    
    <div class="col-12 imagefour"><a href="/{{$details->links}}"><img style="width: 100%;height:234px;" src="/freesociety/{{$details->image}}" alt=""></a></div>
    
</div>
<div class="row mt-3">
   
    <div class="col-12 txtten"><a href="/{{$details->links}}">{{$details->textstwo}}</a></div>
    

</div>
<div class="row mt-0">
    
    <div class="col-12 fw-bold txteleven"><a href="/{{$details->links}}">{{$details->texts}} </a></div>
    
</div>
<div class="row mb-3">
    
    <div class="col-12 txttwelve"><a href="/{{$details->links}}">{{$details->textsthree}}</a></div>
    

</div>
    </div>


@endforeach




   
    <div class="row"style="margin-top: 50px">
      
      <div class="col-12 fw-bold d-flex justify-content-center"><a href="/clothing"><input type="button" value="View More" class="bn1 "></a></div>
     
    </div>




    <div class="row d-flex justify-content-center">
  <div class="col-5"></div>
  <div class="col-2 fw-bold d-flex justify-content-center vintage"style="font-size: 30px;letter-spacing: 1px;font-weight: bold;font-family: 'Anton', sans-serif;
  font-weight: 400;
  font-style: normal;margin-top: 80px;">VINTAGE</div>
  <div class="col-5"></div>
</div>


    


<div class="row " style="margin-top: 20px;">





@foreach($firsthalfvintage as $detailss)




    <div class="col-3 borr" style="">
<div class="row mt-3">
    
    <div class="col-12 imagefive"><a href="/{{$detailss->links}}"><img style="width: 100%;height:234px;" src="/freesociety/{{$detailss->image}}" alt=""></a></div>
    
</div>
<div class="row mt-3">
   
    <div class="col-12 txtthirteen"><a href="/{{$detailss->links}}">{{$detailss->textstwo}}</a></div>
    

</div>
<div class="row mt-0">
    
    <div class="col-12 fw-bold txtfourteen"><a href="/{{$detailss->links}}">{{$detailss->texts}}</a> </div>
    
</div>
<div class="row mb-3">
    
    <div class="col-12 txtfifteen"><a href="/{{$detailss->links}}">{{$detailss->textsthree}}</a></div>
    

</div>
    </div>


@endforeach


</div>









<div class="row " style="margin-top: 20px;">

@foreach($secondhalfvintage as $detailss)




    <div class="col-3 borr" style="">
<div class="row mt-3">
    
    <div class="col-12 imagesix"><a href="/{{$detailss->links}}"><img style="width: 100%;height:234px;" src="/freesociety/{{$detailss->image}}" alt=""></a></div>
    
</div>
<div class="row mt-3">
   
    <div class="col-12 txtsixteen"><a href="/{{$detailss->links}}">{{$detailss->textstwo}}</a></div>
    

</div>
<div class="row mt-0">
    
    <div class="col-12 fw-bold txtseventeen"><a href="/{{$detailss->links}}">{{$detailss->texts}}</a> </div>
    
</div>
<div class="row mb-3">
    
    <div class="col-12 txteighteen"><a href="/{{$detailss->links}}">{{$detailss->textsthree}}</a></div>
    

</div>
    </div>


@endforeach

</div>  


<div class="row"style="margin-top: 50px">
      
      <div class="col-12 fw-bold d-flex justify-content-center"><a href="/vintage"><input type="button" value="View More" class="bn1 "></a></div>
     
    </div>





    <div class="row">
  <div class="col-5"></div>
  <div class="col-2 fw-bold d-flex justify-content-center"style="font-size: 30px;letter-spacing: 1px;font-weight: bold;font-family: 'Anton', sans-serif;
  font-weight: 400;
  font-style: normal;margin-top: 80px;">Our Stores</div>
  <div class="col-5"></div>
</div>




<div class="row" style="margin-top: 20px;">

<div class="col-1"></div>
<div class="col-5"><img style="width: 100%;" src="freesociety/IMG_0532_900x.jpg" alt=""></div>
<div class="col-5"><img style="width: 100%;" src="freesociety/IMG_0534_900x.jpg" alt=""></div>
<div class="col-1"></div>


</div>





    















</div>
</div>
</div>
</div>





@endsection




