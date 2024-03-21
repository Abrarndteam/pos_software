<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\orderDetail;
use App\Model\productCost;
use App\Model\Expense;
class adminController extends Controller
{
    function addProdCost()
    {
        $productcost = productCost;
        $productcost->prodinfo = $req->prodinfo;
        $productcost->cost = $req->cost;
        return redirect('');
    }

    function addOrderDetail()
    {
        $orderdetail->name= $req->name;
        $orderdetail->address= $req->address;
        $orderdetail->contact= $req->contact;
        $orderdetail->city= $req->city;
        $orderdetail->prodinfo= $req->prodinfo;
        $orderdetail->amount= $req->amount;
        $orderdetail->track= $req->track;
        return redirect('');
    }

    function addExpDetail()
    {
        $expense->expdetail = $req->expdetail;
        $expense->expcost = $req->expcost;
        return redirect('');
    }

    function listOrder()
    {
        $data = order();

        return view('', compact('data'));
    }

    function listProd()
    {
        $data = product();

        return view('', compact('data'));
    }

    function listExp()
    {
        $data = Expense();

        return view('', compact('data'));
    }

    function delete()
    {
        $data= Expense();
        $data->delete();
        return redirect('/');
    }

    function delete()
    {
        $data= orderDetail::find();
        $data->delete();
        return redirect('/');
    }

    function deletet()
    {
        $data->delete();
        return redirect('productlist');
    }
}
