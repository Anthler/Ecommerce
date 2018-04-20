@extends('layouts.main')
@section('title','shirts')

@section('content')


<!-- products listing -->
  <!-- Latest SHirts -->
 <div class="row">
   @forelse($products as $product)
     <div class="small-3 columns">
         <div class="item-wrapper">
             <div class="img-wrapper">
                 <a class="button expanded add-to-cart">
                     Add to Cart
                 </a>
                 <a href="#">
                     <img src="{{url('public',$product->image)}}"/>
                 </a>
             </div>
             <a href="{{route('shirt')}}">
                 <h3>
                     {{$product->name}}
                 </h3>
             </a>
             <h5>
                 $19.99
             </h5>
             <p>
                 {{$product->description}}
             </p>
         </div>
     </div>

     @empty
        <h3>Procuts out of stock</h3>
     @endforelse
   </div>

 @endsection
