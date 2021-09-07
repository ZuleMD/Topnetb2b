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
                                <h4 class="card-title">Consulter les agences</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id=agenceTable>
                                        <thead class="text-primary">
                                            <th>Id</th>
                                            <th>Nom d'agence</th>
                                            <th>Chef d'agence</th>
                                            <th>Adresse</th>
                                            <th>Téléphone</th>
                                            <th scope="col" width="150px"></th>
                                        </thead>
                                        <tbody>

                                        </tbody>
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



<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#agenceTable').DataTable({
            // processing: true,
            serverSide: true,
            ajax: "{{ url('Agence') }}",
            language: {
                "url": "http://cdn.datatables.net/plug-ins/1.10.10/i18n/French.json"
            },
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'Agence',
                    name: 'Agence'
                },
                {
                    data: 'ChefAgence',
                    name: 'ChefAgence'
                },


                {
                    data: 'Adresse',
                    name: 'Adresse'
                },
                {
                    data: 'Tel',
                    name: 'Tel'
                },


                {
                    data: 'action',
                    name: 'action'
                }
            ]
        });
    });
</script>

<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/autofill/2.3.7/js/autoFill.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/autofill/2.3.7/js/dataTables.autoFill.min.js"></script>
<link href="https://cdn.datatables.net/autofill/2.3.7/css/autoFill.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>




@endsection