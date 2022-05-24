<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Http\Requests\StoreexpenseRequest;
use App\Http\Requests\UpdateexpenseRequest;
use App\Imports\ExpenseImport;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use App\Models\User;
// use Nette\Utils\Image;
use Intervention\Image\Facades\Image;
use Maatwebsite\Excel\Facades\Excel;


class ExpenseController extends Controller
{
    public function UserLogout()
    {
        Auth::logout();

        return redirect()->route('login');
    }


    public function MyProfile()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.profile', compact('user'));
    }

    public function Settings()
    {

        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.profile_setting', compact('user'));
    }

    public function ProfileUpdate(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'location' => 'required',
                'department' => 'required',
                'job_description' => 'required',
                'profile_photo_path' => 'required|mimes:jpg,jpeg,png',
            ],

        );

        $id = Auth::user()->id;
        $user = User::find($id);

        if ($user) {

            if ($request->file('profile_photo_path')) {
                $file = $request->file('profile_photo_path');
                if (file_exists('upload/images/' . $user->profile_photo_path)) {
                    @unlink(public_path('upload/images/' . $user->profile_photo_path));
                    $filename = date('YmdHi') . $file->getClientOriginalName();
                    $file->move(public_path('upload/images'), $filename);
                    $user['profile_photo_path'] = $filename;
                } else {
                    $filename = date('YmdHi') . $file->getClientOriginalName();
                    $file->move(public_path('upload/images'), $filename);
                    $user['profile_photo_path'] = $filename;
                }
            }

            $user->name = $request['name'];
            $user->job_description = $request['job_description'];
            $user->location = $request['location'];
            $user->department = $request['department'];

            $user->save();

            return redirect()->route('profile')->with('success', 'Profile Updated Successfully');
        }
    }


    public function Expense()
    {

        $id = Auth::user()->id;
        $user = User::find($id);
        $expenses = Expense::paginate(2);

        return view('pages.expenseList', compact('expenses', 'user'));
    }

    public function NewExpense()
    {

        $id = Auth::user()->id;
        $user = User::find($id);
        return view('pages.add_expense', compact('user'));
    }

    public function AddExpense(Request $request)
    {
        $validated = $request->validate(
            [
                'Merchant' => 'required',
                'Total' => 'required',
                'Status' => 'required',
                'Comment' => 'required',
                'Receipt' => 'mimes:jpg,jpeg,png',
                'Date_Issue' => 'required',
            ],

        );

        $file = $request->file('Receipt');

        if ($file) {

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(300, 200)->save('upload/receipt/' . $name_gen);

            $last_img = 'upload/receipt/' . $name_gen;

            Expense::insert([
                'Merchant' => $request->Merchant,
                'Total' => $request->Total,
                'Status' => $request->Status,
                'Comment' => $request->Comment,
                'Receipt' => $last_img,
                'Date_Issue' => $request->Date_Issue,
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('expense.all')->with('Success', 'Expense Added Successfully');
        } else {

            Expense::insert([
                'Merchant' => $request->Merchant,
                'Total' => $request->Total,
                'Status' => $request->Status,
                'Comment' => $request->Comment,
                'Date_Issue' => $request->Date_Issue,
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('expense.all')->with('Success', 'Expense Added Successfully');
        }
    }


    public function EditExpense($id)
    {

        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $expenses = Expense::find($id);

        return view('pages.edit_expense', compact('expenses'));
    }

    public function UpdateExpense(Request $request)
    {
        $expense_id = $request->id;

        $validated = $request->validate(
            [
                'Merchant' => 'required',
                'Total' => 'required',
                'Status' => 'required',
                'Comment' => 'required',
                'Receipt' => 'mimes:jpg,jpeg,png',
                'Date_Issue' => 'required',
            ],
        );

        $old_image = $request->old_image;

        $file = $request->file('Receipt');

        if ($file) {

            $name_gen = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
            Image::make($file)->resize(300, 200)->save('upload/receipt/' . $name_gen);

            $last_img = 'upload/receipt/' . $name_gen;

            // unlink($old_image);
            Expense::findOrFail($expense_id)->update([
                'Merchant' => $request->Merchant,
                'Total' => $request->Total,
                'Status' => $request->Status,
                'Comment' => $request->Comment,
                'Receipt' => $last_img,
                'Date_Issue' => $request->Date_Issue,
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('expense.all')->with('Success', 'Expense Added Successfully');
        } else {

            Expense::findOrFail($expense_id)->update([
                'Merchant' => $request->Merchant,
                'Total' => $request->Total,
                'Status' => $request->Status,
                'Comment' => $request->Comment,
                'Date_Issue' => $request->Date_Issue,
                'created_at' => Carbon::now()
            ]);

            return redirect()->route('expense.all')->with('Success', 'Expense Added Successfully');
        }
    }

    public function ImportExpense()
    {

        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        return view('pages.import_expense', compact('user'));
    }

    public function UploadExpense(Request $request)
    {

        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        Excel::import(new ExpenseImport, $request->file('file'));


        return redirect()->route('expense.all')->with('Success', 'Expense Uploaded Successfully');
    }
}
