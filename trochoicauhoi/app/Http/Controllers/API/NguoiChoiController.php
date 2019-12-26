<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NguoiChoi;
use Illuminate\Support\Facades\Hash;

class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function layDSNguoiChoi(Request $request)
    {
        $page = $request->query('page',1);
        $limit = $request->query('limit',25);

        if(auth('api')->check())
        {
            $listNguoiChoi = NguoiChoi::orderBy('diem_cao_nhat','desc')->skip(($page-1)*$limit)->take($limit)->get();
        return response()->json(
            [
                'total'=>NguoiChoi::count(),
                'data'=>$listNguoiChoi
            ]);
        }
        return response()->json(['success'=>false, 'message'=>'Token is required']);
        
    }
    public function layNguoiChoi($id)
    {
        if(auth('api')->check())
        {
            $nguoiChoi = NguoiChoi::find($id);
            $result = ['success'=>true,'data'=>$nguoiChoi];
            return response()->json($result);
        }
        return response()->json(['success'=>false, 'message'=>'Token is required']);
    } 
    public function top10()
    {
        if(auth('api')->check())
        {
            $top10 = NguoiChoi::orderBy('diem_cao_nhat','desc')->get();
        
            $result = ['success'=>true,'data'=>$top10];
            return response()->json($result);
        }
        return response()->json(['success' => false, 'message' => 'Token is required']);
        
    }
    public function PlayerHistory($id)
    {
        $playerhistory = LuotChoi::where('nguoi_choi_id',$id)->get();
        if ( $playerhistory != null ) 
            return response()->json([
                'success'=>true,
                'data'=>$playerhistory;
            ]);
        return response()->json(['success'=>false]);
    }
    // public function DangNhap(Request $request)
    // {
    //     $thongtin = $request->only(['ten_dang_nhap','mat_khau']);
    //     $nguoichoi = NguoiChoi::where('ten_dang_nhap',$thongtin['ten_dang_nhap'])->first();
    //     if( $nguoichoi == null )
    //     {
    //        $result = ['success'=>false];
    //        return response()->json($result);
    //     }
    //     if( !Hash::check($thongtin['mat_khau'], $nguoichoi->mat_khau ))
    //     {
    //         $result = ['success'=>false];
    //         return response()->json($result);
    //     }
    //     $result = ['success'=>true];
    //     return response()->json($result);
    // }
}
