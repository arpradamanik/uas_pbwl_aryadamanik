@extends ('layouts.app')

@section('content')

<div class="container">

    <h3>Daftar Golongan</h3>
<a href="{{ url('golongan/create') }}"><button class="btn bg-secondary" style="float: right">Tambah Data Golongan</button></a>
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>KODE</td>
            <td>NAMA</td>
            <td>EDIT</td>
            <td>HAPUS</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a href="{{ url('golongan/' . $row->gol_id . '/edit') }}"><button class="btn bg-secondary">Edit</button></a></td>
            <td><form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
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