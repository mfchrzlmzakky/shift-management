<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class MainController
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('index');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }

  public function cetak_pdf()
  {
    $pdf = PDF::loadview('cetak_pdf', ['pegawai' => 'ya']);
    return $pdf->download('jadwal-shift.pdf');
  }
}
