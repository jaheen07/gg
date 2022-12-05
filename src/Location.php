<?php

namespace Iox\Locationist;

class Location{


    //this method is for getting users lattitude and longitude.
    public function get_latt_long(){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $result = curl_exec($ch);
        $result = json_decode($result);

        if($result->status == 'success'){
            return $result;
        }
    }

    // this method is for getting user's location on map using lattitude and longitude.
    public function get_location($lat,$long){
        $lt = $lat.','.$long;
        $url = "https://www.google.com/maps/place/".$lt;
        return $url;
        }
}