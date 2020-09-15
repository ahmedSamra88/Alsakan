{{-- start navbar --}}
<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/">
      <img src="{{ asset('images/logo.png') }}" alt="logo" width="60" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ">
        <li class="nav-item active">
          <a class="nav-link text-light" href="/">الرئيسية <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">اراء العملاء</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">مشاريعنا</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">التواصل</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-light" type="submit">
          <i class="fa fa-search fa-lg" aria-hidden="true"></i>
        </button>
        <button class="btn btn-outline-light" type="submit">
          <i class="fa fa-user fa-lg" aria-hidden="true"></i>
        </button>
      </form>
    </div>
  </nav>
{{-- end navbar --}}