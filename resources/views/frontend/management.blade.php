@extends('frontend.layouts.layout')

@section('content')
@include('frontend.includes.navbar')
<section class="homebanner-main">
    <div class="container-fluid px-0">
      <div class="row g-0">
        <div class="col-12">
          <div class="homebanner" style="background-image:url('{{ asset('frontend/assets/images/people/BPPL Board of Directors.jpg') }}')">
            <div class="homebanner-title-text">
              <h1>BPPL TOP OF MANAGEMENT</h1>
              <p>“If one can dream it, one can do it”</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="proud-text">
    <div class="container-fluid px-0">
      <div class="row g-0">
        <div class="col-12">
          <h3>
            We are proud of living our values across our diverse operations
            and locations. As a group, we value integrity, initiative,
            challenge convention, progression, and teamwork. We strive to be
            an employer of choice and to create an environment where our
            people can fulfill their personal and professional potential.
          </h3>
        </div>
      </div>
    </div>
  </section>
  <section class="people-card-section">
    <div class="container-fluid px-0">
      <div class="row g-0">
        <div class="col-12">
          <div class="people-card-wrapper d-flex justify-content-center">

            <div class="people-card">
              
              <img src="{{ asset('frontend/assets/images/people/3. MR. MONZUR KADIR SHAFI, MD, BPPL.jpg') }}" alt="">
              <div class="people-card-text" data-aos="fade-up"
              data-aos-duration="3000">
              <h6>managing director</h6>
              <h4>monzur kadir shafi</h4>
                <p>BPPL</p>
              </div>
            
            </div>

            <div class="people-card">
                <img src="{{ asset('frontend/assets/images/people/3. MR. MONZUR KADIR SHAFI, MD, BPPL.jpg') }}" alt="">
              <div class="people-card-text" data-aos="fade-up"
              data-aos-duration="3000">
              <h6>chairman</h6>
              <h4>MR. FAISAL AHMED CHOWDHURY</h4>
                <p>BPPL</p>
              </div>
            
            </div>

            <div class="people-card">
                <img src="{{ asset('frontend/assets/images/people/3. MR. MONZUR KADIR SHAFI, MD, BPPL.jpg') }}" alt="">
              <div class="people-card-text" data-aos="fade-up"
              data-aos-duration="3000">
              <h6>managing director</h6>
              <h4>monzur kadir shafi</h4>
                <p>BPPL</p>
              </div>
            
            </div>

            <div class="people-card">
                <img src="{{ asset('frontend/assets/images/people/3. MR. MONZUR KADIR SHAFI, MD, BPPL.jpg') }}" alt="">
              <div class="people-card-text" data-aos="fade-up"
              data-aos-duration="3000">
              <h6>chairman</h6>
              <h4>MR. FAISAL AHMED CHOWDHURY</h4>
                <p>BPPL</p>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection