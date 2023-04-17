<table class="table">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th scope="col">Kind</th>
            <th scope="col">Time</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</td>
            <td>{{ $project->year }}</td>
            <td>{{ $project->kind }}</td>
            <td>{{ $project->time }}</td>
            <td>{{ $project->description }}</td>
            <td>...</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- Se è stata usata la paginazione --}}
{{ $projects->links('pagination::bootstrap-5') }}