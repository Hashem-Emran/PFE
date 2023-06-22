<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use App\Models\Commande;
use App\Models\Produit;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $totalAllUser=User::count();
        $totalCategorie=Categorie::count();
        $totalProduit=Produit::count();
        $totalCommande=Commande::count();
        return view('livewire.dashboard')->with("info", $totalCommande)
        ->with("infoUsers", $totalAllUser)
        ->with("infoProduit", $totalProduit)
        ->with("infoCategorie", $totalCategorie);
    }
}
