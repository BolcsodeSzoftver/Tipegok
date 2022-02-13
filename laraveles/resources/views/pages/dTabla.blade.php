
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Azonosító</th>
                <th>Név</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alkalmazott as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->nev }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
