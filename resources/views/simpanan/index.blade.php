@foreach ($simpanan as $data)
	{{$data -> id_simpanan}} <br>
	{{$data -> nm_simpanan}} <br>
	{{$data -> anggota_id}} <br>
	{{$data -> tgl_simpanan}} <br>
	{{$data -> besar_simpanan}} <br>
	{{$data -> ket}} <br>
	<form action="/simpanan/{{$data->id_simpanan}}" method="post">
              <input type="hidden" name="_method" value="delete">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <a href="/simpanan/{{$data->id_simpanan}}/edit" type="button" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> Edit</a>
              <button type="submit" class="btn btn-default btn-xs btn-danger" value="Delete"><i class="fa fa-times"></i>Delete</button>
              </form>
	<hr>
@endforeach
