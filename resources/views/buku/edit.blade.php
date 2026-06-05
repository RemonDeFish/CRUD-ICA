<!DOCTYPE html>
<html lang="en">

<body>

    <table>
        <form action="{{ route('buku.update', $buku->id) }}" method="POST">
            @csrf
            @method('PUT')

            <tr>
                <td>JUDUL</td>
                <td>:</td>
                <td>
                    <input type="text" name="judul"
                        value="{{ old('judul', $buku->judul) }}"
                        placeholder="Masukkan Judul Buku">

                    <!-- error message untuk title -->
                    @error('judul')
                        {{ $message }}
                    @enderror
                </td>
            </tr>

            <tr>
                <td>DESKRIPSI</td>
                <td>:</td>
                <td>
                    <textarea name="deskripsi" rows="5" placeholder="Masukkan Deskripsi Buku">{{ old('deskripsi', $buku->deskripsi) }}</textarea>

                    <!-- error message untuk content -->
                    @error('deskripsi')
                        <div>
                            {{ $message }}
                        </div>
                    @enderror
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </td>
            </tr>

        </form>
    </table>

</body>

</html>