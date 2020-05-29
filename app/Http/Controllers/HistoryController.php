<?php

namespace Bulkly\Http\Controllers;

use Bulkly\BufferPosting;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HistoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // get campaign Cookie
        $campaign_cookie = \Cookie::get('campaign');
        if (!$campaign_cookie) {
            $this->middleware('auth');
            $this->middleware('confirmed');
            //$this->middleware('billing');
        }
    }
    public function index()
    {
        return view('pages.history');
    }
    public function historyGetAPI()
    {
        $bufferPosting = BufferPosting::with([
            'groupInfo', 'accountInfo'
        ])->paginate(10);

        return response()->json($bufferPosting, Response::HTTP_OK);
    }
}
