@extends("layouts.app")

@section("page-title", "Homepage")


@section("main-content")

    <h1 class="fw-bold text-center py-4">Train List</h1>

    <div class="container">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Azienda</th>
                        <th>Stazione di Arrivo</th>
                        <th>Stazione di Partenza</th>
                        <th>Orario di Arrivo</th>
                        <th>Orario di Partenza</th>
                        <th>Codice Univoco</th>
                        <th>NUmero Carrozze</th>
                        <th>In Orario</th>
                        <th>Cancellato</th>
                        <th>Data Partenza</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ( $trains as $train )
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->Azienda }}</td>
                        <td>{{ $train->Stazione_di_arrivo }}</td>
                        <td>{{ $train->Stazione_di_partenza }}</td>
                        <td>{{ $train->Orario_di_arrivo }}</td>
                        <td>{{ $train->Orario_di_partenza }}</td>
                        <td>{{ $train->Codice_Univoco }}</td>
                        <td>{{ $train->Numero_Carrozze }}</td>
                        <td>{{ $train->In_Orario }}</td>
                        <td>{{ $train->Cancellato }}</td>
                        <td>{{ $train->data_partenza }}</td>
                    </tr>

                    @empty
                        <tr>
                            <td>No Data Available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
    </div>

@endsection
