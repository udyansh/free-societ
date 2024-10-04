@extends('layouts.app')


@section('content')

<div class="container">





                <table width="100%" border="0" aling="center" class="mt-5">
        <tr>
            
            <td>Brand</td>
            <td>details</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>pics</td>
            <td colspan="">operations</td>
        </tr>
        @foreach($data as $d)
        <tr>
            
            
            <td>{{$d->texts}}</td>
            <td>{{$d->textstwo}}</td>
            <td>{{$d->textsthree}}</td>
            <td>{{$d->quantity}}</td>
            <td><img src="/freesociety/{{$d->image}}" width="100px" height="100px" alt=""></td>
            
            <td><a style="text-decoration: none; color: black;" href="/delcart/{{$d->id}}/delete">remove</a></td>
            
        </tr>
        @endforeach

    </table>
    <div class="row mt-5">
        <div class="col-8"></div>
        <div class="col-2"></div>
        <div class="col-2"><a href="/buynow"><button class="btn btn-primary">checkout</button></a></div>
        
    </div>





</div>

@endsection




