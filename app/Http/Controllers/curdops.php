<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hospital;
class curdops extends Controller
{
    
    public function __construct()
    {
         $hospital = new hospital;
        
    }
    // ------ show List of dataset ------ //
    function lists(Request $res){
                 $hospital =new hospital;
                $data = $hospital->get();
                return view('index',['list'=>$data,'form'=>'false']);    
    }
    // ------ End ------ //

    // ------ Delete the records ------ //
    function delete(Request $res){
        $hospital =new hospital;
        $data = $hospital->where('id','=', $res->id)->delete();
        return redirect('index');
        echo "<script>alert('Delete Successfully')</script>";
    }
    // ------ End ------ //

    // ------ for show and form of update and add new records ------ //
    function edit(Request $res){
        $hospital =new hospital;
        $data = $hospital->get();
        if($res->id==='new'){
            return view('index',['list'=>$data, 'data_edit'=>'','form'=>'true','formType'=>'AddNew']);
        }
        else{
        $data_edit = $hospital->where('id','=', $res->id)->get();
        return view('index',['list'=>$data, 'data_edit'=>$data_edit,'form'=>'true','formType'=>'Update']);    
        }
    }
    // ------ End ------ //

    // ------ Upadate and Add New Records ------// 
    function update(Request $res){
        $hospital =new hospital;

        $validated = $res->validate([
            'hospital_id' => 'required|numeric',
            'domestic_intimation_to' => 'required',
            'di_cc'=>'required|max:255',
            'di_bcc'=>'required',
            'de_email'=>'required|email',
            'assignee_group'=>'required'
        ]);

       $data =  $hospital->updateOrInsert(
            ['id'=>$res->id],
            ['hospital_id' => $res->hospital_id,
            'domestic_intimation_to'=>$res->domestic_intimation_to,
            'di_cc'=>$res->di_cc,
            'di_bcc'=>$res->di_bcc,
            'de_email'=>$res->de_email,
            'assignee_group'=>$res->assignee_group]
        );
        echo '<script>alert("DataUpdate Successfully")</script>';
        return redirect('index');        
    }
    // ------ End ------ //


}