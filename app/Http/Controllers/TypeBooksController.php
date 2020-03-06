<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeBooks;

class TypeBooksController extends Controller
{
    public function index(){
        //$typebooks = TypeBooks::all(); //แสดงข้อมูลทั้งหมด
        //$typebooks = TypeBooks::orderBy('id','desc')->get(); //เเสดงข้อมูลทั้งหมดเรียงจากมาไปน้อยโดยใช้id
        $count = TypeBooks::count(); //นับจำนวณเเถวทั้งหมด

        //แบ่งหน้า
        $typebooks = TypeBooks::paginate(3);

        return view('typebooks.index',[
            'typebooks' => $typebooks,
            'count' => $count
        ]);
    }
    public function  destroy($id){
        //TypeBooks::find($id)->delete();
        TypeBooks::destroy($id);
        return back();
    }
}
