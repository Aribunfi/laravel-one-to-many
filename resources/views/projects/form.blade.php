<div class="col-md-2 text-end">
<label for="is_published" class="form-label">Pubblicato</label>
</div>
<div class="col-md-10">
    <input type="checkbox" name="is_published" id="is_published" class="form-check-control @error('is_published') is-invalid @enderror" @checjed(old('is_published')) value="1" />
    @error('is_published')
<div class="invalid-feedback">
    {{ $message }}
</div>
@enderror
</div>
</div>
<div class="row mb-3">
    <div class="col-md-8">
        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
    @error('image')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @error
    </div>
    <div class="col-2">
        <img src="{{ $project->getImageUri() }}" class="img-fluid" alt="" id="image-preview">
    </div>

</div>