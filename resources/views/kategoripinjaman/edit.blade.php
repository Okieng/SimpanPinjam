<form action="/kategoripinjaman/{{$kategori->id_katagori_pinjaman}}" method="POST">
              <div class="form-group">
                  <label>Nama Pinjaman</label>
                  <input type="text" class="form-control" name="nama_pinjaman" placeholder="Nama Pinjaman" value="{{$kategori->nama_pinjaman}}">
              </div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="_method" value="PUT">
              <input type="submit" value="Submit">

</form>