<div class="mb-3">
    <label>Judul</label>
    <input type="text" name="judul" class="form-control" value="{{ old('judul', $majalah->judul ?? '') }}">
</div>
<div class="mb-3">
    <label>Edisi</label>
    <input type="text" name="edisi" class="form-control" value="{{ old('edisi', $majalah->edisi ?? '') }}">
</div>
<div class="mb-3">
    <label>Penerbit</label>
    <input type="text" name="penerbit" class="form-control" value="{{ old('penerbit', $majalah->penerbit ?? '') }}">
</div>
<div class="mb-3">
    <label>Tanggal Terbit</label>
    <input type="date" name="tanggal_terbit" class="form-control" value="{{ old('tanggal_terbit', $majalah->tanggal_terbit ?? '') }}">
</div>
<div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $majalah->deskripsi ?? '') }}</textarea>
</div>
