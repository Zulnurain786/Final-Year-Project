<?php

namespace App\Imports;

use App\Models\studentsrecords;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Arr;

class StudentRecordImport implements ToModel,WithHeadingRow,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $pmoid = Session::get('pmoid');

        return new studentsrecords([
            'name'       => $row['name'],
            'email'      => $row['email'],
            'pnumber'     => $row['phone_number'],
            'department' => $row['department'],
            'session'    => $row['session'],
            'regno'      => $row['regno'],
            'pmo_id'     => $pmoid,
        ]);
        // return new studentsrecords([
        //     'name'       => $row[0],
        //     'email'      => $row[1],
        //     'session'    => $row[4],
        //     'department' => $row[3],
        //     'regno'      => $row[5],
        //     'pnumber'    => $row[2],
        // ]);

    }
    public function headingRow(): int
    {
        return 1; // Define the row number where your headers are located (usually 1)
    }
    public function rules(): array
    {
        return [
            'name' => 'required|string', // Adjust validation rules as per your requirements
            'email' => 'required|email|unique:studentsrecords,email',
            'phone_number' => 'required|numeric|min:10',
            'department' => 'required',
            'session' => 'required',
            'regno' => 'required|unique:studentsrecords,regno',
            // Add other validation rules as needed for columns
        ];
    }
}
