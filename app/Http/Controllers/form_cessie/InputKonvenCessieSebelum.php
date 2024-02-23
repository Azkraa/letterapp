<?php


namespace App\Http\Controllers\form_cessie;

use Illuminate\Http\Request;
use App\Models\KonvenCessieNumbers;
use App\Models\KonvenCessieSebelum;
use App\Http\Controllers\Controller;

class InputKonvenCessieSebelum extends Controller
{
    public function index()
    {
        $newCode = $this->generateCode();
        return view('content.form-input.input-konven-cessie-sebelum', ['newCode' => $newCode]);
    }

    public function create()
    {
        return view('content.form-input.input-konven-cessie-sebelum');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggaldibuat' => 'required',
            'namadebitur' => 'required',
            'nomorperjanjiankredit' => 'required',
            'tanggalperjanjian' => 'required|',
            'alamatdebitur' => 'required',
            'tanggalpembukuanbank' => 'required|',
            'pokok' => 'required',
            'denda' => 'required',
            'bunga' => 'required',
            'lainlain' => 'required',
            'cpmenangani' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'tanggaltenggatwaktu' => 'required',
            'privateofficer' => 'required',
            'privatedphead' => 'required',
        ]);

        $konven_cessie_sebelums = new KonvenCessieSebelum();
        $konven_cessie_sebelums->tanggaldibuat = $request->tanggaldibuat;
        $konven_cessie_sebelums->nomorsurat = $request->nomorsurat . $this->generateCode();
        $konven_cessie_sebelums->namadebitur = $request->namadebitur;
        $konven_cessie_sebelums->nomorperjanjiankredit = $request->nomorperjanjiankredit;
        $konven_cessie_sebelums->tanggalperjanjian = $request->tanggalperjanjian;
        $konven_cessie_sebelums->alamatdebitur = $request->alamatdebitur;
        $konven_cessie_sebelums->tanggalpembukuanbank = $request->tanggalpembukuanbank;
        $konven_cessie_sebelums->pokok = $request->pokok;
        $konven_cessie_sebelums->denda = $request->denda;
        $konven_cessie_sebelums->bunga = $request->bunga;
        $konven_cessie_sebelums->lainlain = $request->lainlain;
        $konven_cessie_sebelums->cpmenangani = $request->cpmenangani;
        $konven_cessie_sebelums->email = $request->email;
        $konven_cessie_sebelums->phone = $request->phone;
        $konven_cessie_sebelums->tanggaltenggatwaktu = $request->tanggaltenggatwaktu;
        $konven_cessie_sebelums->privateofficer = $request->privateofficer;
        $konven_cessie_sebelums->privatedphead = $request->privatedphead;
        if ($konven_cessie_sebelums->save())
            return redirect('/print_konven_cessie_sebelum')->with('targetBlank', true);
    }

    public function print()
    {
        $konven_cessie_sebelums = KonvenCessieSebelum::latest()->get()->first();
        $konven_cessie_numbers = KonvenCessieNumbers::latest()->get()->first();
        return view('content.form-input.result-konven-cessie-sebelum', compact('konven_cessie_sebelums', 'konven_cessie_numbers'));
    }

    public function generateCode()
    {
        // Function to convert Arabic number to Roman numerals
        function arabicToRoman($number)
        {
            $map = [
                'M' => 1000,
                'CM' => 900,
                'D' => 500,
                'CD' => 400,
                'C' => 100,
                'XC' => 90,
                'L' => 50,
                'XL' => 40,
                'X' => 10,
                'IX' => 9,
                'V' => 5,
                'IV' => 4,
                'I' => 1,
            ];

            $result = '';

            foreach ($map as $roman => $arabic) {
                while ($number >= $arabic) {
                    $result .= $roman;
                    $number -= $arabic;
                }
            }

            return $result;
        }

        // Get the last used number and year from the database
        $lastTemplate = KonvenCessieNumbers::latest()->first();
        $currentNumber = 1;
        $currentYear = date('Y'); // Set to the actual current year

        if ($lastTemplate) {
            $lastYear = date('Y', strtotime($lastTemplate->created_at));
            $currentNumber = ($currentYear == $lastYear) ? (explode('/', $lastTemplate->imnumber)[0] + 1) : 1;
        }

        // Get the current month after the potential assignment
        $currentMonth = date('n');

        // Convert the numeric month to Roman numerals
        $romanMonth = arabicToRoman($currentMonth);

        // Generate the code
        $code = "{$currentNumber}/CPMS/Surat-Pemberitahuan/{$currentYear}";

        return $code;
    }
}
