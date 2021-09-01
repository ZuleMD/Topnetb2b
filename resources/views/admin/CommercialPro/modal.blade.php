<div class="modal fade text-left" id="default{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Informations utilisateur </h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p><img src="{{asset('images')}}/{{$user->Image}}" class="table-user-thumb" alt="" width="200"></p>
                <p class="text-white bg-info">Rôle: {{$user->role->Nom}}</p>
                <p>Nom complet: <strong>{{$user->Nom}}</strong></p>
                <p>Email: <strong>{{$user->Email}}</strong></p>
                <p>Adresse: <strong>{{$user->Adresse}}</strong></p>
                <p>Matricule: <strong>{{$user->Matricule}}</strong></p>
                <p>Téléphone: <strong>{{$user->Tel}}</strong></p>
                <p>Agence: <strong>{{$user->Agence}}</strong></p>
                <p>N°cin/N°passeport: <strong>{{$user->CinPasseport}}</strong></p>

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