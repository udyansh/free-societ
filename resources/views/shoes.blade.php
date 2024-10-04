@extends('layouts.app')


@section('content')
<div class="container">





<div class="row"style="margin-top: 125px">
    <div class="col-5"></div>
    <div class="col-2 d-flex justify-content-center text-center fw-bold sneak"><span style="font-size: 30px;letter-spacing: 1px;font-weight: bold;font-family: 'Anton', sans-serif;
  font-weight: 400;
  font-style: normal;">SNEAKERS</span></div>
    <div class="col-5"></div>
</div>

<div class="row " style="margin-top: 100px;">
    


    @foreach($shoe as $data)





<div class="col-3 bor " style="">

<div class="row mt-3">
<div class="col-1"></div>
<div class="col-10 image">
<a href="/{{$data->links}}"><img style="width:100%;height: 121px" src="/freesociety/{{$data->image}}" alt=""></a>
</div>
<div class="col-1"></div>
</div>
<div class="row mt-3">
<div class="col-1"></div>
<div class="col-10 txt"><a href="/{{$data->links}}">{{$data->textstwo}}</a></div>
<div class="col-1"></div>

</div>
<div class="row mt-0">
<div class="col-1"></div>
<div class="col-10 fw-bold txttwo"><a href="/{{$data->links}}">{{$data->texts}}</a></div>
<div class="col-1"></div>
</div>
<div class="row mb-3">
<div class="col-1"></div>
<div class="col-10 txtthree"><a href="/{{$data->links}}">{{$data->textsthree}}</a></div>
<div class="col-1"></div>

</div>
</div>



@endforeach



    
    
</div>



</div>

@endsection




