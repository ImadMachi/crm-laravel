<x-dashboard-layout>
  <x-tab-wrapper>
    <x-data-table-label>
      <x-slot:label>Produits</x-slot:label>
      <x-slot:add>Ajouter</x-slot:add>
      <x-slot:import>Importer</x-slot:import>
    </x-data-table-label>

    <x-data-table>
      <x-slot:head>
        <th>Produit</th>
        <th>Prix</th>
        <th>Stock</th>
        <th>Rating</th>
        <th>Publié à</th>
        <th>Actions</th>
      </x-slot:head>
      <x-slot:body>
        @foreach ($products as $product)
        <tr class="py-1">
          <td><img alt="{{ $product->name }}" width="50" height="50" src="{{$product->image}}" /> {{ $product->name }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->stock }}</td>
          <td><span class="px-3 py-1 rounded-1 bg-secondary text-white"><i class='bx bxs-star text-warning'></i> {{ $product->rating }}</span></td>
          <td>{{ $product->created_at->format('d M, Y') }} <small>{{$product->created_at->format('H:iA')}}</small></td>
          <td>
            <x-table-action-wrapper>
              <a href="#">
                <x-icons.edit />
              </a>
              <a href="#">
                <x-icons.trash />
              </a>
            </x-table-action-wrapper>
          </td>
        </tr>
        @endforeach
      </x-slot:body>
    </x-data-table>
  </x-tab-wrapper>
</x-dashboard-layout>