<?php

namespace App\Imports;

use App\Models\Sket;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class SketImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Sket([
            'nama' => $row['nama'],
            'npwp' => $row['npwp'],
            'no_sket' => $row['no_sket'],
            'penerima_hak' => $row['penerima_hak'],
            'tanggal' => $row['tanggal'],
            'nominal' => $row['nominal'],
            'status' => 'belum digunakan'
        ]);
    }

    public function rules(): array
    {
        return [
            'no_sket' => 'unique:sket,no_sket'
        ];
    }

    // public function customValidationMessages()
    // {
    //     return [
    //         'no_sket.unique' => 'Import gagal, terdapat data nomor sket yang sudah digunakan',
    //     ];
    // }
}
