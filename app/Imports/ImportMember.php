<?php

namespace App\Imports;

use App\Models\Member;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared;


class ImportMember implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        $c = 1;

        foreach ($rows as $row) {
            if ($c >= 2) {
                $membership_id = $row[0];
                $first_name = $row[1];
                $last_name = $row[2];
                $parents_name = $row[3];
                $emergency_contact = $row[4];
                $birth_date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]);
                $age = $row[6];
                $email = $row[7];
                $address = $row[8];
                $city = $row[9];
                $post_code = $row[10];
                $communication_mode = $row[11];

                Member::create([
                    'membership_id' => $membership_id,
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'parents_name' => $parents_name,
                    'emergency_contact' => $emergency_contact,
                    'birth_date' => $birth_date,
                    'age' => $age,
                    'email' => $email,
                    'address' => $address,
                    'city' => $city,
                    'post_code' => $post_code,
                    'communication_mode' => $communication_mode,
                ]);
            }
            $c++;
        }
        session()->flash('success_alert', "Members Uploaded successfully!");
    }
}
