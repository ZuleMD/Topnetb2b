@extends('admin.layouts.master')

@section('content')

<body class="">
    <div class="wrapper ">

        <div class="main-panel" id="main-panel">

            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        @if(Session::has('message'))
                        <div class="alert bg-success alert-success text-white" role="alert">
                            {{Session::get('message')}}
                        </div>
                        @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Consulter l'historique des changements</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id=agenceTable>
                                        <thead class="text-primary">
                                            <th>Nom utilisateur</th>
                                            <th>Rôle utilisateur</th>
                                            <th>Action</th>
                                            <th>Id auditable </th>
                                            <th>Date</th>
                                            <th>Anciennes valeurs </th>
                                            <th>Nouvelles valeurs </th>
                                        </thead>
                                        <tbody id="audits">
                                            @foreach($audits as $audit)
                                            <tr>
                                                <td>{{ $audit->User->Nom}}</td>
                                                <td class="text-bold-500">{{ $audit->User->Role->Nom}}</td>
                                                <td>{{ $audit->event }}</td>
                                                <td>{{ $audit->auditable_id}}</td>
                                                <td>{{ $audit->created_at }}</td>
                                                <td>
                                                    <table class="table table-bordered">
                                                        @foreach($audit->old_values as $attribute => $value)
                                                        <tr>

                                                            @if($value==1)

                                                            <td><b>{{ $attribute }}</b>&nbsp;&nbsp;
                                                                désactivé
                                                            </td>

                                                            @elseif ($value==0)
                                                            <td><b>{{ $attribute }}</b>&nbsp;&nbsp;
                                                                activé
                                                            </td>
                                                            @else
                                                            <td><b>{{ $attribute }}</b>&nbsp;&nbsp;
                                                                {{ $value }}
                                                            </td>
                                                            @endif

                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </td>
                                                <td>
                                                    <table class="table table-bordered">
                                                        @foreach($audit->new_values as $attribute => $value)
                                                        <tr>

                                                            @if($value==1)

                                                            <td><b>{{ $attribute }}</b>&nbsp;&nbsp;
                                                                désactivé
                                                            </td>

                                                            @elseif ($value==0)
                                                            <td><b>{{ $attribute }}</b>&nbsp;&nbsp;
                                                                activé
                                                            </td>
                                                            @else
                                                            <td><b>{{ $attribute }}</b>&nbsp;&nbsp;
                                                                {{ $value }}
                                                            </td>
                                                            @endif

                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </td>


                                            </tr>
                                            @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>


@endsection