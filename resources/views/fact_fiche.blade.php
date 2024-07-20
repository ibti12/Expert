<form action="{{ route('references.store') }}" method="POST">
    @csrf

   
   
    <div>
        <label for="num_devis">Numéro de facture </label>
        <input type="text" name="num_fact" required>
    </div>

    <div id="references-container">
        <div class="reference">
        <div>
                <label for="ref">Référence</label>
                <input type="text" name="ref[]" required>
            </div>
            <div>
                <label for="prix_unitaire">Prix Unitaire</label>
                <input type="number" name="prix_unitaire[]" step="0.01" required>
            </div>
            <div>
                <label for="quantité">Quantité</label>
                <input type="number" name="quantité[]" required>
            </div>
            
        </div>
    </div>
    <button type="button" onclick="addReference()">Ajouter une référence</button>
    <button type="submit">Soumettre</button>
</form>

<script>
    function addReference() {
        const container = document.getElementById('references-container');
        const reference = document.querySelector('.reference');
        const clone = reference.cloneNode(true);
        container.appendChild(clone);
    }
</script>
