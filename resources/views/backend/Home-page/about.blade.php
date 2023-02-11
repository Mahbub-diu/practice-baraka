@extends('backend.layouts.layout')

@section('content')
    <section class="about-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="common-legend">
                        <fieldset>
                            <legend>about us contents</legend>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="text-center">sl no.</th>
                                            <th scope="col" class="text-center">section title</th>
                                            <th scope="col" class="text-center">main title</th>
                                            <th scope="col" class="text-center">description</th>
                                            <th scope="col" class="text-center">popup video url</th>
                                           
                                            <th scope="col" class="text-center" style="max-width:70px;">left image</th>
                                            <th scope="col" class="text-center" style="max-width:70px;">right image</th>
                                            <th scope="col" class="text-center">btn slug</th>
                                            <th scope="col" class="text-center">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($aboutdata as $item )
                                        <tr>
                                            <th scope="row" class="text-center">
                                            {{   $item['id'] }}
                                            </th>
                                            <td>
                                               {{ $item['sec_title']}}
                                            </td>
                                            <td>
                                               {{ $item['title']}}
                                            </td>
                                            <td>
                                                {{ $item['description']}}
                                             </td>
                                            <td>
                                                {{ $item['popup_video_url'] }}
                                            </td>
                                           
                                            <td class="text-center">
                                                <img src="{{asset('/backend/assets/images/about/'.$item['left_img'])}}" alt="" style="width:75px;">
                                              
                                            </td>
                                            <td class="text-center">
                                                <img src="{{asset('/backend/assets/images/about/'.$item['right_img'])}}" alt="" style="width:75px;">
                                              
                                            </td>
                                            <td>
                                                {{ $item['btn_url'] }}
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
                            <legend>add about section data</legend>
                            <form action="insertaboutdata" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="left_img" class="form-label">upload left Image</label>
                                        <input type="file" class="form-control" name="left_img">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="right_img" class="form-label">upload right Image</label>
                                        <input type="file" class="form-control" name="right_img">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="sec_title" class="form-label">Enter your section title</label>
                                        <input type="text" class="form-control" name="sec_title" placeholder="Enter your section title">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <div class="form-group">
                                        <label for="title" class="form-label">Enter your title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter your title">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="description" class="form-label">enter your short description</label>
                                       <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="popup_video_url" class="form-label">Enter your popup video url</label>
                                        <input type="text" class="form-control" name="popup_video_url" placeholder="Enter your popup video url">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="btn_url" class="form-label">enter more btn slug</label>
                                        <input type="text" class="form-control" name="btn_url">
                                    </div>
                                </div>
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-light common-submit-btn">
                                        upload data
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
