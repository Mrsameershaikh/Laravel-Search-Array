<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Str;
use DB;
class BookController extends Controller
{
    public function store(Request $req)
    {   
        $book=new Book();
        $book->books=strtolower($req['books']);
        
        return $book;
        // $book->save();
        // return response(["data stored"]);
    }

    public function view($name1,$name2)
    {
        
        $bookExist1=Book::query()
        ->whereJsonContains('books', $name1)->get();    

        $bookExist2=Book::query()
        ->whereJsonContains('books', $name2)->get();
        return [$bookExist1,$bookExist2];


    }

    public function dynamicView(Request $req)
    {
        
        $array=$req->data;
        
        $d=[];
        
        for ($i=0; $i <=count(array($array)); $i++) { 
           
            $helper=$array[$i];
            
            $bookExist=Book::query()                  
            ->whereJsonContains('books', $helper)->get(); //where clause to find the array/json data in table
        
            foreach($bookExist as $id){
                array_push($d,$id);
            }
        }
        return $d;
    }
                             
           
           
            
        
        
            
    

}
