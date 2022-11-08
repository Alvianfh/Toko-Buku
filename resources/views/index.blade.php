@extends('template')

@section('title', 'Data Buku | Toko Buku Jaya')

@section('content')
{{-- Startsection content --}}
    <div class="container-fluid">
        <div class="container">
            <h1 class="h1">Data Buku</h1>
            <div class="d-flex">
                {{-- looping --}}
                @foreach ($data as $d)  
                <div class="card" style="width: 18rem;">
                    <img src={{$d->image_path}} class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$d->name}}</h5>
                      <p class="card-text">IDR {{$d->price}}</p>
                      {{-- pakai if --}}
                      @if ($d->type == "HTML")
                        <span class="badge text-bg-primary">{{$d->type}}</span>
                      @else
                        <span class="badge text-bg-danger">{{$d->type}}</span>
                      @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
{{-- endsection content --}}
@endsection