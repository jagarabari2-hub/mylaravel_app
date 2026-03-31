<?php

namespace App\Http\Controllers;

use App\Models\Depts;
use App\Models\Employs;
use App\Models\Logs;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Show the requested page dynamically based on the URL.
     *
     * @param  string  $page
     * @return \Illuminate\Views\Views
     */
    public function showPage($page)
    {
        if ($page == 'normal-tables') {
            $logs = Logs::paginate(10);
            return view($page, compact('logs'));
        }

        $data = [
            'depts' => Depts::all(),
            'employs' => Employs::all(),
            'logs' => Logs::all(),
        ];


        if (view()->exists($page)) {
            return view($page, $data);
        }

        return view('404');
    }
}
