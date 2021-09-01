<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;
use OwenIt\Auditing\Events\Auditing;
use App\Models\User;
use Yajra\DataTables\Facades\Datatables;

class AuditController extends Controller
{
    public function index(Request $request)
    {
        $audits = Audit::with('user')
            ->orderBy('created_at', 'desc')->get();

        return view('admin.history.audit',  compact('audits'));
    }
}
