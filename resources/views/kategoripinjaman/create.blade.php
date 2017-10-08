<form action="/kategoripinjaman" method="POST">
              <div class="form-group">
                  <label>Nama SImpanan</label>
                  <input type="text" class="form-control" name="nama_pinjaman" placeholder="Nama Pinjaman">
              </div>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
              <input type="submit" value="Submit">

</form>