@extends('backend.layouts.layout')

@section('content')

<section class="admin-slider-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="common-legend">
                    <fieldset>
                        <legend>slider lists</legend>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th scope="col" class="text-center">sl no.</th>
                                    <th scope="col" class="text-center">title</th>
                                    <th scope="col" class="text-center">main title</th>
                                    <th scope="col" class="text-center">point lists</th>
                                    <th scope="col" class="text-center" style="max-width:70px;">bg image</th>
                                    <th scope="col" class="text-center">action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliderdata as $item )
                                    <tr>
                                        <th scope="row" class="text-center">
                                            {{ $item['id'] }}
                                        </th>
                                        <td>
                                            {{ $item['title'] }}
                                        </td>
                                        <td>
                                            {{ $item['main_title'] }}
                                        </td>
                                        <td>
                                           <p> {{ $item['point1'] }}</p>
                                           <p> {{ $item['point2'] }}</p>
                                           <p> {{ $item['point3'] }}</p>
                                        </td>
                                        <td class="text-center">
                                            <img src="{{asset('/backend/assets/images/slider/'.$item['bg_img'])}}" alt="" style="width:75px;">
                                   
                                        </td>
                                        <td>@mdo</td>
                                      </tr>
                                    @endforeach
                                  
                                
                                </tbody>
                              </table>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="common-legend">
                    <fieldset>
                        <legend>add home page slider</legend>
                        <form action="insertSliderData" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="title" class="form-label">Enter your title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter your title">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="main_title" class="form-label">Enter your main title</label>
                                        <input type="text" class="form-control" name="main_title" placeholder="Enter your main title">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="point1" class="form-label">Enter your 1st point </label>
                                        <input type="text" class="form-control" name="point1" placeholder="Enter your title">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="point2" class="form-label">Enter your 2nd point </label>
                                        <input type="text" class="form-control" name="point2" placeholder="Enter your 2nd point">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="point3" class="form-label">Enter your 3rd point </label>
                                        <input type="text" class="form-control" name="point3" placeholder="Enter your title">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="bg_img" class="form-label">upload your background image</label>
                                        <input type="file" class="form-control" name="bg_img">
                                    </div>
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-light common-submit-btn">
                                        add slider
                                    </button>
                                </div>
                            </div>
                        </form>
                       
                    </fieldset>
                </div>
                
            </div>
        </div>
    </div>
</section>

@endsection