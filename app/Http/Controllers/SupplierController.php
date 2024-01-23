<?php

namespace App\Http\Controllers;

use App\Models\Suppplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplierAll()
    {
        $supplierData = Suppplier::latest()->get();
        return \view('backend.suppliers.supplier-all', \compact('supplierData'));
    }
}
