{{-- start main-page --}}
<div class="main-page">
  {{-- include navbar --}}
  @include('inc.navbar')
  <div class="container-fluid main">
    <div class="row">
      <div class="col-md-6">
        <div class="header text-uppercase text-center">
          <h1>alsakan <span>engineering</span></h1>
          <button type="button" class="btn">تسجيل طلب</button>
        </div>
      </div>
      <div class="col-md-6"></div>
      <div class="col-md-6"></div>
      <div class="col-md-6">
        <h3 class="text-right">من مشاريعنا</h3>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('images/popular-item/2.jpg') }}" alt="..." class="rounded ">
              <img src="{{ asset('images/popular-item/3.jpg') }}" alt="..." class="rounded ">
              <img src="{{ asset('images/popular-item/4.jpg') }}" alt="..." class="rounded ">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/popular-item/3.jpg') }}" alt="..." class="rounded ">
              <img src="{{ asset('images/popular-item/2.jpg') }}" alt="..." class="rounded ">
              <img src="{{ asset('images/popular-item/4.jpg') }}" alt="..." class="rounded ">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('images/popular-item/2.jpg') }}" alt="..." class="rounded ">
              <img src="{{ asset('images/popular-item/4.jpg') }}" alt="..." class="rounded ">
              <img src="{{ asset('images/popular-item/3.jpg') }}" alt="..." class="rounded ">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
      </div>
      
    </div>
  </div>
</div>
{{-- end main-page  --}}