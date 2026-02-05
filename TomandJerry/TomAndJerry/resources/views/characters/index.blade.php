<h2>Karakterek</h2>

<table>
    <thead>
        <tr>
            <th>Név</th>
            <th>Faj</th>
            <th>Ellenség?</th>
            <th>Erősség</th>
            <th>Első megjelenés</th>
            <th>Műveletek</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($characters as $character)
        <tr>
            <td>{{$character->name}}</td>
            <td>{{$character->species}}</td>
            <td>{{$character->is_enemy}}</td>
            <td>{{$character->strength}}</td>
            <td>{{$character->first_apperance}}</td>
            <td>
                <a href="{{ route('characters.edit', $character->id) }}">Szerkesztés</a>

                <form action="{{route('characters.destroy', $character->id)  }}" method="POST" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Törlés</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>