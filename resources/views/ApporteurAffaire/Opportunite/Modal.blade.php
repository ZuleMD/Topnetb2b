<!-- Modal -->
<div class="modal fade" id="default{{$opportunite->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="default{{$opportunite->id}}">Information opportunités
                    @if((is_null($opportunite->MatriculeFiscal)))
                    (Ancien client)
                    @else
                    (Nouveau client)
                    @endif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if((is_null($opportunite->MatriculeFiscal)))

                <p>Code client: <strong>{{$opportunite->CodeClient}}</strong></p>
                <p>Raison sociale: <img src="{{asset('images')}}/{{$opportunite->RaisonSociale}}" class="table-user-thumb" alt="" width="200"></p>
                <p>Offre: <strong>{{$opportunite->Offre}}</strong></p>

                @else
                <p>Raison sociale: <img src="{{asset('images')}}/{{$opportunite->RaisonSociale}}" class="table-user-thumb" alt="" width="200"></p>
                <p>Matricule fiscal: <img src="{{asset('images')}}/{{$opportunite->MatriculeFiscal}}" class="table-user-thumb" alt="" width="200"></p>
                <p>Registre Commerce: <strong>{{$opportunite->RegistreCommerce}}</strong></p>
                <p>Nom: <strong>{{$opportunite->Nom}}</strong></p>
                <p>Prénom: <strong>{{$opportunite->Prenom}}</strong></p>
                <p>Adresse: <strong>{{$opportunite->Adresse}}</strong></p>
                <p>Téléphone: <strong>{{$opportunite->Tel}}</strong></p>
                <p>Cin gérant: <img src="{{asset('images')}}/{{$opportunite->CinGerant}}" class="table-user-thumb" alt="" width="200"></p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>