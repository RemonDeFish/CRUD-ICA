<?php
namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BukuController extends Controller
{
    public function index(): View
    {
        //get buku
        $buku = Buku::latest()->paginate(5);
        //render view dengan data buku
        return view('buku.index', compact('buku'));
    }

    public function create(): View
    {
        return view('buku.create');
    }

    public function store(Request $request): RedirectResponse
    {
        //validate form
        $validated = $request->validate([
            'judul'     => 'required|min:3',
            'deskripsi' => 'required|min:10'
        ]);

        //create buku
        Buku::create([
            'judul'     => $request->judul,
            'deskripsi' => $request->deskripsi
        ]);

        //redirect to index
        return redirect()->route('buku.index')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        $buku = Buku::findOrFail($id);

        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $validated = $request->validate([
            'judul' => 'required|min:3',
            'deskripsi' => 'required|min:10'
        ]);

        $buku = Buku::findOrFail($id);

        $buku->update($request->all());

        return redirect()->route('buku.index')
            ->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(string $id): RedirectResponse
    {
        $buku = Buku::findOrFail($id);

        $buku->delete();

        return redirect()->route('buku.index');
    }
}