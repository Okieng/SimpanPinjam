<form action="/simpanan" method="POST">
              <div class="form-group">
                  <label>Nama SImpanan</label>
                  <input type="text" class="form-control" name="nm_simpanan" placeholder="Nama SImpanan">
              </div>
              <div class="form-group">
                  <label>Anggota ID</label>
                  <input type="text" class="form-control" name="anggota_id" placeholder="Anggota ID">
              </div>
              <div class="form-group">
                  <label>Tanggal Simpanan</label>
                  <input type="text" class="form-control" name="tgl_simpanan" placeholder="Tanggal Simpanan">
              </div>
              <div class="form-group">
                  <label>Besar simpanan</label>
                  <input type="text" class="form-control" name="besar_simpanan" placeholder="Besar simpanan">
              </div>
              <div class="form-group">
                  <label>Ket</label>
                  <textarea name="ket" id="" cols="30" rows="10"></textarea>
              </div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="submit" value="Submit">

</form>