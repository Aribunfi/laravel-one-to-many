<form action="{{ route('projects.store') }}" method="POST">
    @csrf

    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" />

    <label for="year" class="form-label">Year</label>
    <input type="text" class="form-control" id="year" name="year" />

    <label for="kind" class="form-label">Kind</label>
    <select class="form-select" id="type" name="type">
        <option value="graphic">Graphic</option>
        <option value="web">Web</option>
        <option value="writing">Writing</option>
    </select>

    <label for="time" class="form-label">Time</label>
    <input
        type="number"
        class="form-control"
        id="time"
        name="time"
    />

    {{-- <label for="img" class="form-label">img</label>
    <input type="text" class="form-control" id="img" name="img" /> --}}

    <label for="description" class="form-label">Descrizione</label>
    <textarea
        class="form-control"
        id="description"
        name="description"
        rows="4"
    ></textarea>

    <button type="submit" class="btn btn-primary">Salva</button>
</form>