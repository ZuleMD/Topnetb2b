<div class="modal fade text-left" id="default{{$apporteur->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Informations apporteur d'affaires </h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
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
                <button type="button" class="btn" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Fermer</span>
                </button>

            </div>
        </div>
    </div>
</div>