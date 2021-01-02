<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Exports\ContactsExport;
use Maatwebsite\Excel\Facades\Excel;

class MyExportImportController extends Controller
{
    public function importExportView()
    {
        $contacts= Contact::all();
        return view('contact.list', compact('contacts'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new ContactsExport, 'contacts.xlsx');
    }
}
