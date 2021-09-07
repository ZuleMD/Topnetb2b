<!-- Modal -->
<div class="modal fade" id="default{{$apporteur->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="default{{$apporteur->id}}">Informations apporteur d'affaires

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p><img src="{{asset('images')}}/{{$apporteur->Image}}" class="table-user-thumb" alt="" width="200"></p>
                <p class="text-white bg-info">Rôle: {{$apporteur->role->Nom}}</p>
                <p>Matricule fiscal: <strong>{{$apporteur->MatriculeFiscal}}</strong></p>
                <p>Code client: <strong>{{$apporteur->CodeClient}}</strong></p>
                <p>Raison sociale: <strong>{{$apporteur->RaisonSociale}}</strong></p>
                <p>Registre Commerce: <strong>{{$apporteur->RegistreCommerce}}</strong></p>
                <p>Email: <strong>{{$apporteur->Email}}</strong></p>
                <p>Adresse: <strong>{{$apporteur->Adresse}}</strong></p>
                <p>Téléphone: <strong>{{$apporteur->Tel}}</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>