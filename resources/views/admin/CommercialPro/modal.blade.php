<!-- Modal -->
<div class="modal fade" id="default{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="default{{$user->id}}">Informations utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><img src="{{asset('images')}}/{{$user->Image}}" class="table-user-thumb" alt="" width="200"></p>
                <p class="text-white bg-info">Rôle: {{$user->role->Nom}}</p>
                <p>Matricule: <strong>{{$user->Matricule}}</strong></p>
                <p>Nom: <strong>{{$user->Nom}}</strong></p>
                <p>Prénom: <strong>{{$user->Prenom}}</strong></p>
                <p>Email: <strong>{{$user->Email}}</strong></p>
                <p>Adresse: <strong>{{$user->Adresse}}</strong></p>
                <p>Téléphone: <strong>{{$user->Tel}}</strong></p>
                <p>Agence: <strong>{{$user->Agence}}</strong></p>
                <p>N°cin/N°passeport: <strong>{{$user->CinPasseport}}</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>