<x-template>
<div class="container">
<form method="post" class="was-validated">
@csrf
<div class="mb-3">
<label for="title" class="form-label">Judul</label>
<input type="text" name="title" id="title" class="form-control"
required>
</div>
<div class="mb-3">
<label for="content" class="form-label">Isi</label>
<textarea name="content" id="content" class="form-control"
required></textarea>
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">Simpan</button>
</div>
</form>
</div>
</x-template>
