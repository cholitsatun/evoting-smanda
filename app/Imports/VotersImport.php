<?php

namespace App\Imports;

use App\Voter;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;

class VotersImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        
        unset($rows[0]);
        // dd($rows);
        foreach ($rows as $row) { 
            if ($row[2] != null) {
                $password = $this->randomString();
                $pemilih = Voter::create([
                    'nisn' => $row[2],
                    'name' => $row[1],
                    'class' => $row[3],
                    'password' => Hash::make($password),
                 ]);
            }   
        }
    }

    function randomString($length = 6) {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
}

}
