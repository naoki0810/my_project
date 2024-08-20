<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    public function index( Request $request )
    {
      $records = DB::connection('mysql')->select("select * from users");
      $name = $records[0]->name;

      // $insertResult = DB::connection('mysql')->insert("insert into users (id,email,name,password) values (null,'sample@example.com','山田花子','12345')");
      $deleteResult = DB::connection('mysql')->delete("delete from users where name = '古宮直樹'");

      dd( $deleteResult );

      return view("sample/index");
    }
} 