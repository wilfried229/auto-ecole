<?php

namespace App\Services;

use App\Models\Paiement;
use Fedapay\Fedapay;
use Fedapay\Transaction;
use Illuminate\Http\Request;
class FedaPayService {

    public const STATUT_PENDING  = "pending";
    public const STATUT_APPROVED  = "approved";
    public const STATUT_DECLINEE  = "Déclinée";
    public const STATUT_ANNULLE  = "Annulée";
    public const STATUT_REFUNDED = "Refusée";
    public const STATUT_TRANSFERRED = "Transférée";

    public function __construct() {
        $this->initFedayPayConfig();
    }


    public static function createTransaction(Request $request){
  
            
       ///$fedapayTransaction = new  \FedaPay\Transaction();
       $fedapayTransaction = \FedaPay\Transaction::create([
        "description" => "Transaction for wilfriedhoundjetin@gmail.com",
        "amount" => $request->amount,
        "currency" => ["iso" => "XOF"],
        "customer" => [
            "firstname" => "Wilfried",
            "lastname" => "Houndjetin",
            "email" => "wilfriedhoundjetin@gmail.com",
            "phone_number" => [
                "number" => $request->tel,
                "country" => "bj"
            ]]
       ]);
      
        $token = $fedapayTransaction->generateToken()->token;
        $mode = 'mtn'; // 'mtn', 'moov', 'mtn_ci', 'moov_tg'
        $fedapayTransaction->sendNowWithToken($mode, $token);
 
        return $fedapayTransaction;

    }


    public static function checkedTransaction($idTransaction){

        $transaction = \FedaPay\Transaction::retrieve($idTransaction);
        if ($transaction->status == "approved") {
            echo "Paiement effectué";
        }

        return $transaction->status;
    }


     /**
     * @return void
     */
    public function initFedayPayConfig(): void
    {
        \FedaPay\FedaPay::setApiKey('sk_live_HOuTNyb-FdRsJlL4OYNUlhDl');
        /* Précisez si vous souhaitez exécuter votre requête en mode test ou live */
        \FedaPay\FedaPay::setEnvironment('live');

    
    }
}