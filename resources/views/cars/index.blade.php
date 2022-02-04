@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-24">
 <div class="text-center">
  <h1 class="text-5xl uppercase bold">cars</h1>
 </div>
 <div class="pt-10">
  @if(session('carAdded') !== null)
  <h3 class="mb-5 mt-5">{{ session('carAdded') }}</h3>
  @endif
  <a href="cars/create" class="border-b-2 pb-2 border-dotted italic text-gray-500">
   Add a new car &rarr;
  </a>
 </div>
 @foreach ($cars as $car)
 <div class="w-5/6 py-10">
  <div class="m-auto">
   <div class="float-right">
    <a href="cars/{{ $car->id }}/edit" class="border-b-2 pb-2 border-dotted italic text-green-500">
     Edit &rarr;
    </a>

    <form action="/cars/{{ $car->id }}" class="pt-4" method="post">
     @csrf
     @method('DELETE')

     <button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-500">
       Delete &rarr;
     </button>
    </form>
   </div>
   <span class="uppercase text-blue-500 front-bold text-xs italic">
    Founded: {{ $car->year }}
   </span>
   <h2 class="text-gray-700 text-5xl hover:text-gray-500">
     <a href="cars/{{ $car->id }}">
       {{ $car->name }}
     </a>
   </h2>
   <p class="text-lg text-gray-700 py-7">
    {{ $car->description }}
   </p>
   <hr class="mt-4 mb-8">
  </div>
 </div>
 @endforeach
</div>
@endsection