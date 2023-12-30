<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function show(Request $data){

            // printing data from input field name
        // print_r( $data->input('name') );

        // Different conditons
        // like has, hasAny, missing, whenHas, whenFilled
        // if( $data->has('name')){
        //     print_r( $data->input('name') );
        //     print_r('has name');
        // }else{ 
        //     print_r('no name');
        // }

        
        // validate method 
        // The function will terminated on the spot if the method is not validated. 
        // $validated = $data->validate([
        //     'name' => ['required','UpperCase'],
        //     'password' => 'required',
        //     // There are many rules like required, min etc need to brows it. 

        // // if not validate $errors variable will be assigned with the error type and message. 
        // ]);


        // Custom validation method using closure
        $validated = $data->validate([
                'name' => ['required',
                function($attribute, $value, $fail){
                    if($value === 'syal'){
                        $fail('Not a good error');
                    }
                }
            ],
    
                
       

        ]);

        print_r( "validated");
        return view('welcome');
    }
}
