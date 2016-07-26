        @section('searchbar')
        <!-- search --> 
        <div class="container-fluid">
            <div class="row">
                    <div class="search-menu">
                        <div class="col-sm-1">&nbsp;</div>
                        <div class="col-sm-10">
                            <form method="POST" action="">
                                <div class="hideMob">
                                <div class="col-md-3"><input type="text" name="nama" placeholder="Ketik Nama Promo"/></div>
                                <div class="col-md-2"><input type="text" name="lokasi" placeholder="&#xf041; Lokasi" style="font-family: Noto Sans, FontAwesome;"/></div>
                                <div class="col-md-2"><input type="text" name="kategori" placeholder="&#xf02b; Kategori" style="font-family: Noto Sans, FontAwesome;"/></div>
                                <div class="col-md-2"><input type="text" name="tanggal" placeholder="&#xf073; Tanggal Promo" style="font-family: Noto Sans, FontAwesome;" id="example1"/>
                                </div>
                                <div class="col-md-3"><button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button></div>
                                </div>
                                <div class="hideDesk">
                                <div class="col-md-12">
                                    <input type="text" name="nama" placeholder="Ketik Nama Promo"/>
                                    <button type="submit" class="btn btn-primary button"><i class="fa fa-search"></i> Cari</button>
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-1">&nbsp;</div>
                        <div style="clear: both;"></div>
                    </div>
            </div>
        </div>
        <!-- end search -->