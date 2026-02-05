    <h2>Karakter szerkesztése</h2>

    <form action="{{route('characters.update', $character)  }}" method="POST">
    @csrf
    @method('PUT')    
    <label>Név</label>
        <input type="text" name="name" value="">

        <label>Faj</label>
        <input type="text" name="species" value="">

        <label>
            <input type="checkbox" name="is_enemy" value="1">
            Ellenséges karakter
        </label>

        <label>Erősség (1–100)</label>
        <input type="number" name="strength" min="1" max="100"
               value="">


        <label>Első megjelenés</label>
        <input type="date" name="first_appearance"
               value="">


        <button type="submit">Frissítés</button>
    </form>
