
<h1>welcome</h1>

<h1>Items Index</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">item</th>
      
    </tr>
  </thead>
  <tbody>

  @foreach ($items as $item)

    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>{{ $item->item }}</td>
    
    </tr>
    @endforeach

  </tbody>

</table>
