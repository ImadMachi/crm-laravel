<x-dashboard-layout>
  <x-tab-wrapper>
    <x-data-table-label>
      <x-slot:label>Bons De Livraison</x-slot:label>
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
        @foreach ($receipts as $receipt)
        <tr class="py-1">
          <td>{{ $receipt->id }}</td>
          <td>{{ $receipt->customer->name }}</td>
          <td>{{ $receipt->customer->email }}</td>
          <td>{{ $receipt->customer->city }}</td>
          <td>{{ $receipt->created_at->format('d M, Y') }} <small>{{$receipt->created_at->format('H:iA')}}</small></td>
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

  <x-modal>
    <x-slot:title>
      Ajouter Bon De Livraison
    </x-slot:title>
    <x-slot:content>
      <form>
        <x-form.input name="name" label="Nom et Prénom" placeholder="John Doe" />
        <x-form.input name="email" label="Email" placeholder="nom@gmail.com" />
        <x-form.textarea name="address" label="Adresse" />
        <x-form.input name="city" label="Ville" placeholder="Marrakesh" />
        <x-form.input name="phone" label="Telephone" placeholder="0612-345678" />
        <x-form.form-group>
          <x-form.actions>
            <x-buttons.muted label="Fermer" class="close-modal mx-1" />
            <x-buttons.primary type="submit" label="Enregistrer" />
          </x-form.actions>
        </x-form.form-group>
      </form>
    </x-slot:content>
  </x-modal>

</x-dashboard-layout>