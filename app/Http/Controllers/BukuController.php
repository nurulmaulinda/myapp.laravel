<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Buku;
use Validator;
use PDF;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_buku = DB::table('buku')
        ->join('pengarang', 'pengarang.id', '=', 'buku.idpengarang')
        ->join('penerbit', 'penerbit.id', '=', 'buku.idpenerbit')
        ->join('kategori', 'kategori.id', '=', 'buku.kategori_id')
        ->select('buku.*', 'pengarang.nama','penerbit.nama AS pen','kategori.nama AS kat')
        ->get();
        return view('buku/index',
            compact('ar_buku')
        );
    }

    public function cetak_pdf()
    {
    	$buku = Buku::all();
        //$buku = DB::table('buku')->get();
    	$pdf = PDF::loadview('buku.buku_pdf',['buku'=>$buku]);
    	return $pdf->download('laporan-buku-pdf');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //hanya u/ tampilkan form insert data
        return view ('buku/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty(request()->cover)){//---------insert data buku dengan cover-----------
        request()->validate(['cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
        $imageName = time().'.'.request()->cover->getClientOriginalExtension();
        request()->cover->move(public_path('img'), $imageName);
            
        DB::table('buku')->insert(
            [ 
                'isbn'=>$request->isbn,
                'judul'=>$request->judul,
                'tahun_cetak'=>$request->tahun_cetak,
                'stok'=>$request->stok,
                'idpenerbit'=>$request->penerbit,
                'idpengarang'=>$request->pengarang,
                'kategori_id'=>$request->kategori,
                //'cover'=>$request->cover,
                'cover'=>$imageName,        
            ]);
        }else{//---------insert data buku tanpa cover-----------
            DB::table('buku')->insert(
                [ 
                    'isbn'=>$request->isbn,
                    'judul'=>$request->judul,
                    'tahun_cetak'=>$request->tahun_cetak,
                    'stok'=>$request->stok,
                    'idpenerbit'=>$request->penerbit,
                    'idpengarang'=>$request->pengarang,
                    'kategori_id'=>$request->kategori,       
                ]);    
        }    
        //landing page
        return redirect('/buku');
        //return view('/buku',['data' => $request]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('buku')
        ->join('pengarang', 'pengarang.id', '=', 'buku.idpengarang')
        ->join('penerbit', 'penerbit.id', '=', 'buku.idpenerbit')
        ->join('kategori', 'kategori.id', '=', 'buku.kategori_id')
        ->select('buku.*', 'pengarang.nama','penerbit.nama AS pen','kategori.nama AS kat')
        ->where('buku.id','=', $id)
        ->get();
        return view('buku/show',
            compact('data')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //ambil 1 baris data yg mau diedit/dihapus
        $data = Buku::where('id',$id)->get();
        return view('buku/update',compact('data'));
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
        $data = Buku::where('id',$id)->get(); //panggil data buku yg mo diedit
        //die($data);exit;
        //looping data array di atas
        foreach ($data as $value) {
           $cover = $value->cover; 
        }
        //die($cover);exit;
        //hapus fisik file yg lama jika user ingin ubah cover buku 
        
        if(!empty(request()->cover) && !empty($cover)){
            unlink('img/'.$cover);   
        } 
        

        request()->validate([
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        if(!empty(request()->cover)){ //-------------ubah data buku beserta covernya----------
            $imageName = time().'.'.request()->cover->getClientOriginalExtension();
            request()->cover->move(public_path('img'), $imageName);
            
        DB::table('buku')->where('id',$request->id)->update(
            [ 
                'isbn'=>$request->isbn,
                'judul'=>$request->judul,
                'tahun_cetak'=>$request->tahun_cetak,
                'stok'=>$request->stok,
                'idpenerbit'=>$request->penerbit,
                'idpengarang'=>$request->pengarang,
                'kategori_id'=>$request->kategori,
                //'cover'=>$request->cover,
                'cover'=>$imageName,    
            ]);
        }else{//--------------ubah data buku tanpa covernya------------------        
        DB::table('buku')->where('id',$request->id)->update(
            [ 
                'isbn'=>$request->isbn,
                'judul'=>$request->judul,
                'tahun_cetak'=>$request->tahun_cetak,
                'stok'=>$request->stok,
                'idpenerbit'=>$request->penerbit,
                'idpengarang'=>$request->pengarang,
                'kategori_id'=>$request->kategori,
                //'cover'=>$request->cover,   
            ]);
        }        
        //landing page
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Buku::where('id',$id)->get();

        foreach ($data as $value){
            $cover = $value->cover;
        }
        if(!empty($cover)){
            unlink('img/'.$cover);
        }

        DB::table('buku')->where('id',$id)->delete();
        return redirect('/buku');
    }
 
}
