<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        // return view('index');
        $data = [
            "title" => "Dashboard"
        ];
        return view('oop-hnf/000', $data);
    }
    public function oop1()
    {
        $data = [
            "title" => "OOP1"
        ];
        return view('oop-hnf/OOP1_ClassAndObject', $data);
    }
    public function oop2()
    {
        $data = [
            "title" => "OOP2"
        ];
        return view('oop-hnf/OOP2_ConstructFunction', $data);
    }
    public function oop3()
    {
        $data = [
            "title" => "OOP3"
        ];
        return view('oop-hnf/OOP3_Inheritance', $data);
    }
    public function oop32()
    {
        $data = [
            "title" => "OOP32"
        ];
        return view('oop-hnf/OOP3_Inheritance_2', $data);
    }
    public function oop4()
    {
        $data = [
            "title" => "OOP4"
        ];
        return view('oop-hnf/OOP4_FunctionOverriding', $data);
    }
    public function oop5()
    {
        $data = [
            "title" => "OOP5"
        ];
        return view('oop-hnf/OOP5_AccessModifierPublic', $data);
    }
    public function oop6()
    {
        $data = [
            "title" => "OOP6"
        ];
        return view('oop-hnf/OOP6_AccessModifierPrivate', $data);
    }
    public function oop7()
    {
        $data = [
            "title" => "OOP7"
        ];
        return view('oop-hnf/OOP7_AccessModifierPrivate2', $data);
    }
    public function oop8()
    {
        $data = [
            "title" => "OOP8"
        ];
        return view('oop-hnf/OOP8_AccessModifierProtected', $data);
    }
    public function oopdm()
    {
        $data = [
            "title" => "OOP Dasar Manusia"
        ];
        return view('oop-hnf/OOP_Dasar_Manusia', $data);
    }
    public function oopdmi()
    {
        $data = [
            "title" => "OOP Dasar Manusia Inheritance"
        ];
        return view('oop-hnf/OOP_Dasar_Manusia_Inheritance', $data);
    }
    public function oopbs1()
    {
        $data = [
            "title" => "OOP Buatan Sendiri 1"
        ];
        return view('oop-sendiri/oopSendiri1', $data);
    }
    public function oopbs2()
    {
        $data = [
            "title" => "OOP Buatan Sendiri 2"
        ];
        return view('oop-sendiri/oopSendiri2', $data);
    }
    public function oopbs3()
    {
        $data = [
            "title" => "OOP Buatan Sendiri 3"
        ];
        return view('oop-sendiri/oopSendiri3', $data);
    }
    public function oopbs4()
    {
        $data = [
            "title" => "OOP Buatan Sendiri 4"
        ];
        return view('oop-sendiri/oopSendiri4', $data);
    }
    public function login()
    {
        // $data = [
        //     "title" => "OOP Buatan Sendiri 4"
        // ];
        return view('templates/login');
    }
}
