<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;
// use App\Models\Member;
class DeviceController extends Controller
{
    //
   
    // function list($id=null){

    //     // $members = Member::all();
    //     // $devices = Device::find($id);
    //     // return $devices;

    //     return $id?Device::find($id):Device::all();
    // }

    //    ************** // to find name from table *****************

         //function listname(Device $key=null){

        //     // $members = Member::all();
        //     // $devices = Device::find($id);
        //     // return $devices;
    
            //return $key?Device::find($key):Device::all();
         //}

         function add(Request $req)
         {
            $device= new Device;
            $device->name=$req->name;
            $device->member_id=$req->member_id;
            $result=$device->save();
            if($result)
            {
                return ["result"=>"data has been done"];
            }
            else{
                return ["result"=>"data has been failed"];

            }

            
         }

         function update(Request $req)
         {
            $device= Device::find($req->id);
            $device->name=$req->name;
            $device->member_id=$req->member_id;
            $result=$device->save();
            if($result)
            {
                return ["result"=>"data has been done"];
            }
            else{
                return ["result"=>"data has been failed"];

            }
         }



         function delete($id)
         {
            $device=Device::find($id);
            $result=$device->delete();
            if($result)
            {
            return ["Deleted"];
         }
         else{
            return ["Failed"];
         }
    }



    function search($name)
    {
        
        $result= Device::where("name","like", "%" .$name."%")->get();
        if(count($result)>0)
        {
            return $result;
        }
        else{
        return ["message"=>"No data in database"];
        }
    
}


//after applying validator it showing error without validator it is running

// function testdata(Request $req)
// {
//     $rules=array(
//         "member_id"=>"required |max:10",
//         "name"=>"required |max:10"
//     );
//     $validator= Validator::make($req->all().$rules);
//     if($validator->fails())
//     {
//         return $validator->errors();

//     }
//     else
//     {
//         $device= new Device;
//         $device->name=$req->name;
//         $device->member_id=$req->member_id;
//         $result=$device->save();
//         if($result)
//             {
//                 return ["result"=>"data has been done"];
//             }
//             else{
//                 return ["result"=>"data has been failed"];

//             }

//     }
    
// }
}