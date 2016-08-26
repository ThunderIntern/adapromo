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
                            <h3 class="dark-blue-text"><b>Pendaftaran Promo Baru</b></h3><hr />
                            <div class="text-justify">
                                @if(Session::has('message-danger'))
                                    <center><div class="alert alert-danger"><small>{{Session::get('message-danger')}}</small></div></center>
                                @endif
                                @if(Session::has('message-success'))
                                    <center><div class="alert alert-success"><small>{{Session::get('message-success')}}</small></div></center>
                                @endif
                                Anda bisa mendaftarkan promo-promo di Adapromo.id dengan sangat mudah. Melalui Adapromo.id anda bisa menyebarluaskan info promo anda kepada masyarakat luas. Kami mengundang kalian para brand owner untuk berpartisipasi bersama kami dengan cara mengirimkan materi promosi Anda beserta deskripisi materi promosinya secara lengkap (mekanisme promo, periode promo, lokasi outlet yang melakukan promo).<br><br>
                                <h5 class="dark-blue-text">Langkah-langkah pendaftaran promo:</h5>
                                <ul>
                                    <li>Isi form yang sudah tersedia dibawah.</li>
                                    <li>Lakukan pembayaran biaya promosi ke rekening Adapromo.id (nomor rekening 720-3133-131-1 a/n Adapromo) dengan mencantumkan <b>Kode Pembayaran</b> yang sesuai, <b class="red-text">maksimal 24 jam setelah pendafataran</b>. Jika melebihi batas waktu melakukan pembayaran, maka akan promo dianggap dibatalkan.</li>
                                    <li>Lakukan konfirmasi pembayaran dengan cara upload bukti transfer di menu <a href="{{route('account')}}">Account</a> > My Promo. Klik link "Konfirmasi Pembayaran".</li>
                                    <li>Setelah admin melakukan pengecekan dan promosi sudah sesuai dengan ketentuan, maka promosi anda akan tampil di halaman promo.</li>
                                </ul><br>                                

                                @if(!is_null(Session::get('username')))
                                <h5 class="dark-blue-text"><b>Form Pendaftaran</b></h5>
                                {!! Form::open(['url' => route('promo.register'), 'method' => 'post' ]) !!}
                                    <label for="name">Title</label>
                                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Judul', 'required' => 'required']) !!}
                                
                                    <label for="name">Short Description</label>
                                    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Short Description', 'required' => 'required']) !!}
                                
                                    <label for="name">Full Description</label>
                                    {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => '5', 'id' => 'myTextarea', 'placeholder' => 'Full Description']) !!}
                                
                                    <label for="name">Images</label>
                                    <div id="image">
                                    {!! Form::url('images1', null, ['class' => 'form-control', 'placeholder' => 'Images', 'required' => 'required']) !!}
                                    </div>
                                    <a onclick="addImage();" id="add" class="btn btn-secondary m-t-1"><i class="fa fa-plus"></i> Add new image</a><br>
                                
                                    <label for="name">Tags</label>
                                    <select name="tags" class="form-control">
                                    @foreach($page_datas->tags as $key => $tags)
                                        <option value="{{ $tags['tags'] }}">{{ $tags['tags'] }}</option>
                                    @endforeach
                                    </select>
                                
                                    <label for="name">Type</label>
                                    {!! Form::text('type', null, ['class' => 'form-control', 'placeholder' => 'Type', 'required' => 'required']) !!}
                                
                                    <label for="name">Tanggal Awal Promo</label>
                                    {!! Form::date('start_date', null, ['class' => 'form-control', 'data-inputmask' => "'mask':'m/d/y'", 'placeholder' => 'Tanggal Awal Promo', 'required' => 'required'])
                                    !!}
                                    <small>format: mm/dd/yyyy</small><br>
                                
                                    <label for="name">Tanggal Akhir Promo</label>
                                    {!! Form::date('end_date', null, ['class' => 'form-control', 'data-inputmask' => "'mask':'m/d/y'", 'placeholder' => 'Tanggal Akhir Promo', 'required' => 'required']) !!}
                                    <small>format: mm/dd/yyy</small><br><br>

                                    <label for="name" class="red-text"><b>Biaya Promo: Rp. 50.000-,</b></label><br>
                                    <?php $date = date("mdHis"); ?>
                                    <label for="name" class="red-text"><b>Kode Pembayaran: <?php echo $date; ?></b></label>
                                    {!! Form::hidden('kode', $date) !!}

                                    {!! Form::submit('Daftarkan Promo', ['class' => 'btn btn-block red white-text m-t-1']) !!}
                                {!! Form::close() !!}
                                @else
                                    Untuk mendaftarkan promo anda, anda harus <a href="{{route('login')}}">Login</a> terlebih dahulu.
                                @endif
                            </div>
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
        <script type="text/javascript">
            var count = 2;
            function addImage(){
                document.getElementById('image').innerHTML += "<input class='form-control' name='images"+count+"' type='url'>";
                count++;
                if(count>3){
                    $('#add').hide();
                }
            }
        </script>
        @stop
        @section('footer')
            @include('web.component.footer')
        @stop