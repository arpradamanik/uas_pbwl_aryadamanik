@extends ('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Pelanggan</h3>
    <a href="{{ url('pelanggan/create') }}"><button class="btn bg-secondary" style="float: right">Tambah Data Pelanggan</button></a>
    <table class="table table-bordered">
        <tr>
            <td>NO</td>
            <td>ID GOLONGAN</td>
            <td>NAMA</td>
            <td>ALAMAT</td>
            <td>NO HP</td>
            <td>ID STAFF</td>
            <td>EDIT</td>
            <td>HAPUS</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->pel_id }}</td>
            <td>{{ $row->pel_id_gol }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_hp }}</td>
            <td>{{ $row->pel_id_user }}</td>
            <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}"><button class="btn bg-secondary">Edit</button></a></td>
            <td><form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection