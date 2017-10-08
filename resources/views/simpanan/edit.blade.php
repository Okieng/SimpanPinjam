<form action="/simpanan/{{$simpanan->id_simpanan}}" method="POST">
              <div class="form-group">
                  <label>Nama SImpanan</label>
                  <input type="text" class="form-control" name="nm_simpanan" placeholder="Nama SImpanan" value="{{$simpanan->nm_simpanan}}">
              </div>
              <div class="form-group">
                  <label>Anggota ID</label>
                  <input type="text" class="form-control" name="anggota_id" placeholder="Anggota ID" value="{{$simpanan->anggota_id}}">
              </div>
              <div class="form-group">
                  <label>Tanggal Simpanan</label>
                  <input type="text" class="form-control" name="tgl_simpanan" placeholder="Tanggal Simpanan" value="{{$simpanan->tgl_simpanan}}">
              </div>
              <div class="form-group">
                  <label>Besar simpanan</label>
                  <input type="text" class="form-control" name="besar_simpanan" placeholder="Besar simpanan" value="{{$simpanan->besar_simpanan}}">
              </div>
              <div class="form-group">
                  <label>Ket</label>
                  <textarea name="ket" id="" cols="30" rows="10">{{$simpanan->ket}}</textarea>
              </div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
              <input type="submit" value="Submit">

</form>