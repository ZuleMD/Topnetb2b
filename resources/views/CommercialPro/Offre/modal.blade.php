<div class="modal fade text-left" id="default{{$offre->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel1">Informations Pack/Offre Commission </h5>
                <button type="button" class="close rounded-pill" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <p>Référence offre: <strong>{{$offre->RefOffre}}</strong></p>
                <p>Référence produit: <strong>{{$offre->RefProduit}}</strong></p>
                <p>Montant commission: <strong>{{$offre->MontantCommission}}</strong></p>
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