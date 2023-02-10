@extends('frontend.layouts.layout')

@section('content')
    @include('frontend.includes.navbar')
    @include('frontend.includes.common-banner')
    <section class="news-content-main">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card news-card">
                  <img src="{{ asset('frontend/assets/images/latestnews/pic12.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="meta">
                      <ul class="p-0">
                        <li class="news-post-date">10 August 2022</li>
                        <li class="news-post-author">
                          <a href="#">Harry</a>
                        </li>
                      </ul>
                    </div>
                    <h5 class="card-title news-card-title">Why Are Children So Obsessed</h5>
                    <p class="card-text news-post-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                    <a href="news-details.html" class="news-card-btn vs-btn">Read more <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card news-card">
                  <img src="{{ asset('frontend/assets/images/latestnews/pic12.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="meta">
                      <ul class="p-0">
                        <li class="news-post-date">10 August 2022</li>
                        <li class="news-post-author">
                          <a href="#">Harry</a>
                        </li>
                      </ul>
                    </div>
                    <h5 class="card-title news-card-title">Why Are Children So Obsessed</h5>
                    <p class="card-text news-post-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                    <a href="news-details.html" class="news-card-btn vs-btn">Read more <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card news-card">
                  <img src="{{ asset('frontend/assets/images/latestnews/pic12.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="meta">
                      <ul class="p-0">
                        <li class="news-post-date">10 August 2022</li>
                        <li class="news-post-author">
                          <a href="#">Harry</a>
                        </li>
                      </ul>
                    </div>
                    <h5 class="card-title news-card-title">Why Are Children So Obsessed</h5>
                    <p class="card-text news-post-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                    <a href="news-details.html" class="news-card-btn vs-btn">Read more <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card news-card">
                  <img src="{{ asset('frontend/assets/images/latestnews/pic12.jpg') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                    <div class="meta">
                      <ul class="p-0">
                        <li class="news-post-date">10 August 2022</li>
                        <li class="news-post-author">
                          <a href="#">Harry</a>
                        </li>
                      </ul>
                    </div>
                    <h5 class="card-title news-card-title">Why Are Children So Obsessed</h5>
                    <p class="card-text news-post-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.</p>
                    <a href="news-details.html" class="news-card-btn vs-btn">Read more <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                  </div>
                </div>
            </div>
        </div>
  
        <div class="row ">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </section>
  
@endsection