<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHinhApp;
use App\CauHinhDiemCauHoi;
use App\CauHinhTroGiup;
use App\Http\Requests\CauHinhAppRequest;
use App\Http\Requests\CauHinhDiemCauHoiRequest;
use App\Http\Requests\CauHinhTroGiupRequest;

class CauHinhController extends Controller
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
    public function CauHinhApp()
    {
        $dsCauHinhApp = CauHinhApp::find("1");
        return view('cau-hinh-app',compact('dsCauHinhApp'));
    }
    public function CauHinhDiemCauHoi()
    {
        $dsCauHinh = CauHinhDiemCauHoi::all();
        return view('cau-hinh-diem-cau-hoi',compact('dsCauHinh'));
    }
    public function showCauHinhDiemCauHoi($id)
    {
        $dsCauHinh = CauHinhDiemCauHoi::all();
        $CauHinh = CauHinhDiemCauHoi::find($id);
        return view('cau-hinh-diem-cau-hoi',compact('dsCauHinh','CauHinh'));
    }
    public function editCauHinhApp(CauHinhAppRequest $request)
    {
        $CauHinhApp = CauHinhApp::find("1");
        $CauHinhApp->co_hoi_sai = $request->input('co_hoi_sai');
        $CauHinhApp->thoi_gian_tra_loi = $request->input('thoi_gian_tra_loi');
        $CauHinhApp->save();
        alert()->success('','Cập nhật thành công !!'); 
        return redirect()->route('cauhinh.app');
    }
    public function editCauHinhDiemCauHoi(CauHinhDiemCauHoiRequest $request,$id)
    {
        $CauHinhDiem = CauHinhDiemCauHoi::find($id);
        $CauHinhDiem->thu_tu = $request->input('thu_tu');
        $CauHinhDiem->diem = $request->input('diem');
        $CauHinhDiem->save();
        alert()->success('','Cập nhật thành công !!'); 
        return redirect()->route('cauhinh.diem');
    }
    public function storeCauHinhDiemCauHoi(CauHinhDiemCauHoiRequest $request)
    {
        $CauHinhDiem = new CauHinhDiemCauHoi;
        $CauHinhDiem->thu_tu = $request->input('thu_tu');
        $CauHinhDiem->diem = $request->input('diem');
        $CauHinhDiem->save();
        alert()->success('','Thêm thành công !!'); 
        return redirect()->route('cauhinh.diem');
    }

}
