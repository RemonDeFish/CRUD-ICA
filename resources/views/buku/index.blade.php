<a href="{{ route('buku.create') }}">TAMBAH BUKU</a>
<table border="1">
    <tr>
        <th>judul</th>
        <th>deskripsi</th>
        <th>edit / delete</th>
    </tr>

    @forelse ($buku as $bukus)
        <tr>
            <td>{{ $bukus->judul }}</td>
            <td>{{ $bukus->deskripsi }}</td>
            <td>
                <a href="{{ route('buku.edit', $bukus->id) }}">edit</a>
                <a href="{{ route('buku.hapus', $bukus->id) }}">hapus</a>
            </td>
        </tr>
    @empty
        <div>
            Data Buku belum tersedia.
        </div>
    @endforelse
</table>
{{ $buku->links() }}