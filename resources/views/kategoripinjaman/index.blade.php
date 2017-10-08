@foreach ($kategori as $data)
	{{$data -> id_katagori_pinjaman}} <br>
	{{$data -> nama_pinjaman}} <br>
	<form action="/kategoripinjaman/{{$data->id_katagori_pinjaman}}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <a href="/kategoripinjaman/{{$data->id_katagori_pinjaman}}/edit" type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
              <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-times"></i>Delete</button>
              </form>
	<hr>
@endforeach
