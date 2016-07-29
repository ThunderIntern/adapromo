        @extends('web.template')
        @section('navbar-red')
            @include('web.component.navbar-red')
        @stop
        @section('content')
        <!-- content -->
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">&nbsp;</div>        
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-md-10">
                    <div class="col-md-8" style="padding: 0 17px;">
                        <?php 
                            $data = json_decode($data); 
                            $related = json_decode($related);
                        ?>
                        @foreach($data as $content)
                        <div id="content-detail">
                            <h3>{{ $content->title }}</h3>
                            <hr />
                            <status>Promo Aktif</status> &nbsp;| <i class="fa fa-heart"></i> <info>Favorites</info> |
                            <img src="../../facebook.png" width=20>&nbsp;&nbsp;<img src="../../twitter.png" width=20>
                            <hr /><br />
                            <img src="../../promo3.jpg" style="max-width: 60%;"/><br />
                            <hr />
                            <i class="fa fa-calendar"></i> Jadwal : 18-06-2016 s/d 20-07-2016 
                            <hr /><br />
                            {{ $content->isi }}<br /><br />
                            <i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href="" class="more">Promo selengkapnya</a>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-4" style="padding: 0 17px;">
                        <h4><b>RELATED PROMO:</b></h4>
                        @foreach($related as $relateds)
                        <div id="box">
                            <img src="../../promo3.jpg" />
                            <div class="detail">
                                <a href="">{{ $relateds->title }}</a><br />
                                <i class="fa fa-heart"></i> <info>Favorites</info> <status>Iklan Aktif</status>
                            </div>
                            <hr />
                            <div class="date"><i class="fa fa-calendar"></i> <info>18-06-2016 s/d 20-07-2016</info></div>
                            <hr />
                            <div class="detail">
                            {{ $relateds->isi }}
                            <br /><br /><i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href=""><div class="button">Lihat Promo</div></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-1">&nbsp;</div>
            </div>
        </div>
        
        <!-- end content -->
        @stop
        @section('footer')
            @include('web.component.footer')
        @stop