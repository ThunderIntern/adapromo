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
                        <div class="card p-a-2">
                            <h3 class="dark-blue-text"><b>{{ $page_datas->datas['content']['judul'] }}</b></h3><hr />
                            <div class="text-justify"> {{ $page_datas->datas['content']['Isi'] }}</div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <h4><b>NEW PROMO:</b></h4>
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