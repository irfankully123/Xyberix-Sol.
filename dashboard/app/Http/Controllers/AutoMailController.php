<?php

namespace App\Http\Controllers;

use App\Mail\SendNotification;
use App\Mail\TestTemplate;
use App\Models\AutoMail;
use App\Models\MailTemplate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;
use PhpOffice\PhpSpreadsheet\IOFactory;

class AutoMailController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Automail/AutomailIndex', [
            'template' => MailTemplate::latest()->firstOrFail()
        ]);
    }

    public function import(Request $request): void
    {
        $request->validate([
            'excel' => 'required|mimes:xlsx',
        ]);

        $file = $request->file('excel');
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

    public function mailTemplateTesting(Request $request): void
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
        ]);

        Mail::to($request->input('email'))->send(new TestTemplate());


    }

    public function updateTemplate(Request $request): RedirectResponse
    {
        $request->validate([
            'subject' => 'required',
            'template'=>'required'
        ]);

        MailTemplate::create([
            'subject' => $request->input('subject'),
            'template' => $request->input('template')
        ]);

       return to_route('automail.index')->with([
           'template' => MailTemplate::latest()->firstOrFail()
       ]);
    }
}
