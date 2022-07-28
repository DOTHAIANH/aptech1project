<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function showAll() {
        $hotelList = [];
        for($i=0;$i<10;$i++) {
            $hotelList[] = [
                'id_room' => 'R001',
                'type' => 'Xin xo'.$i,
                'floor' => 'Tang 1'.$i,
                'price' => '100'.$i,
                'hotel_name' => 'Hotel'.$i,
                'address' => 'address'.$i
            ];
        }

        return view('index')->with([
            'hotelList' => $hotelList
        ]);
    }

    public function showDetail() {
        $roomList = [];
        for($i=0;$i<10;$i++) {
            $roomList[] = [
                'id_room' => 'R001',
                'type' => 'Xin xo'.$i,
                'floor' => 'Tang 1'.$i,
                'price' => '100'.$i,
            ];
        }

        return view('detail')->with([
            'roomList' => $roomList
        ]);
    }
}
