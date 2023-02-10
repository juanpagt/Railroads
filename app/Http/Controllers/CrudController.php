<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NameCar;
use App\Models\Destination;
use App\Models\Receiver;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destination=Destination::with(['name_cars' =>function ($query)
        {
            $query->select('receivers.*','name_cars.*','receivers.nombre as receivers')
            ->join('receivers', 'receivers.id', '=', 'name_cars.receivers_id')
            ->orderByRaw("receivers.nombre = 'Old Dominion','FedEx','UPS' DESC ");
        }])
        ->orderBy('classification','ASC')
        ->get();
        $response=[];
        foreach ($destination as $destiny) {
            foreach ($destiny['name_cars'] as  $car) {
                array_push($response,[
                    'nombre'=>$car['nombre'],
                    'city'=>$destiny['city'],
                    'classification'=>$destiny['classification'],
                    'receiver'=>$car['receiver'],
                ]);
            }
        }

        return response()->json($response);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
