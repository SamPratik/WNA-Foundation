@extends('pages.main')

{{-- Custom external CSS --}}
@push('styles')
    {{ Html::style('css/home/styles.css') }}
    {{ Html::style('css/home/header.slider.css') }}
    {{ Html::style('css/home/about-us.css') }}
    {{ Html::style('css/home/our-work.css') }}
@endpush

{{-- Header slider JS --}}
@push('scripts')
    <script src="{{ asset('js/jssor.slider-27.0.3.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/header.slider.js') }}" type="text/javascript"></script>
@endpush

{{-- Content --}}
@section('content')
    {{-- background image --}}
    <img class="our-work-bg" src="{{ asset('images/our_work_bg.jpg') }}" alt="">
    {{-- Slider & Navigation Bar --}}
    <header>
      {{-- Slider --}}
      @includeif('partials.slider')
      {{-- Navigation Bar --}}
      @parent
    </header>



    {{-- About US Section --}}
    <section class="about-us">
      <div class="container">
        <h2>
            About US
            @auth
            <button type="button" class="btn btn-outline-warning btn-lg pull-right" data-toggle="modal" data-target="#aboutUsUpdateModal"><i class="fa fa-pencil" aria-hidden="true"></i> Update</button>
            @endauth
        </h2>
        <p>{{ $aboutUs->description }}</p>
      </div>
    </section>



    {{-- Our Work Section --}}
    <div class="our-work">
      <div class="cover"></div>
      <div class="our-work-panels">
        <h2 class="text-center">
          OUR WORK
          <span class="pull-right">
            @auth
            <button onclick="window.location.href='{{ route('works.create') }}'" type="button" name="button" class="btn btn-outline-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Work</button>
            @endauth
          </span>
        </h2><br><br>
        <div class="row">
          <div class="col-md-4">
            <div class="card work-panel">
              <img class="card-img-top" src="https://picsum.photos/640/400?image=26" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-caption">
                  <span>Card title</span>
                  @auth
                  <span class="pull-right">
                    <button type="button" class="btn btn-outline-warning btn-sm" onclick="window.location.href='{{ route('works.edit', [1]) }}'"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                    <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                  </span>
                  @endauth
                </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This line will create another line. This line will create another line. This line will create another line...</p>
                <a href="{{ route('works.show', [1]) }}" class="btn btn-outline-primary"><i class="fa fa-info-circle"></i> Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card work-panel">
              <img class="card-img-top" src="https://picsum.photos/640/400?image=46" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-caption">
                  <span>Card title</span>
                  @auth
                  <span class="pull-right">
                    <button type="button" class="btn btn-outline-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                    <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                  </span>
                  @endauth
                </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This line will create another line. This line will create another line. This line will create another line...</p>
                <a href="#" class="btn btn-outline-primary"><i class="fa fa-info-circle"></i> Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card work-panel">
              <img class="card-img-top" src="https://picsum.photos/640/400?image=36" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title card-caption">
                  <span>Card title</span>
                  @auth
                  <span class="pull-right">
                    <button type="button" class="btn btn-outline-warning btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button>
                    <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                  </span>
                  @endauth
                </h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. This line will create another line. This line will create another line. This line will create another line...</p>
                <a href="#" class="btn btn-outline-primary"><i class="fa fa-info-circle"></i> Read More</a>
              </div>
            </div>
          </div>
        </div> {{-- .row --}}
      </div>
    </div>
@endsection


@auth
    <!-- About us update modal -->
    <div id="aboutUsUpdateModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" style="font-weight:bold;text-transform:uppercase;">Edit About US</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form class="" method="post">
                <div class="form-group">
                  <textarea class="form-control" name="name" rows="8" cols="80"></textarea>
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" name="button" class="btn btn-outline-warning"><i class="fa fa-save"></i> Save Changes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
          </div>
        </div>

      </div>
    </div>
@endauth
