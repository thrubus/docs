<div class="modal fade" id="modal-atur-jadwal">
  <div class="modal-dialog">
    <!-- modal content -->
    <div class="modal-content">
      <!-- box -->
      <div class="box box-navy">
        <!-- box header -->
        <div class="box-header with-border">
          <h3 class="box-title">Atur Jadwal</h3>
        </div>
        <!-- /. box header -->
        <!-- box body -->
        <div class="box-body">
          <div class="form-group">
            <label>Tipe mobil :</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">Avanza All New</option>
              <option>Innova Reborn</option>
            </select>
          </div>
          <br>
          
          <div class="form-group">
            <label>Nopol :</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">L 7675 UH</option>
              <option>L 8888 HH</option>
              <option>L 8838 HH</option>
              <option>L 4838 HH</option>
              <option>L 4438 HH</option>
              <option>L 4838 HH</option>
              <option>W 4834 HH</option>
            </select>
          </div>
          <br>

          <div class="form-group">
            <input type="text" class="form-field" placeholder="Tanggal mulai" name="tanggal-mulai" id='tanggal-mulai' required />
            <span for="tanggal-mulai" class="form-label-icon-right"><i class="fa fa-pause"></i></span>
            <label for="tanggal-mulai" class="form-label-float">Tanggal mulai</label>
          </div>

          <div class="form-group">
            <input type="text" class="form-field" placeholder="Tanggal selesai" name="tanggal-selesai" id='tanggal-selesai' required />
            <span for="tanggal-selesai" class="form-label-icon-right"><i class="fa fa-play"></i></span>
            <label for="tanggal-selesai" class="form-label-float">Tanggal selesai</label>
          </div>

          <div class="form-group">
            <textarea type="text" class="form-field" placeholder="Keterangan" name="keterangan" id='keterangan' required></textarea>
            <label for="keterangan" class="form-label-float">Keterangan</label>
          </div>
          <br>

        </div>
        <!-- /. box body -->
        <!-- box footer -->
        <div class="box-footer">
          <button type="button" class="btn waves-effect waves-light btn-dark-gray" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
          <button type="submit" class="btn waves-effect waves-light btn-red pull-right"><i class="fa fa-warning"></i> Nonaktifkan</button>
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