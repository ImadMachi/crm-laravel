<x-dashboard-layout>
  <x-tab-wrapper>
    <x-data-table-label>
      <x-slot:label>Factures</x-slot:label>
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
        <th>Statut</th>
        <th>Actions</th>
        <!-- <th>Amount</th> -->
      </x-slot:head>
      <x-slot:body>
        @foreach ($invoices as $invoice)
        <tr class="py-1">
          <td>{{ $invoice->id }}</td>
          <td>{{ $invoice->customer->name }}</td>
          <td>{{ $invoice->customer->email }}</td>
          <td>{{ $invoice->customer->city }}</td>
          <td>{{ $invoice->created_at->format('d M, Y') }} <small>{{$invoice->created_at->format('H:iA')}}</small></td>
          <td>{{ $invoice->status }}</td>
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