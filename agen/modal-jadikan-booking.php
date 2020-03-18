<div class="modal fade" id="modal-jadikan-booking">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Jadikan Booking</h4>
      </div>
      <div class="modal-body">
        <p><b>Harga:</b> Rp. 800.000,-</p>
        <div class="row ml-0 mr-0">
          <div class="col-md-6 pl-0">
            <p><b><u>Customer :</u></b></p>
            <div class="form-group mt-0">
              <input type="text" class="form-field" placeholder="Nama" name="c-nama" id='c-nama' required value="Joni" readonly/>
              <label for="c-nama" class="form-label-float">Nama</label>
            </div>
            <div class="form-group mt-0">
              <input type="text" class="form-field" placeholder="No. telepon" name="c-no-telepon" id='c-no-telepon' required value="+62-887-7625-8720" readonly/>
              <label for="c-no-telepon" class="form-label-float">No. Telepon</label>
            </div>
            <div class="form-group mt-0">
              <input type="text" class="form-field" placeholder="Alamat" name="c-alamat" id='c-alamat' required value="Jl. Raya maju mundur, maju mundur, maju mundur." readonly/>
              <label for="c-alamat" class="form-label-float">Alamat</label>
            </div>
          </div>
          <div class="col-md-6">
            <p><b><u>Tamu :</u></b></p>
            <div class="form-group mt-0">
              <input type="text" class="form-field" placeholder="Nama" name="nama" id='nama' required />
              <label for="nama" class="form-label-float">Nama</label>
            </div>
            <div class="form-group mt-0">
              <input type="text" class="form-field" placeholder="No. telepon" name="no-telepon" id='no-telepon' required />
              <label for="no-telepon" class="form-label-float">No. Telepon</label>
            </div>
            <div class="form-group mt-0">
              <input type="text" class="form-field" placeholder="Alamat" name="alamat" id='alamat' required />
              <label for="alamat" class="form-label-float">Alamat</label>
            </div>
          </div>
          <br>
          <div class="col-md-12">
            <div class="checkbox pull-right">
              <input type="checkbox" id="check" style="display: none;" onclick="same()">
              <label for="check" class="check">
                <div class="svg-checkbox">Tamu sama dengan customer</div>
              </label>
            </div>
          </div>
        </div>      
        <div class="form-group">
          <input type="text" class="form-field" placeholder="Jumlah uang muka" name="jumlah-uang-muka" id='jumlah-uang-muka' required />
          <label for="jumlah-uang-muka" class="form-label-float">Jumlah uang muka</label>
        </div>
        <div class="form-group">
          <label>Metode pembayaran :</label>
          <select class="form-control select2" id="payment-method" data-placeholder="Metode Uang Muka ..." style="width: 100%;">
            <option selected="selected"></option>
            <option value="tunai">Tunai</option>
            <option value="transfer">Transfer</option>
          </select>
        </div>
        <div class="form-group is-hidden" style="display:none">
          <input type="text" class="form-field" placeholder="Atas nama pengirim" name="atas-nama-pengirim" id='atas-nama-pengirim' required />
          <label for="atas-nama-pengirim" class="form-label-float">Atas nama pengirim</label>
        </div>
        <div class="form-group is-hidden" style="display:none">
          <input type="text" class="form-field" placeholder="No. Rekening Pengirim" name="no-rek-pengirim" id='no-rek-pengirim' required />
          <label for="no-rek-pengirim" class="form-label-float">No. Rekening Pengirim</label>
        </div>
        <div class="form-group is-hidden" style="display:none">
          <label>Rekening tujuan :</label>
          <select class="form-control select2" data-placeholder="Pilih Rekening Tujuan ..." style="width: 100%;">
            <option selected="selected"></option>
            <option>BCA - 67587564675 - PT. Okka Karunia Abadi</option>
            <option>BNI - 578586988670789 - PT. Okka Karunia Abadi</option>
            <option>BRI - 46567467876 - PT. Okka Karunia Abadi</option>
          </select>
        </div>
        <div class="form-group">
          <label>Plat nomor :</label>
          <select class="form-control select2" data-placeholder="Tentukan Nopol ..." style="width: 100%;">
            <option selected="selected">W 8876 GY</option>
            <option>L 8776 HB</option>
            <option>K 9879 BV</option>
            <option>W 7657 HB</option>
            <option>L 9877 VV</option>
          </select>
        </div>
        <div class="form-group">
          <label>Driver :</label>
          <select class="form-control select2" data-placeholder="Tentukan Driver ..." style="width: 100%;">
            <option selected="selected">Gampang - 083567576598</option>
            <option>Supeno - 08567625372</option>
            <option>Sujono - 08567625372</option>
            <option>Mintol - 08567625372</option>
            <option>Menda - 08567625372</option>
          </select>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-field" placeholder="Tanggal mulai" name="tanggal-mulai" id='tanggal-mulai' required />
              <span for="tanggal-mulai" class="form-label-icon-right"><i class="fa fa-calendar"></i></span>
              <label for="tanggal-mulai" class="form-label-float">Tanggal mulai</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-field" placeholder="Tanggal selesai" name="tanggal-selesai" id='tanggal-selesai' required />
              <span for="tanggal-selesai" class="form-label-icon-right"><i class="fa fa-calendar"></i></span>
              <label for="tanggal-selesai" class="form-label-float">Tanggal selesai</label>
            </div>
          </div>
        </div>
        
        <p><b>Jatuh Tempo:</b> 27 November 2019</p>
        <p><b>Tagihan:</b> Rp. 100.000,-</p>

      </div>

      <div class="modal-footer">
        <a href="detail-pemesanan.php?params=booking" class="btn waves-effect waves-light btn-green"><i class="fa fa-check"></i> Simpan</a>
      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script>
var paymentMethod = document.getElementById('payment-method')
var isHiddens = document.getElementsByClassName('is-hidden')
var checkBox = document.getElementById('check')

paymentMethod.onchange = () => {
  for(const isHidden of isHiddens) {
    if(paymentMethod.value == 'transfer'){
      isHidden.style.display = 'flex'
    }else if (paymentMethod.value == 'tunai'){
      isHidden.style.display = 'none'
    }
  }
}
function same() {
  if (checkBox.checked == true){
    document.getElementById('nama').value = document.getElementById('c-nama').value;
    document.getElementById('no-telepon').value = document.getElementById('c-no-telepon').value;
    document.getElementById('alamat').value = document.getElementById('c-alamat').value;
  } else {
    document.getElementById('nama').value = '';
    document.getElementById('no-telepon').value = '';
    document.getElementById('alamat').value = '';
  }
}
</script>