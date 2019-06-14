<?php

namespace App\Http\Controllers;

use App\Models\Msg;
use Illuminate\Http\Request;

class MsgsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {

        return view('add');
    }
    public function index()
    {
        //
    }
    public function addPost(Request $request)
    {
        $data = [
            'title' => $request['title'],
            'author' => $request['author'],
            'content' => $request['content']
        ];

        $con = mysql_connect("127.0.0.1","Homestead","secret");
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }
        if (mysql_query("CREATE DATABASE msg",$con))
        {
            echo "Database created";
        }
        else
        {
            echo "Error creating database: " . mysql_error();
        }
        // Create table in my_db database
        mysql_select_db("msg", $con);
        $sql = "CREATE TABLE msg 
(
    title varchar,
    author varchar,
    content blob
)";
        if (!mysql_query($data,$con))
        {
            die('Error: ' . mysql_error());
        }
        echo "1 record added";

        mysql_query($sql,$con);
        mysql_close($con);
    return ‘添加数据成功！’;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function show(Msg $msg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function edit(Msg $msg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Msg $msg)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Msg  $msg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Msg $msg)
    {
        //
    }
}
