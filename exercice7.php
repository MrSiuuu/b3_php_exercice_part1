<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/
class BankAccount {
    private float $balance;

    public function __construct(float $initialBalance) {
        $this->balance = $initialBalance;
        echo "Compte créé avec un solde initial de " . $this->balance . " €<br>";
    }

    public function deposit(float $amount): void {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Dépôt de " . $amount . " € effectué. Nouveau solde : " . $this->balance . " €<br>";
        } else {
            echo "Le montant du dépôt doit être positif.<br>";
        }
    }

    public function withdraw(float $amount): void {
        if ($amount > 0) {
            if ($amount <= $this->balance) {
                $this->balance -= $amount;
                echo "Retrait de " . $amount . " € effectué. Nouveau solde : " . $this->balance . " €<br>";
            } else {
                echo "Fonds insuffisants pour retirer " . $amount . " €. Solde actuel : " . $this->balance . " €<br>";
            }
        } else {
            echo "Le montant du retrait doit être positif.<br>";
        }
    }

    public function getBalance(): float {
        return $this->balance;
    }
}
$account = new BankAccount(1000);


$account->deposit(200);
$account->withdraw(500); 
$account->withdraw(800);
$account->deposit(-50);

?>
