<x-dashboard-layout>
  <x-tab-wrapper>
    <x-data-table-label>
      <x-slot:label>Devis</x-slot:label>
      <x-slot:add>Ajouter</x-slot:add>
      <x-slot:import>Importer</x-slot:import>
    </x-data-table-label>

    <x-data-table>
      <x-slot:head>
        <th>ID</th>
        <th>Client</th>
        <th>Email</th>
        <th>Ville</th>
        <th>Date</th>
        <th>Actions</th>
        <!-- <th>Amount</th> -->
      </x-slot:head>
      <x-slot:body>
        @foreach ($quotes as $quote)
        <tr class="py-1">
          <td>{{ $quote->id }}</td>
          <td>{{ $quote->customer->name }}</td>
          <td>{{ $quote->customer->email }}</td>
          <td>{{ $quote->customer->city }}</td>
          <td>{{ $quote->created_at->format('d M, Y') }} <small>{{$quote->created_at->format('H:iA')}}</small></td>
          <td>
            <x-table-action-wrapper>
              <a href="#">
                <x-icons.edit />
              </a>
              <a href="#">
                <x-icons.trash />
              </a>
              <a href="#">
                <x-icons.download />
              </a>
            </x-table-action-wrapper>
          </td>
        </tr>
        @endforeach
      </x-slot:body>
    </x-data-table>
  </x-tab-wrapper>
</x-dashboard-layout>