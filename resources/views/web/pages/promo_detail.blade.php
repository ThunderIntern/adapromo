        @extends('web.template')
        @section('navbar-red')
            @include('web.component.navbar-red')
        @stop
        @section('content')
        <!-- content -->
        
        <div class="container-fluid">
            <div class="row p-t-3">
                <div class="col-md-1 col-lg-1">&nbsp;</div>
                <div class="col-md-10 col-lg-10">
                    <div class="col-md-8 col-lg-8">
                        <div class="card p-a-2">
                            <h3>{{ $page_datas->datas['title'] }}</h3>
                            <hr />
                            <?php 
                                $now = date("m/d/Y");
                                if($now < $page_datas->datas['extra_fields']['start_date'] || $now > $page_datas->datas['extra_fields']['end_date']){
                            ?>
                                <span class="tag grey dark-text">Iklan Tidak Aktif</span>
                            <?php }else{ ?>
                                <span class="tag dark-blue white-text">Iklan Tidak Aktif</span>
                            <?php } ?> &nbsp;| 
                            <span class="tag red-text">
                                @if($page_datas->favorite==true)
                                    <i class="fa fa-heart"></i> You tag this promo as favorite.
                                    <a href="{{ route('unfavorite', ['id' => $page_datas->datas['id']])}}" class="blue-text">Unfavorite</a>
                                @else
                                    <a href="{{ route('favorite', ['id' => $page_datas->datas['id']])}}" class="dark-text"><i class="fa fa-heart"></i> Favorite</a>
                                @endif
                            </span> |
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x facebook-text"></i>
                                    <i class="fa fa-facebook fa-stack-1x white-text"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x twitter-text"></i>
                                    <i class="fa fa-twitter fa-stack-1x white-text"></i>
                                </span>
                            </a>
                            <hr />
                            {!! Html::image($page_datas->datas['images'], null, ['class' => 'card-img-top img-fluid']) !!}
                            <hr />
                            <i class="fa fa-calendar"></i> Jadwal : {{ $page_datas->datas['extra_fields']['start_date'] }} s/d {{ $page_datas->datas['extra_fields']['end_date'] }}
                            <hr />
                            {{ $page_datas->datas['description'] }}<br /><br />
                            <i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href="#" class="btn red white-text">Promo Selengkapnya</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <h4><b>RELATED PROMO:</b></h4>
                        @foreach($page_datas->related as $key => $related)
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                {!! Html::image($related['images'], null, ['class' => 'card-img-top img-fluid']) !!}
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
                                                <span class="tag dark-blue white-text">Iklan Tidak Aktif</span>
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
                <div class="col-md-1 col-lg-1">&nbsp;</div>
            </div>
        </div>
        
        <!-- end content -->
        @stop
        @section('footer')
            @include('web.component.footer')
        @stop