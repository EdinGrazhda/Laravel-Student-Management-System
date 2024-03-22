<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Auth;
use App\Models\Payment;
class ReportController extends Controller
{

  
    public function report1($pid) {
        $payment = Payment::find($pid);
        if (!$payment || !$payment->enrollment || !$payment->enrollment->student || !$payment->enrollment->batch) {
            
            return response()->json(['error' => 'Payment details not found'], 404);
        }
        
        $pdf = App::make('dompdf.wrapper');
        $print = "<div style='margin:20px;padding:20px'>";
        $print .= "<h1 align='center'>Payment Receipt</h1>";
        $print .= "<hr/>";
        $print .= "<p>Receipt No : <b>". $pid ."</b></p>";
        $print .= "<p>Date: <b>". $payment->paid_date ."</b></p>";
        $print .= "<p>Enrollment No : <b>". $payment->enrollment->enroll_no  ."</b></p>";
        
        // Check if student exists
        if ($payment->enrollment->student) {
            $print .= "<p>Student Name : <b>". $payment->enrollment->student->name ."</b></p>";
        } else {
            $print .= "<p>Student Name : <b>Unknown Student</b></p>";
        }
        
        // Check if batch exists
        if ($payment->enrollment->batch) {
            $print .= "<p>Batch Name : <b>". $payment->enrollment->batch->name ."</b></p>";
        } else {
            $print .= "<p>Batch Name : <b>Unknown Batch</b></p>";
        }
        
        $print .= "<hr/>";
        $print .= "<table style='width:100%' >";
        $print .= "<tr>";
        $print .= "<td>Description</td>";
        $print .= "<td>Amount</td>";
        $print .= "</tr>";
        $print .= "<tr>";
        $print .= "<td><h3>". $payment->enrollment->batch->name . "</h3></td>";
        $print .= "<td><h3>". $payment->amount ."<h3></td>";
        $print .= "</tr>";
        $print .= "</table>";
        $print .= "</h3>";
        $print .= "<span>Printed By : <b>";
        if (Auth::check()) {
            $print .= Auth::user()->name;
        } else {
            $print .= "Unknown User <br>";
        }
        $print .= "</b></span>";
        $print .= "<span>Printed Date:<b>". date('Y-m-d') ."</b></span>";
        $print .= "</div>";
        $pdf->loadHTML($print);
        return $pdf->stream();
    }
    
    
}
