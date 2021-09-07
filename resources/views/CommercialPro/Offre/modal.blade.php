<!-- Modal -->
<div class="modal fade" id="default{{$offre->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="default{{$offre->id}}">Informations Pack/Offre Commission

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <p>Référence offre: <strong>{{$offre->RefOffre}}</strong></p>
                <p>Référence produit: <strong>{{$offre->RefProduit}}</strong></p>
                <p>Montant commission: <strong>{{$offre->MontantCommission}}</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>