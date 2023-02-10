@extends('frontend.layouts.layout')

@section('content')
@include('frontend.includes.navbar')
<section class="news-banner-main" style="background: url('{{ asset('frontend/assets/images/investorrelation/banner-img.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div
            class="investor-banner-content news-banner-content d-flex align-items-center justify-content-center flex-column">
            <h1>Investor Relation</h1>
            <div class="breadcrumb">
              <nav style="
                    --bs-breadcrumb-divider: url(
                      &#34;data:image/svg + xml,
                      %3Csvgxmlns='http://www.w3.org/2000/svg'width='8'height='8'%3E%3Cpathd='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z'fill='%236c757d'/%3E%3C/svg%3E&#34;
                    );
                  " aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Investor Relation
                  </li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="investor-tabs-main">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="sidebar-tabs">
            <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#ipo"
                  type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                  IPO
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#annual-report"
                  type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                  Annual Reports
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#price-sensetive"
                  type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                  Price Sensetive
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#financial-support"
                  type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                  Financial Support
                </button>
              </li>
              <li class="nav-item" role="presentation">

                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#shareholding"
                  type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                  Shareholding
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#director-report"
                  type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                  Director Report
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                  data-bs-target="#buy-sell-declaration" type="button" role="tab" aria-controls="nav-contact"
                  aria-selected="false">
                  Buy Sell Declaration
                </button>
              </li>

            </ul>

          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="ipo" role="tabpanel" aria-labelledby="ipo-tab" tabindex="0">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <div class="year-header">
                    2022
                  </div>
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      sector wise shareholdings position
                      <div class="icon-box">
                        <svg aria-hidden="true" class="svg-icon " viewBox="0 0 32 32">
                          <path
                            d="M16 20.586L28.293 8.293a1 1 0 011.414 1.414l-13 13a.997.997 0 01-1.414 0l-13-13a1 1 0 011.414-1.414L16 20.586z">
                          </path>
                        </svg>
                      </div>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <table class="table table-striped">
                        <thead class="">
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Date</th>
                            <th scope="col">Download</th>
                            <th scope="col">View</th>
                          </tr>
                        </thead>
                        <tbody class="">
                          <tr>
                            <td>Abridged prospectus of Baraka Patenga Power</td>
                            <td>11-05-2021</td>
                            <td><a href="#">Download</a></td>
                            <td><a href="#">View</a></td>
                          </tr>
                          <tr>
                            <td>Abridged prospectus of Baraka Patenga Power</td>
                            <td>11-05-2021</td>
                            <td><a href="#">Download</a></td>
                            <td><a href="#">View</a></td>
                          </tr>
                          <tr>
                            <td>Abridged prospectus of Baraka Patenga Power</td>
                            <td>11-05-2021</td>
                            <td><a href="#">Download</a></td>
                            <td><a href="#">View</a></td>
                          </tr>
                          <tr>
                            <td>Abridged prospectus of Baraka Patenga Power</td>
                            <td>11-05-2021</td>
                            <td><a href="#">Download</a></td>
                            <td><a href="#">View</a></td>
                          </tr>
                          <tr>
                            <td>Abridged prospectus of Baraka Patenga Power</td>
                            <td>11-05-2021</td>
                            <td><a href="#">Download</a></td>
                            <td><a href="#">View</a></td>
                          </tr>
                          <tr>
                            <td>Abridged prospectus of Baraka Patenga Power</td>
                            <td>11-05-2021</td>
                            <td><a href="#">Download</a></td>
                            <td><a href="#">View</a></td>
                          </tr>
                          <tr>
                            <td>Abridged prospectus of Baraka Patenga Power</td>
                            <td>11-05-2021</td>
                            <td><a href="#">Download</a></td>
                            <td><a href="#">View</a></td>
                          </tr>
                          <tr>
                            <td>Abridged prospectus of Baraka Patenga Power</td>
                            <td>11-05-2021</td>
                            <td><a href="#">Download</a></td>
                            <td><a href="#">View</a></td>
                          </tr>
                          <tr>
                            <td>Abridged prospectus of Baraka Patenga Power</td>
                            <td>11-05-2021</td>
                            <td><a href="#">Download</a></td>
                            <td><a href="#">View</a></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      code of conduct of BOD, chairman and MD as determind by NRC
                      <div class="icon-box">
                        <svg aria-hidden="true" class="svg-icon " viewBox="0 0 32 32">
                          <path
                            d="M16 20.586L28.293 8.293a1 1 0 011.414 1.414l-13 13a.997.997 0 01-1.414 0l-13-13a1 1 0 011.414-1.414L16 20.586z">
                          </path>
                        </svg>
                      </div>
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                      collapse plugin adds the appropriate classes that we use to style each element. These classes
                      control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                      modify any of this with custom CSS or overriding our default variables. It's also worth noting
                      that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                      does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Divided payable account
                      <div class="icon-box">
                        <svg aria-hidden="true" class="svg-icon " viewBox="0 0 32 32">
                          <path
                            d="M16 20.586L28.293 8.293a1 1 0 011.414 1.414l-13 13a.997.997 0 01-1.414 0l-13-13a1 1 0 011.414-1.414L16 20.586z">
                          </path>
                        </svg>
                      </div>
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                      collapse plugin adds the appropriate classes that we use to style each element. These classes
                      control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                      modify any of this with custom CSS or overriding our default variables. It's also worth noting
                      that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                      does limit overflow.
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="tab-pane fade" id="annual-report" role="tabpanel" aria-labelledby="annual-report-tab"
              tabindex="0">
              annual report
            </div>

            <div class="tab-pane fade" id="price-sensetive" role="tabpanel" aria-labelledby="price-sensetive-tab"
              tabindex="0">
              price sensetaive

            </div>

            <div class="tab-pane fade" id="financial-support" role="tabpanel" aria-labelledby="financial-support-tab"
              tabindex="0">

              financial support

            </div>

            <div class="tab-pane fade" id="shareholding" role="tabpanel" aria-labelledby="shareholding-tab"
              tabindex="0">
              share holding

            </div>

            <div class="tab-pane fade" id="director-report" role="tabpanel" aria-labelledby="director-report-tab"
              tabindex="0">
              direct report
            </div>

            <div class="tab-pane fade" id="buy-sell-declaration" role="tabpanel"
              aria-labelledby="buy-sell-declaration-tab" tabindex="0">
              buy-sell-declaration
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection