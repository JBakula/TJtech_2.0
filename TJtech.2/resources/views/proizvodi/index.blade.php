@extends('layout')
@section('content')

@if (count($proizvodi) != 0)
    <div
    class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
        <!-- Items -->
        @foreach ($proizvodi as $proizvod)
        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img
                    class="hidden w-48 mr-6 md:block"
                    src="images/acme.png"
                    alt=""
                />
                <div>
                    <h3 class="text-2xl">
                        <a href="show.html">{{$proizvod->Model}}</a>
                    </h3>
                    <ul class="flex">
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">{{$proizvod->RAM}} RAM</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">{{$proizvod->CPU}} CPU</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">{{$proizvod->GPU}} GPU</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">{{$proizvod->Memorija}} SSD</a> 
                        </li>
                    </ul>
                    <div class="text-lg mt-4">
                        {{$proizvod->Cijena}} $
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="mt-6 p-4">
        {{$proizvodi->links()}}
    </div>
@else
    <h1>Nema proizvoda te kategodije</h1>
@endif
@endsection