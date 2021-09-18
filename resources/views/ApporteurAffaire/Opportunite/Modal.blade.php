<!-- Modal -->
<div class="modal fade" id="default{{$publish->opportunite->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="default{{$publish->opportunite->id}}">Information opportunités
                    @if((is_null($publish->opportunite->MatriculeFiscal)))
                    (Ancien client)
                    @else
                    (Nouveau client)
                    @endif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if((is_null($publish->opportunite->MatriculeFiscal)))

                <p>Raison sociale: <img src="{{asset('images')}}/{{$publish->opportunite->RaisonSociale}}" class="table-user-thumb" alt="" width="200"></p>

                @else


                <p>Raison sociale: <img src="{{asset('images')}}/{{$publish->opportunite->RaisonSociale}}" class="table-user-thumb" alt="" width="200"></p>

                <p>Matricule Fiscal <img src="{{asset('images')}}/{{$publish->opportunite->MatriculeFiscal}}" class="table-user-thumb" alt="" width="200"></p>

                <p>Registre Commerce: <img src="{{asset('images')}}/{{$publish->opportunite->RegistreCommerce}}" class="table-user-thumb" alt="" width="200"></p>


                <p>Cin gérant: <img src="{{asset('images')}}/{{$publish->opportunite->CinGerant}}" class="table-user-thumb" alt="" width="200"></p>

                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>