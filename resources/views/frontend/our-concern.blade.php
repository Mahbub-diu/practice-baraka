@extends('frontend.layouts.layout')

@section('content')
@include('frontend.includes.navbar')
@include('frontend.includes.common-banner')
<section class="our-concern-main">
    <section class="our-concern-text-content">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="our-concern-title text-center">
                <span class="sec-subtitle2">Company Information</span>
                <h2 class="sec-title ">Karnaphuli Power Limited</h2>
              </div>

              <div class="our-concern-text">
                <p class="fs-6">Port and commercial city ‘Chattogram’. The Karnaphuli River, in one hand, has provided the city with business opportunities. On the other hand, it has increased its beauty manifold. Baraka Group’s relationship with this city is more than 7 years. Baraka Group has been partnering with the socio-economic development of Bangladesh by building new power plants since its inception. In the same section, the Baraka Group adopted two new power projects in Chattogram. It has established a large power plant at Patia, Chattogram named Karnaphuli Power Limited (KPL).</p>
                <div class="our-concern-img float-start">
                
                  <img src="{{ asset('frontend/assets/images/concern/KPL.jpg') }}" alt="">
                </div>
                <p class="fs-6">Karnaphuli Power Limited (KPL) was incorporated in Bangladesh on November 17, 2014 as a Private Limited Company having its registered office at 6/A/1 (1st and 2nd floor), Segunbagicha, Dhaka-1000. On December 12, 2018 the Company was converted to Public Limited Company under the Companies Act, 1994.</p>
                <p class="fs-6">Karnaphuli Power Limited is a 51% subsidiary of Baraka Patenga Power Limited (BPPL). The principal activity of the Company is to set up power plants for generation and supply of electricity. Karnaphuli Power Limited, itself submitted proposal to Power Division, Ministry of Power, Energy & Mineral Resources (MPEMR) to implement 110MW IPP power plant and obtain Letter of Intent (LOI) on August 08, 2017 and subsequently signed the Power Purchase Agreement (PPA) with Bangladesh Power Development Board (BPDB) on February 04, 2018 and has also signed the Implementation Agreement (IA) with the Government of Bangladesh (GOB) represented by the Ministry of Power, Energy and Mineral Resources on the same day for implementing HFO fired IPP power plant having capacity of 110 MW on Build, Own, Operate (BOO) basis at Kolagaon, Patiya, Chattogram for a term of 15 years from the commercial operation date (COD).</p>
                <p class="fs-6">The 110 MW HFO fired power plant located at Kolagaon, Patiya, Chattogram started its commercial operation on August 20, 2019 and supplying electricity to the national grid uninterruptedly as per requirement of BPDB. The Plant is equipped with 06 nos. of brand new Wartsila 4-Stroke Reciprocating Super Charged Engines of model W18V50 having capacity of 18.415 MW each with total capacity of 110.49 MW. In addition to that, the plant also uses 06 nos. of Alfa Laval’s Aalborg west heat recovery boiler (WHRB) with steam generating capacity of 6.6 MT per hour each. With energy recovered by these boilers, the state-of-the-art plant produces 6.5 MW electricity using NTC Steam Turbine without using any extra fuel.</p>
              </div>
              
            </div>
          </div>
        </div>
      </section>

      <section class="corporate-directory">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="our-concern-title text-center">
                <h2 class="sec-title">corporate directory</h2>
              </div>
              <table class="table w-100">
                <thead class="">
                  <tr class="" >
                    <th style="width:30%">TITLE</th>
                    <th>INFORMATION</th>
                  </tr>
                </thead>
                <tbody class="">
                  <tr>
                    <td class="title">COMPANY NAME</td>
                    <td class="information">Karnaphuli Power Limited (KPL)</td>
                  </tr>
                  <tr>
                    <td class="title">REGISTRATION NO. & DATE</td>
                    <td class="information">C-119281/14 dated November 17, 2014</td>
                  </tr>
                  <tr>
                    <td class="title">LEGAL FORMS</td>
                    <td class="information">The Company was incorporated in Bangladesh on November 17, 2014 as Private Limited Company and converted to Public Limited Company on December 12, 2018.</td>
                  </tr>
                  <tr>
                    <td class="title">Authorized Capital</td>
                    <td class="information">BDT 300,00,00,000 only (Divided into 20,00,00,000 ordinary shares of BDT 10 each and 10,00,00,000 preference shares of BDT 10 each)</td>
                  </tr>
                  <tr>
                    <td rowspan="3" class="title">Paid up Capital</td>
                  </tr>
                  <tr>
                    <td class="information">BDT 9,50,00,000 only (Ordinary Shares)</td>
                  </tr>
                  <tr>
                    <td class="information">BDT 20,00,00,000 only (Redeemable Preference Shares)</td>
                  </tr>
                  <tr>
                    <td class="title">Face value of Share</td>
                    <td class="information">BDT 10 each</td>
                  </tr>
                  <tr>
                    <td rowspan="5" class="title">SHAREHOLDING</td>
                  </tr>
                  <tr>
                    <td class="information">Baraka Patenga Power Limited : 51.00%</td>
                  </tr>
                  <tr>
                    <td class="information">Baraka Power Limited                     : 25.00%</td>
                  </tr>
                  <tr>
                    <td class="information">Fusion Holdings (Pvt) Limited         : 21.75%</td>
                  </tr>
                  <tr>
                    <td class="information">Other Shareholders                         : 02.25%</td>
                  </tr>
                  <tr>
                    <td class="title">REGISTERED ADDRESS</td>
                    <td class="information">6/A/1 (1st and 2nd Floor), Topkhana Road, Segunbagicha, Dhaka</td>
                  </tr>
                  <tr>
                    <td class="title">POWER PLANT LOCATION</td>
                    <td class="information">Kolagaon, Patiya, Chattogram</td>
                  </tr>
                  <tr>
                    <td class="title">AUDITOR</td>
                    <td class="information">Masih Muhith Haque & Co., Chartered Accountants <br>
  
                      Level-13, UTC Building, 8 Panthopoth, Dhaka-1215</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

</section>
@endsection