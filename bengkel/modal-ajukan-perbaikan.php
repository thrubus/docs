<div class="modal fade" id="modal-ajukan-perbaikan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ajukan perbaikan</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="text" class="form-field" placeholder="Nopol" name="nopol" id='nopol' value="L 6567 HU" readonly required />
              <label for="nopol" class="form-label-float">Nopol</label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label>Onderdil :</label>
              <select class="form-control select2" data-placeholder="Pilih onderdil ..." style="width: 100%;" tabindex="-1" aria-hidden="true">
                <option selected="selected"></option>
                <option>Oli</option>
                <option>Kampas rem</option>
                <option>Oli samping</option>
                <option>Lampu depan</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-field" placeholder="Jumlah onderdil" name="jumlah" id='jumlah' required />
              <label for="jumlah" class="form-label-float">Jumlah onderdil</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-field" placeholder="Dana pengajuan" name="dana-pengajuan" id='dana-pengajuan' required />
              <label for="dana-pengajuan" class="form-label-float">Dana pengajuan</label>
            </div>
          </div>
        <div class="row">
        </div>
          <div class="col-md-12">
            <div class="form-group">
              <textarea type="text" class="form-field" placeholder="Catatan" name="catatan" id='catatan' required></textarea>
              <label for="catatan" class="form-label-float">Catatan</label>
            </div>
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn waves-effect waves-light btn-dark-gray pull-left" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
        <a href="detail-pemesanan.php?params=terjadwal" class="btn waves-effect waves-light btn-green"><i class="fa fa-check"></i> Ajukan</a>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->