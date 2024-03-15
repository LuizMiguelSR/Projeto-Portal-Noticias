<table>
    <thead>
        <th>Titulo</th>
        <th>Noticia</th>
    </thead>

    <tbody>
        @foreach ($noticias as $noticia)
            <tr>
                <td>{{ $noticia->titulo }}</td>
                <td>{{ $noticia->noticia }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
