@extends('layouts.app')


@section('content')
<div class="container">



<div class="row"style="margin-top: 100px">
    @foreach($data as $details)
    <div class="col-4">
        <div class="row"><div class="col-12"><img style="width: 100%;" src="freesociety/{{$details->image}}" alt=""></div></div>
        <div class="row " style="margin-top: 100px"><div class="col-12"><img style="width: 100%;" src="freesociety/{{$details->imagetwo}}" alt=""></div></div>
    </div>
    <div class="col-4">
    <div class="row"><div class="col-12"><img style="width: 100%;" src="freesociety/{{$details->imagethree}}" alt=""></div></div>
        <div class="row" style="margin-top: 100px"><div class="col-12"><img style="width: 100%;" src="freesociety/{{$details->imagefour}}" alt=""></div></div>
    </div>
    
    <div class="col-4">
        <div class="row"><div class="col-12 border-bottom"style="font-size: 13px">{{$details->textstwo}}</div></div>
        <div class="row"><div class="col-12"style="font-size: 35px">{{$details->texts}}</div></div>
        <div class="row"><div class="col-12"style="font-size: 25px">Rs.{{$details->textsthree}}</div></div>
        <div class="row mt-3"><div class="col-12"><img style="width: 20%;" src="freesociety/{{$details->image}}" alt=""></div></div>
        <form action="{{url('')}}/shoeone" method="post"enctype="multipart/form-data">
    @csrf




    <div class="row">
        <div class="col-12">
            <input type="hidden" name="brand" value="{{$details->textstwo}}">
            <input type="hidden" name="details" value="{{$details->texts}}">
            <input type="hidden" name="price" value="{{$details->textsthree}}">
            <input type="hidden" name="image" value="{{$details->image}}">
            <input type="number" name="quantity" value="1"min="1"max="5"class="form-control mt-5">
        </div>
    </div>






    <div class="row mt-3"><div class="col-12 d-flex justify-content-center"><input style="width: 100%;" type="submit" value="ADD TO CART" class="bn1 "></div></div>
    <div class="row"><div class="col-12  d-flex justify-content-center"><input style="width: 100%;" type="submit" value="BUY NOW" class="bn1 "></div></div>
</form>
        
    </div>
    @endforeach

</div>




</div>

@endsection




