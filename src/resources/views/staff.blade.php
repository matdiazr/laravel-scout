@extends('base')

@section('content')
  <h1>Equipo de trabajo</h1>

  <div class="accordion" id="accordionExample">
    
    @foreach ($staff_list as $staff)
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapseOne">
          <h5>{{ $staff }}</h5>
          
          </button>
        </h2>
      </div>
  
      <div id="collapse{{ $loop->index }}" class="collapse @if($loop->first)show @endif" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <div class="row">
              <div class="col-4">
                <img src={{ asset("asset/imagen/imagen4.jpeg")}} class="card-img-top" alt="...">
              </div>
              <div class="col-8">
                <h6>rama: Pionero</h6>
                <h6>curso: básico</h6>
                <h6>edad: 24</h6>
                <p>
                     put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
@endsection