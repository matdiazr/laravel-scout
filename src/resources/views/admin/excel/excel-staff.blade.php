<table>
  <thead>
  <tr>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>EDAD</th>
      <th>CURSO</th>
      @if (!$estado)
      <th>ESTADO</th>
      @endif
  </tr>
  </thead>
  <tbody>
  @foreach($staff as $persona)
      <tr>
          <td>{{ $persona->id }}</td>
          <td>{{ $persona->nombre }}</td>
          <td>{{ $persona->edad }}</td>
          <td>{{ $persona->curso->nombre }}</td>
          @if (!$estado)
            <td>
              @if ($persona->estado)
                activo  
              @else
                inactivo
              @endif
            </td>
          @endif
      </tr>
  @endforeach
  </tbody>
</table>