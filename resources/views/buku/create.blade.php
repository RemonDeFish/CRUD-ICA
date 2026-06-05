<!DOCTYPE html>
<html lang="en">

<body>

    <table>
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf

            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <input type="text" name="judul" value="{{ old('judul') }}" placeholder="Masukkan NPM">

                    <!-- error message untuk judul -->
                    @error('judul')
                        {{ $message }}
                    @enderror
                </td>
            </tr>

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <textarea name="deskripsi" rows="5" placeholder="Masukkan nama">{{ old('deskripsi') }}</textarea>

                    <!-- error message untuk deskripsi -->
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