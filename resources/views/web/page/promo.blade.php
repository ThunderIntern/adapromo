        @extends('web.template')
        @section('navbar-no-background')
            @include('web.component.navbar-no-background')
        @stop
        @section('searchbar')
            @include('web.component.searchbar')
        @stop
        @section('content')
        <!-- content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="padding-top: 20px;">
                    <center><h4><b>DAFTAR PROMO</b></h4></center>
                </div>
            </div>
        </div>
        
        
                
        
        <div class="container-fluid">
            <div class="row">        
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-md-10">
        
                <?php $promo= json_decode($promo); 
                $count=0; ?>
                @foreach($promo as $promos)
                <?php $count++; ?>
                    <div class="col-md-4" style="padding: 0 17px;">
                        <div id="box">
                            <img src="{{ url('promo3.jpg') }}" />
                            <div class="detail">
                                <a href="">{{ $promos->title }}</a><br />
                                <i class="fa fa-heart"></i> <info>Favorites</info> <status>Iklan Aktif</status>
                            </div>
                            <hr />
                            <div class="date"><i class="fa fa-calendar"></i> <info>18-06-2016 s/d 20-07-2016</info></div>
                            <hr />
                            <div class="detail">
                            {{ $promos->isi }}
                            <br /><br /><i class="fa fa-tag"></i> Fashion<br /><br />
                            <a href=""><div class="button">Lihat Promo</div></a>
                            </div>
                        </div>
                    </div>
                <?php if($count % 3 == 0){?>
                </div>
                <div class="col-sm-1">&nbsp;</div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">        
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-md-10">
                <?php } ?>    
                @endforeach
                </div>
                <div class="col-sm-1">&nbsp;</div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">        
                <div class="col-sm-1">&nbsp;</div>
                <div class="col-md-10">
                    <div class="col-md-12" style="padding-bottom: 20px;">
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
                <div class="col-sm-1">&nbsp;</div>
            </div>
        </div>
        <!-- container -->
        <!-- end content -->
        @stop
        @section('footer')
            @include('web.component.footer')
        @stop