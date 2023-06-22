<?php

namespace App\Http\Livewire;

// use App\Models\Commande;
// use App\Models\User;
// use Illuminate\Console\Command;
use Livewire\Component;
use App\Models\Facture as Commandes;

class CommandeList extends Component
{
    public function render()
    {
        $commade=Commandes::paginate(2);
        return view('livewire.list',);
    }
}
   // [
    //     'commande'=>Commandes::latest()->paginate(3)
    // ]

    // ['commade'=>$commade]