        @extends('web.template')
        @section('navbar-red')
            @include('web.component.navbar-red')
        @stop
        @section('content')
        <!-- content -->
        
        <div class="container">
            <div class="row p-t-3">
                <div class="col-md-1 col-lg-1">&nbsp;</div>
                <div class="col-md-10 col-lg-10">
                    <div class="col-md-8 col-lg-8">
                        <?php 
                            $data = json_decode($data); 
                            $related = json_decode($related);
                        ?>
                        @foreach($data as $content)
                        <div class="card p-a-2">
                            <h3 class="dark-blue-text"><b>{{ $content->title }}</b></h3><hr />
                            <div class="text-justify"> {{ $content->isi }}</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <h4><b>NEW PROMO:</b></h4>
                        @foreach($related as $relateds)
                        <div class="col-md-12 col-lg-12">
                            <div class="card">
                                {!! Html::image('images/promo3.jpg', null, ['class' => 'card-img-top img-fluid']) !!}
                                <div class="card-block">
                                    <h5 class="card-title">
                                        <a href="" class="dark-blue-text">Promo Daster Slim Matahari Mall 50%</a>
                                    </h5>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <span class="tag dark-text"><i class="fa fa-heart"></i> Favorite</span>
                                        </div>
                                        <div class="col-md-6 col-lg-6 text-xs-right">
                                            <span class="tag grey dark-text">Iklan Tidak Aktif</span>
                                        </div>
                                    </div>
                                    <p class="tag dark-text"><i class="fa fa-calendar"></i> 18-06-2016 s/d 20-07-2016</p>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <p class="card-text"><small class="dark-blue-text"><i class="fa fa-tag dark-blue-text"></i> Fashion</small></p>
                                    <a href="#" class="btn btn-block red white-text">Lihat Promo</a>
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