@extends('base')

@section('content')
  <div class="container my-3">
    <h1 class="my-5">Equipo de trabajo</h1>

    <div class="accordion" id="accordionExample">
      
      @foreach ($all_staff as $staff)
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapseOne">
            <h5>{{ $staff->nombre }}</h5>
            
            </button>
          </h2>
        </div>
    
        <div id="collapse{{ $loop->index }}" class="collapse @if($loop->first)show @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <div class="row">
                <div class="col-4">
                {{-- <img src="{{ url('uploads/image/staff/' . $staff->avatar) }}" class="card-img-top" alt=""> --}}
                  <img src={{ asset("asset/imagen/imagen4.jpeg")}} class="card-img-top" alt="...">
                </div>
                <div class="col-8">
                  <h6>rama: Pionero</h6>
                  <h6>curso: {{ $staff->curso }}</h6>
                  <h6>edad: {{ $staff->edad }}</h6>
                <p>{{ $staff->descripcion }}</p>
                </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
@endsection