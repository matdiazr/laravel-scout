@extends('base')

@section('content')
  <h1>Este ese el equipo de trabajo</h1>

  <div class="accordion" id="accordionExample">
    
    @foreach ($staff_list as $staff)
    <div class="card">
      <div class="card-header" id="headingOne">
        <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $loop->index }}" aria-expanded="true" aria-controls="collapseOne">
           {{ $staff }}
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
                <p>
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </p>
              </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
@endsection