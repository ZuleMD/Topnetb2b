@extends('admin.layouts.master')


@section('content')

<section class="section">
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Historique des modifications</h4>
                </div>
                <div class="card-content">

                    <div class="table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>Id utilisateur</th>
                                    <th>Nom utilisateur</th>
                                    <th>Rôle utilisateur</th>
                                    <th>Action</th>
                                    <th>Id auditable </th>
                                    <th>Date</th>
                                    <th>Anciennes valeurs </th>
                                    <th>Nouvelles valeurs </th>
                                </tr>
                            </thead>
                            <tbody id="audits">
                                @foreach($audits as $audit)
                                <tr>
                                    <td class="text-bold-500">{{ $audit->User->id}}</td>
                                    <td>{{ $audit->User->Nom}}</td>
                                    <td class="text-bold-500">{{ $audit->User->Role->Nom}}</td>
                                    <td>{{ $audit->event }}</td>
                                    <td>{{ $audit->auditable_id}}</td>
                                    <td>{{ $audit->created_at }}</td>
                                    <td>
                                        <table class="table">
                                            @foreach($audit->old_values as $attribute => $value)
                                            <tr>
                                                <td><b>{{ $attribute }}</b></td>
                                                <td>{{ $value }}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </td>
                                    <td>
                                        <table class="table">
                                            @foreach($audit->new_values as $attribute => $value)
                                            <tr>
                                                <td><b>{{ $attribute }}</b></td>
                                                <td>{{ $value }}</td>
                                            </tr>
                                            @endforeach
                                        </table>
                                    </td>


                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection