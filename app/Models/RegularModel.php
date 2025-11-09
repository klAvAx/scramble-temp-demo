<?php

namespace App\Models;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

readonly class RegularModel implements Arrayable
{
    public int $id;

    public string $someString;

    public int $someNumber;

    public Carbon $updated_at;

    public Carbon $created_at;


    protected function __construct(int $id, string $someString, int $someNumber, Carbon $updated_at, Carbon $created_at)
    {
        $this->id = $id;
        $this->someString = $someString;
        $this->someNumber = $someNumber;
        $this->updated_at = $updated_at;
        $this->created_at = $created_at;
    }


    /**
     * @return RegularModel[]
     */
    public static function getAll(): array
    {
        $data = DB::table("someData")->get()->toArray();

        return array_map(fn ($item) => new RegularModel($item->id, $item->someString, $item->someNumber, Carbon::parse($item->updated_at), Carbon::parse($item->updated_at)), $data);
    }


    public function toArray(): array
    {
        return [
            "id" => $this->id,
            "someString" => $this->someString,
            "someNumber" => $this->someNumber,
            "updated_at" => $this->updated_at,
            "created_at" => $this->created_at
        ];
    }
}
