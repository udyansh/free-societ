@extends('layouts.app')


@section('content')
<div class="container">





<div class="row"style="margin-top: 125px">
    <div class="col-5"></div>
    <div class="col-2 d-flex justify-content-center text-center fw-bold clothing"><span style="font-size: 30px;letter-spacing: 1px;font-weight: bold;font-family: 'Anton', sans-serif;
  font-weight: 400;
  font-style: normal;">VINTAGE</span></div>
    <div class="col-5"></div>
</div>

<div class="row " style="margin-top: 100px;">
    


    @foreach($vintage as $data)





<div class="col-3 borr " style="">

<div class="row mt-3">

<div class="col-12 txtseven">
<a href="/{{$data->links}}"><img style="width:100%;height: 234px" src="/freesociety/{{$data->image}}" alt=""></a>
</div>

</div>
<div class="row mt-3 txteight">

<div class="col-12"><a href="/{{$data->links}}">{{$data->textstwo}}</a></div>


</div>
<div class="row mt-0">

<div class="col-12 fw-bold txtnine"><a href="/{{$data->links}}">{{$data->texts}}</a></div>

</div>
<div class="row mb-3">

<div class="col-12 txtten"><a href="/{{$data->links}}">{{$data->textsthree}}</a></div>


</div>
</div>



@endforeach



    
    
</div>



</div>

@endsection




