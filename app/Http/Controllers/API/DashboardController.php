<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Model\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
		$all = $request->all();

		$validator = Validator::make($request->all(), [
			"start_date" => "required|date",
			"end_date" => "required|date",
		]);

		if ($validator->fails()) {

			$errors = $validator->errors();

			return response()->json([
				'status' => 400,
				'errors' => $errors->all()
			]);
		}

		$response = [];
		$start_date = $all['start_date'];
		$end_date = $all['end_date'];
		$date_range = [$start_date, $end_date];

		$transactions = Transaction::query()
									->selectRaw("count(case when status = 'New' then 1 end) as New")
									->selectRaw("count(case when status = 'EndorsementInProgress' then 1 end) as EndorsementInProgress")
									->selectRaw("count(case when status = 'Endorsed' then 1 end) as Endorsed")
									->selectRaw("count(case when status = 'ApprovalInProgress' then 1 end) as ApprovalInProgress")
									->selectRaw("count(case when status = 'Approved' then 1 end) as Approved")
									->selectRaw("count(case when status = 'Denied' then 1 end) as Denied")
									->whereBetween('dateapplied', $date_range)
									->get();

		if ($transactions) {
			$response = [
				'status' => 200,
				'data'	 => [
					'transactions' => $transactions[0]
				]
			];

			return response()->json($response);
		}

		$response = [
			'status'  => 400,
			'message' => 'There were no records found.'
		];

		return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
