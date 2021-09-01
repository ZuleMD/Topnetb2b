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
                    <h4 class="card-title">Consulter les utilisateurs </h4>
                </div>
                <div class="card-content">
                    <div class="card-body">

                    </div>
                    <!-- table head dark -->
                    <!-- table head dark -->
                    <div class="table-responsive">
                        <table class="table table-bordered" id="usersTable">
                            <thead>
                                <tr>
                                    <th scope="col">Matricule</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Téléphone</th>
                                    <th scope="col">Cin/Passeport</th>
                                    <th scope="col">Agence</th>
                                    <th scope="col" width="150px"></th>

                                </tr>
                            </thead>
                            <tbody>
                                @if(count($users)>0)
                                @foreach($users as $user)
                                <!-- View Modal -->

                                @include('admin.CommercialPro.Modal')

                                @endforeach

                                @else
                                <td>Aucun utilisateur à afficher</td>
                                @endif

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
        var table = $('#usersTable').DataTable({
            // processing: true,
            serverSide: true,
            ajax: "{{ url('CommercialPro') }}",
            language: {
                "url": "http://cdn.datatables.net/plug-ins/1.10.10/i18n/French.json"
            },
            columns: [{
                    data: 'Matricule',
                    name: 'Matricule'
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
                    data: 'Email',
                    name: 'Email'
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
                    data: 'CinPasseport',
                    name: 'CinPasseport'
                },
                {
                    data: 'Agence',
                    name: 'Agence'
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