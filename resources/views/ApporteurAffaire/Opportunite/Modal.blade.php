<div class="modal fade text-left" id="default{{$opportunite->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Informations opportunités </h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>Raison sociale: <img src="{{asset('images')}}/{{$opportunite->RaisonSociale}}" class="table-user-thumb" alt="" width="200"></p>
                <p>Matricule fiscal: <img src="{{asset('images')}}/{{$opportunite->MatriculeFiscal}}" class="table-user-thumb" alt="" width="200"></p>
                <p>Cin gérant: <img src="{{asset('images')}}/{{$opportunite->CinGerant}}" class="table-user-thumb" alt="" width="200"></p>
                <p>Code client: <strong>{{$opportunite->CodeClient}}</strong></p>
                <p>Registre Commerce: <strong>{{$opportunite->RegistreCommerce}}</strong></p>
                <p>Nom: <strong>{{$opportunite->Nom}}</strong></p>
                <p>Prénom: <strong>{{$opportunite->Prenom}}</strong></p>
                <p>Adresse: <strong>{{$opportunite->Adresse}}</strong></p>
                <p>Téléphone: <strong>{{$opportunite->Tel}}</strong></p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Fermer</span>
                </button>

            </div>
        </div>
    </div>
</div>