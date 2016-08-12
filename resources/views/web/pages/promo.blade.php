        @extends('web.template')
        @section('navbar')
            @include('web.component.navbar')
        @stop
        @section('searchbar')
            @include('web.component.searchbar')
        @stop
        @section('content')
        <!-- content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-lg-12 p-t-2">
                    <center><h4><b>DAFTAR PROMO</b></h4></center>
                </div>
            </div>
        </div>
        
        <div class="container">
        <div class="row">
            @for ($x=1; $x<=6; $x++)
                <div class="col-md-4 col-lg-4">
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
            @endfor
        </div>
    </div>
            
            <!-- pagination -->
            <div class="container-fluid">
                <div class="row">        
                <div class="col-md-1 col-lg-1">&nbsp;</div>
                <div class="col-md-10 col-lg-10">
                    <div class="col-md-12 col-lg-12">
                         <center><nav>
                          <ul class="pagination">
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true" class="fa fa-step-backward"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                            </li>
                            <li class="page-item active">
                              <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true" class="fa fa-step-forward"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </li>
                          </ul>
                        </nav></center>  
                    </div>       
                </div>
                <div class="col-md-1 col-lg-1">&nbsp;</div>
            </div>
        </div>
        <!-- container -->
        <!-- end content -->
        @stop
        @section('footer')
            @include('web.component.footer')
        @stop