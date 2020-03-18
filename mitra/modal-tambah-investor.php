<div class="modal fade" id="modal-tambah-investor">
  <div class="modal-dialog">
    <!-- modal content -->
    <div class="modal-content">
      <!-- box -->
      <div class="box box-navy">
        <form>
        <!-- box header -->
        <div class="box-header">
          <h3 class="box-title">Tambah Investor</h3>
        </div>
        <!-- /. box header -->
        <!-- box body -->
        <div class="box-body">
          <div class="form-group">
            <input type="text" class="form-field" placeholder="Username" name="username" id='username' autofocus required />
            <span for="username" class="form-label-icon-right">@</span>
            <label for="username" class="form-label-float">Username</label>
          </div>
          <div class="form-group">
            <input type="email" class="form-field" placeholder="Email" name="email" id='email' required />
            <span for="email" class="form-label-icon-right"><i class="fa fa-envelope"></i></span>
            <label for="email" class="form-label-float">Email</label>
          </div>
          <div class="form-group">
            <input type="number" class="form-field" placeholder="Telepon" name="telepon" id='telepon' required />
            <span for="telepon" class="form-label-icon-right"><i class="fa fa-phone"></i></span>
            <label for="telepon" class="form-label-float">Telepon</label>
          </div>
          <div class="form-group">
            <input type="text" class="form-field" placeholder="Alamat" name="alamat" id='alamat' required />
            <span for="alamat" class="form-label-icon-right"><i class="fa fa-map-marker"></i></span>
            <label for="alamat" class="form-label-float">Alamat</label>
          </div>

        </div>
        <!-- /. box body -->
        <!-- box footer -->
        <div class="box-footer no-border">
          <button type="button" class="btn waves-effect waves-light btn-dark-gray" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
          <button type="submit" class="btn waves-effect waves-light btn-green pull-right"><i class="fa fa-check"></i> Buat</button>
        </div>
        <!-- /. box footer -->
        </form>
      </div>
      <!-- /. box -->
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->