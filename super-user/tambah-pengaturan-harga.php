<div class="modal fade" id="modal-tambah-pengaturan-harga">
  <div class="modal-dialog">
    <!-- modal content -->
    <div class="modal-content">
      <!-- box -->
      <div class="box box-navy">
        <!-- box header -->
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Pengaturan Harga</h3>
        </div>
        <!-- /. box header -->
        <!-- box body -->
        <div class="box-body">
          <!-- pool -->
          <div class="form-group">
            <label>Pool : </label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Bandara Juanda</option>
              <option>Gunung Anyar</option>
            </select>
          </div>
          <!-- /.pool -->

          <!-- tipe mobil -->
          <div class="form-group">
            <label>Tipe Mobil : </label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Xenia All New</option>
              <option>Avanza Grand New</option>
              <option>Innova Reborn</option>
              <option>Big Bus</option>
            </select>
          </div>
          <!-- /.tipe mobil -->

          <!-- kategori mobil -->
          <div class="form-group">
            <label>Kategori Mobil : </label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Regular</option>
              <option>City Car</option>
              <option>Premium</option>
              <option>Luxury</option>
            </select>
          </div>
          <!-- /.kategori mobil -->

          <div class="form-group">
            <span for="tanggal-dan-jam-mulai" class="form-label-icon-right"><i class="fa fa-play"></i></span>
            <input type="text" class="form-field" placeholder="Tanggal & jam mulai" name="tanggal-dan-jam-mulai" id='tanggal-dan-jam-mulai' required />
            <label for="tanggal-dan-jam-mulai" class="form-label-float">Tanggal & jam mulai</label>
          </div>

          <div class="form-group">
            <span for="tanggal-dan-jam-selesai" class="form-label-icon-right"><i class="fa fa-pause"></i></span>
            <input type="text" class="form-field" placeholder="Tanggal & jam selesai" name="tanggal-dan-jam-selesai" id='tanggal-dan-jam-selesai' required />
            <label for="tanggal-dan-jam-selesai" class="form-label-float">Tanggal & jam selesai</label>
          </div>

        </div>
        <!-- /. box body -->
        <!-- box footer -->
        <div class="box-footer">
          <button type="button" class="btn waves-effect waves-light btn-dark-gray" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
          <button type="submit" class="btn waves-effect waves-light btn-green pull-right"><i class="fa fa-check"></i> Buat</button>
        </div>
        <!-- /. box footer -->
      </div>
      <!-- /. box -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->