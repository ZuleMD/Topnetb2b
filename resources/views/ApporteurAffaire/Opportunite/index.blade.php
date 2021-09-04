@extends('admin.layouts.master')

@section('content')


<section class="section">
    <div class="row" id="table-head">
        @if(Session::has('message'))
        <div class="alert bg-success alert-success text-white" role="alert">
            {{Session::get('message')}}
        </div>
        @endif

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Consulter les opportunités </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                    </div>
                    <!-- table head dark -->
                    <!-- table head dark -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="opportuniteTable">
                            <thead>
                                <tr>

                                    <th scope="col">Id</th>
                                    <th scope="col">Code client</th>
                                    <th scope="col">Registre Commerce</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Offre</th>
                                    <th scope="col" width="150px"></th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach($opportunites as $opportunite)
                                <!-- View Modal -->

                                @include('ApporteurAffaire.Opportunite.Modal')

                                @endforeach



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#opportuniteTable').DataTable({
            // processing: true,
            serverSide: true,
            ajax: "{{ url('Opportunite') }}",
            language: {
                "url": "http://cdn.datatables.net/plug-ins/1.10.10/i18n/French.json"
            },
            order: [
                [0, "asc"]
            ],
            columns: [{
                    data: 'id',
                    name: 'id'
                }, {
                    data: 'CodeClient',
                    name: 'CodeClient'
                },

                {
                    data: 'RegistreCommerce',
                    name: 'RegistreCommerce'
                },

                {
                    data: 'Nom',
                    name: 'Nom'
                },
                {
                    data: 'Prenom',
                    name: 'Prenom'
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
                    data: 'Offre',
                    name: 'Offre'
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
<style>
    footer {

        bottom: 0;
        position: fixed;

    }
</style>