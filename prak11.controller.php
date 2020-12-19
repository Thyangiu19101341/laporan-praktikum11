public function store(Request $request)
{
    //memproses data baru dari form create
    $msg = [
        'required' => 'wajib diisi',
        'numeric'  => 'di isi dengan data number'
    ];
    $aturan= [
        'txproduk' => 'required',
        'txHrgBeli'=> 'required|numeric',
        'txHrgJual'=>  'required|numeric',
        'txQTY' => 'required|numeric',
        'txkategori' => 'required|numeric',
    ];
    $this->validate($request,$aturan,$msg);
    produks::create([
        'namaproduk' => $request->txproduk,
        'harga_beli' =>$request->txHrgBeli,
        'harga_jual' => $request->txHrgJual,
        'qty'=>$request->txQTY,
        'id_kat'=> $request->txkategori,
    ]);
    return redirect()->route('prak11.index');
}