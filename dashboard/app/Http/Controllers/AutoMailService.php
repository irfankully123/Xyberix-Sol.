<?php

namespace App\Http\Controllers;

use App\Models\AutoMail;
use Illuminate\Support\Str;
use App\Models\MailTemplate;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use PhpOffice\PhpSpreadsheet\IOFactory;


class AutoMailService extends Controller
{

    public function importForm(): View
    {
        return view('import-form',);
    }


    public function import(Request $request) :void
    {
        $request->validate([
            'file' => 'required|mimes:xlsx',
        ]);

        $file = $request->file('file');
        $spreadsheet = IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();

        $data = [];

        foreach ($sheet->getRowIterator() as $row) {
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);

            $rowData = array_filter(iterator_to_array($cellIterator), function ($value) {
                return $value !== null;
            });

            $data[] = array_values($rowData);
        }

        array_shift($data);

        $chunks = array_chunk($data, 1000);

        foreach ($chunks as $chunk) {
            $insertData = [];
            foreach ($chunk as $row) {
                $insertData[] = [
                    'id' => Str::uuid()->toString(),
                    'name' => $row[0],
                    'email' => $row[1],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            AutoMail::insert($insertData);
        }
    }

}
