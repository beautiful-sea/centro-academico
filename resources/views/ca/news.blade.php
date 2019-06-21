@extends('atletica.layouts.page')


@section('content')

<div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="card animated fadeInLeftTiny animation-delay-5">
              <div class="card-body card-body-big">
                <h1 class="no-mt">{{$news_athletic->title}}</h1>
                <div class="mb-4">
                  <span class="ml-1 d-none d-sm-inline"><i class="zmdi zmdi-time mr-05 color-info"></i> <span class="color-medium-dark">{{date('d/m/Y',strtotime($news_athletic->created_at))}}</span></span>
                </div>
                <img src="/files/news_athletic/{{$news_athletic->id}}.{{$news_athletic->extension_img}}" alt="" class="img-fluid mb-4">

                @php
                echo $news_athletic->text;

                @endphp
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-bordo animated fadeInUp animation-delay-7">
              <div class="card-header">
                <h3 class="card-title"><i class="fa fa-newspaper"></i> Últimas notícias</h3>
              </div>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="favorite">
                  <div class="card-body">
                    <div class="ms-media-list">

                    @foreach($last_news as $ln)
                      <div class="media mb-2">
                        <div class="media-left media-middle">
                          <a href="#">
                            <img class="d-flex mr-3 media-object media-object-circle" src="/files/news_athletic/{{$ln->id}}.{{$ln->extension_img}}" alt="...">
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="/atletica/noticia/{{$ln->id}}" class="media-heading color-bordo">{{$ln->title}}</a>
                          <div class="media-footer text-small">
                            <span class="mr-1"><i class="zmdi zmdi-time color-info mr-05 color-bordo"></i>{{date('d/m/Y',strtotime($ln->created_at))}}</span>
                          </div>
                        </div>
                      </div>

                      @endforeach
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="archives">
                  <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> January 2016 <span class="ml-auto badge-pill">25</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> February 2016 <span class="ml-auto badge-pill">14</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> March 2016 <span class="ml-auto badge-pill">9</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> April 2016 <span class="ml-auto badge-pill">12</span></a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action withripple"><i class="zmdi zmdi-calendar"></i> June 2016 <span class="ml-auto badge-pill">65</span></a>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

      </div> <!-- container -->

@endsection