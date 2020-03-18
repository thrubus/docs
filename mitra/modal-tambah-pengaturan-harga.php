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

          <!-- Plat Nomor -->
          <div class="form-group">
            <label>Plat Nomor : </label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">L 7689 JN</option>
              <option>W 8890 KM</option>
              <option>W 8790 JN</option>
              <option>L 9890 HB</option>
            </select>
          </div>
          <!-- /.Plat Nomor -->

          <div class="form-group">
            <input type="text" class="form-field" placeholder="Tanggal & Jam Mulai" name="tanggal-jam-mulai" id='tanggal-jam-mulai' required />
            <span for="tanggal-jam-mulai" class="form-label-icon-right"><i class="fa fa-play"></i></span>
            <label for="tanggal-jam-mulai" class="form-label-float">Tanggal & Jam Mulai</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-field" placeholder="Tanggal & Jam Selesai" name="tanggal-jam-selesai" id='tanggal-jam-selesai' required />
            <span for="tanggal-jam-selesai" class="form-label-icon-right"><i class="fa fa-pause"></i></span>
            <label for="tanggal-jam-selesai" class="form-label-float">Tanggal & Jam Selesai</label>
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