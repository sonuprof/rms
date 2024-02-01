<?php

namespace App\Imports;

use App\Models\Upload;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class RmsImport implements ToModel, WithStartRow
{
    private $savedCount;
    private $currentCount;
    private $loginID;

    public function __construct($loginID, $currentCount)
    {
        $this->savedCount = 0;
        $this->loginID = $loginID;
        $this->currentCount = $currentCount;
        // dd($currentCount);

    }

    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        // $this->currentCount++;
        
        $up = new Upload([
            'graph' => $row[0],
            'upload_count' => $this->currentCount,
            'loginid' => $this->loginID,
        ]);

        if ($up->save()) {
            $this->savedCount++;
        }

        return $up;
    }

    public function getSavedCount()
    {
        return $this->savedCount;
    }
}
