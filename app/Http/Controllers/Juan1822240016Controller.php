<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class Juan1822240016Controller extends Controller
{

public function insert()
    {
    $result = DB::insert('insert into juan1822240016 (npm, nama_mahasiswa, tempat_lahir, tanggal_lahir,
    alamat, created_at) values (?, ?, ?, ?, ?, ?)', ['1822240010', 'Ahmad', 'Palembang', 
    '2000-07-25', 'Jl Tunas N0 09', now()]);
    dump($result);
    }
    //
public function update()
    {
    $result = DB::update('update juan1822240016 set nama_mahasiswa = "Juan", updated_at = now()
    where npm = ?', ['1822240016']);
    dump($result);
    }

public function delete()
    {
    $result = DB::delete('delete from juan1822240016 where npm = ?', ['1822240016']);
    dump($result);
    }

public function select()
    {
    $kampus = "Universitas Multi Data Palembang";
    $result = DB::select('SELECT * FROM juan1822240016');
    // dump($result);
    return view('mahasiswa.index', ['allmahasiswa'=> $result, 'kampus' => $kampus]);
    }

public function insertQb()
    {
        $result = DB::table('juan1822240016')->insert(
            [
                'npm' => '1822240009',
                'nama_mahasiswa' => 'Umar',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2001-01-01',
                'alamat' => 'Jl Sudirman',
                'created_at' => now()
            ]
        );
        dump($result);
    }

public function updateQb()
    {
        $result = DB::table('juan1822240016')
                ->where('npm', '1822240009')
                ->update(
                    [
                        'nama_mahasiswa' => 'usman',
                        'created_at' => now()
                    ]
        );
        dump($result);
    }

public function deleteQb()
    {
        $result = DB::table('juan1822240016')
                ->where('npm', '1822240009')
                ->delete();
        dump($result);
    }

public function selectQb()
    {
    $kampus = "Universitas Multi Data Palembang";
    $result = DB::table('juan1822240016')->get();
    // dump($result);
    return view('mahasiswa.index', ['allmahasiswa'=> $result, 'kampus' => $kampus]);
    }

    public function insertElq()
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->npm = '1822240005';
        $mahasiswa->nama_mahasiswa = 'Zainab';
        $mahasiswa->tempat_lahir = 'Bandung';
        $mahasiswa->tanggal_lahir = '2002-01-01';
        $mahasiswa->alamat = 'Jl Bambang Utoyo';
        $mahasiswa->save();
        dump($mahasiswa);
    }

    public function updateElq()
    {
        $mahasiswa = Mahasiswa::where('npm', '1822240005')->first();
        
        $mahasiswa->nama_mahasiswa = 'Khadijah';
        $mahasiswa->save();
        dump($mahasiswa);
    }

    public function deleteElq()
    {
        $mahasiswa = Mahasiswa::where('npm', '1822240005')->first();
        
        $mahasiswa->delete();
        dump($mahasiswa);
    }

    public function selectElq()
    {
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();
        //dump($allmahasiswa);
        $mahasiswa->delete();
        return view('mahasiswa.index', ['allmahasiswa'=> $mahasiswa, 'kampus' => $kampus]);
    }
}