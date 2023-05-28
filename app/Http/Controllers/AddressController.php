<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{



    public function saveAddress(Request $request, $id = null)
    {
        $request->validate([
            'way' => 'required|string|min:2|max:255',
            'number' => 'required|integer',
            'town' => 'required|string|min:2|max:255',
            'province' => 'required|string|min:2|max:255',
            'zipcode' => 'required|integer',
        ]);
    
        if ($id) {
            $address = Address::findOrFail($id);
        } else {
            $address = new Address();
        }

        $user = Auth::user()->id;
    
        $address->user_id = $user;
        $address->way = $request->input('way');
        $address->number = $request->input('number');
        $address->town = $request->input('town');
        $address->province = $request->input('province');
        $address->zipcode = $request->input('zipcode');
        $address->save();
    
        if ($id) {
            return redirect()->route('admin.table', $id)->with('success', __('Address updated.'));
        } else {
            return redirect()->route('admin.table')->with('success', __('Address created.'));
        }
    }
    
}