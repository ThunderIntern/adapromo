        @extends('web.template')
        @section('navbar-red')
            @include('web.component.navbar-red')
        @stop
        @section('content')
        <!-- content -->
        
        <div class="container">
            <div class="row p-t-3">
                <div class="col-md-12 col-lg-12">
                    <div class="col-md-8 col-lg-8">
                        @if($page_datas->datas['status']=='pending')
                        <div class="card p-a-2">
                            <h3>{{ $page_datas->datas['title'] }}</h3><hr />
                            <center><div class="alert alert-danger">Maaf, promo masih dalam proses approval.</div></center>
                        </div>
                        @else
                        <div class="card p-a-2">
                            <h3>{{ $page_datas->datas['title'] }}</h3><hr />
                            <?php 
                                $now = date("m/d/Y");
                                if($now < $page_datas->datas['extra_fields']['start_date'] || $now > $page_datas->datas['extra_fields']['end_date']){
                            ?>
                                <span class="tag grey dark-text">Iklan Tidak Aktif</span>
                            <?php }else{ ?>
                                <span class="tag dark-blue white-text">Iklan Aktif</span>
                            <?php } ?> &nbsp;| 

                            <span class="tag red-text">
                                @if($page_datas->favorite==true)
                                    <i class="fa fa-heart"></i> You tag this promo as favorite.
                                    <a href="{{ route('unfavorite', ['id' => $page_datas->datas['id']])}}" class="blue-text">Unfavorite</a>
                                @else
                                    <a href="{{ route('favorite', ['id' => $page_datas->datas['id']])}}" class="dark-text"><i class="fa fa-heart"></i> Favorite</a>
                                @endif
                            </span> |
                            <a href="" onclick="window.open('https://www.facebook.com/sharer.php?u={{Request::fullUrl()}}', 'Share Promo', 'width=600, height=600'); return false;">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x facebook-text"></i>
                                    <i class="fa fa-facebook fa-stack-1x white-text"></i>
                                </span>
                            </a>
                            <a href="" onclick="window.open('https://twitter.com/intent/tweet?url={{Request::fullUrl()}}', 'Share Promo', 'width=600, height=600'); return false;">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x twitter-text"></i>
                                    <i class="fa fa-twitter fa-stack-1x white-text"></i>
                                </span>
                            </a>
                            <hr />
                            <center>{!! Html::image($page_datas->datas['images']['image1'], null, ['class' => 'card-img-top img-fluid']) !!}</center>
                            <hr />
                            <i class="fa fa-calendar"></i> Jadwal : {{ $page_datas->datas['extra_fields']['start_date'] }} s/d {{ $page_datas->datas['extra_fields']['end_date'] }}
                            <hr />
                            <?php echo $page_datas->datas['description']; ?><br /><br />
                            <i class="fa fa-tag"></i> {{ $page_datas->datas['tags'] }}<br /><br />
                            <a href="#" class="btn red white-text">Promo Selengkapnya</a>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <h4><b>RELATED PROMO:</b></h4>
                        @foreach($page_datas->related as $key => $related)
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                {!! Html::image($related['images']['image1'], null, ['class' => 'card-img-top img-fluid w-100']) !!}
                                <div class="card-block">
                                    <h5 class="card-title">
                                        <a href="{{route('promo.detail', ['id' => $related['id']])}}" class="dark-blue-text">{{$related['title']}}</a>
                                    </h5>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <span class="tag dark-text"><i class="fa fa-heart"></i> Favorite</span>
                                        </div>
                                        <div class="col-md-6 col-lg-6 text-xs-right">
                                            <?php 
                                                $now = date("m/d/Y");
                                                if($now < $related['extra_fields']['start_date'] || $now > $related['extra_fields']['end_date']){
                                            ?>
                                                <span class="tag grey dark-text">Iklan Tidak Aktif</span>
                                            <?php }else{ ?>
                                                <span class="tag dark-blue white-text">Iklan Aktif</span>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <p class="tag dark-text"><i class="fa fa-calendar"></i> {{$related['extra_fields']['start_date']}} s/d {{$related['extra_fields']['end_date']}}</p>
                                    <p class="card-text">{{$related['slug']}}</p>
                                    <p class="card-text"><small class="dark-blue-text"><i class="fa fa-tag dark-blue-text"></i> {{$related['tags']}}</small></p>
                                    <a href="{{route('promo.detail', ['id' => $related['id']])}}" class="btn btn-block red white-text">Lihat Promo</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        <!-- end content -->
        @stop
        @section('footer')
            @include('web.component.footer')
        @stop