<?php
$produit1 = ["nom" => "Chaussures", "prix" => 50, "quantite" => 1];
$produit2 = ["nom" => "T-shirt", "prix" => 20, "quantite" => 3];
$produit3 = ["nom" => "Casquette", "prix" => 15, "quantite" => 2];

function calculerSousTotal($produit) {
    return $produit['prix'] * $produit['quantite'];
}

$sous_total1 = calculerSousTotal($produit1);
$sous_total2 = calculerSousTotal($produit2);
$sous_total3 = calculerSousTotal($produit3);

echo "Le sous-total pour les " . $produit1['nom'] . " est de " . $sous_total1 . " €.<br>";
echo "Le sous-total pour les " . $produit2['nom'] . " est de " . $sous_total2 . " €.<br>";
echo "Le sous-total pour les " . $produit3['nom'] . " est de " . $sous_total3 . " €.<br>";

$total_panier = $sous_total1 + $sous_total2 + $sous_total3;
echo "Le montant total du panier sans réduction est de " . $total_panier . " €.<br>";

if ($total_panier > 50) {
    $total_apres_reduction = $total_panier * 0.9;
    echo "Le montant total après réduction de 10% est de " . $total_apres_reduction . " €.<br>";
} else {
    $total_apres_reduction = $total_panier;
    echo "Aucune réduction appliquée.<br>";
}

echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Sous-total</th>
        </tr>
        <tr>
            <td>{$produit1['nom']}</td>
            <td>{$produit1['prix']} €</td>
            <td>{$produit1['quantite']}</td>
            <td>{$sous_total1} €</td>
        </tr>
        <tr>
            <td>{$produit2['nom']}</td>
            <td>{$produit2['prix']} €</td>
            <td>{$produit2['quantite']}</td>
            <td>{$sous_total2} €</td>
        </tr>
        <tr>
            <td>{$produit3['nom']}</td>
            <td>{$produit3['prix']} €</td>
            <td>{$produit3['quantite']}</td>
            <td>{$sous_total3} €</td>
        </tr>
        <tr>
            <td colspan='3'>Total sans réduction</td>
            <td>{$total_panier} €</td>
        </tr>
        <tr>
            <td colspan='3'>Total avec réduction</td>
            <td>{$total_apres_reduction} €</td>
        </tr>
      </table>";
?>
