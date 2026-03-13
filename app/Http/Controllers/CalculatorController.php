<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculate($operation, $op1, $op2)
    {
        $op1 = (float) $op1;
        $op2 = (float) $op2;
        $result = null;
        $error = null;

        switch ($operation) {
            case 'add':
                $result = $op1 + $op2;
                break;
            case 'sub':
                $result = $op1 - $op2;
                break;
            case 'multiply':
                $result = $op1 * $op2;
                break;
            case 'divide':
                if ($op2 == 0) {
                    $error = 'Division by zero';
                } else {
                    $result = $op1 / $op2;
                }
                break;
            case 'mod':
                if ($op2 == 0) {
                    $error = 'Modulo by zero';
                } else {
                    $result = $op1 % $op2;
                }
                break;
            default:
                $error = 'Invalid operation';
                break;
        }

        return view('calculator.result', compact('operation', 'op1', 'op2', 'result', 'error'));
    }

    public function index()
    {
        return view('calculator.index');
    }
}