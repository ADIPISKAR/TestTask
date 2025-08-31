<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Request as RequestModel;

class RequestController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => ['required', 'regex:/^\+?[0-9\-\s]{10,20}$/'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()->all()
            ], 422);
        }

        $exists = RequestModel::where('name', $request->name)
            ->where('email', $request->email)
            ->where('phone', $request->phone)
            ->where('created_at', '>=', now()->subMinutes(5))
            ->exists();

        if ($exists) {
            return response()->json([
                'success' => false,
                'errors' => ['Заявка уже отправлена недавно.']
            ], 429);
        }

        RequestModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Заявка успешно отправлена!'
        ]);
    }
}