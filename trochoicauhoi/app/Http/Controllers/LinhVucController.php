<?php

namespace App\Http\Controllers;

use App\CauHoi;
use App\LinhVuc;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Requests\LinhVucRequest;

class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsLinhvuc = LinhVuc::all();
        return view('ds-linh-vuc',compact('dsLinhvuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LinhVucRequest $request)
    {
        //Alert::alert('Title', 'Message', 'Type');
        $linhvuc = new LinhVuc;
        $linhvuc->ten_linh_vuc = $request->input('ten_linh_vuc');
        $linhvuc->save();    
        alert()->success('Thêm lĩnh vực thành công !!', '');
        return redirect()->route('linhvuc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dsLinhvuc = LinhVuc::all();
        $dsLinhvuc2 = LinhVuc::find($id);
        //$user = Auth::user();
       //Alert::success('Success Title', 'Success Message');
        return view('ds-linh-vuc',compact('dsLinhvuc','dsLinhvuc2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LinhVucRequest $request, $id)
    {
        $linhvuc = LinhVuc::find($id);
        $linhvuc->ten_linh_vuc = $request->input('ten_linh_vuc');
        $linhvuc->save();
        alert()->success('','Cập nhật lĩnh vực thành công !!'); 
        return redirect()->route('linhvuc');
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
    public function Delete($id)
    {
        $ktRangBuoc = CauHoi::where('linh_vuc_id',$id)->get()->count();
        if( $ktRangBuoc > 0 )
        {
            $demCauHoi = CauHoi::where('linh_vuc_id',$id)->get()->count();
            alert()->error('Xóa lĩnh vực thất bại !!','Vui lòng xóa '.$demCauHoi.' câu hỏi sử dụng lĩnh vực này');
            return redirect()->route('linhvuc');
        }
        else
        {
            $linhvuc = LinhVuc::find($id);
            $linhvuc->delete();
            alert()->success('','Xóa lĩnh vực thành công !!');
            return redirect()->route('linhvuc');
        }
    }
    public function forceDelete($id)
    {
        $linhvuc = LinhVuc::onlyTrashed()->get()->find($id);
        $linhvuc->forceDelete();
        alert()->success('','Xóa thành công !!');
        return redirect()->route('linhvuc.thungrac');
    }
     public function restore($id)
    {
        $linhvuc = LinhVuc::onlyTrashed()->get()->find($id);
        $linhvuc->restore();
        alert()->success('','Khôi phục thành công !!');
        return redirect()->route('linhvuc.thungrac');
    }
    public function onlyTrashed()
    {
        $dsLinhvuc = LinhVuc::onlyTrashed()->get();
        return view('linh-vuc-trashed',compact('dsLinhvuc'));   
    }
}
