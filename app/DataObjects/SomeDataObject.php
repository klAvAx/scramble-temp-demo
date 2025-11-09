<?php

namespace App\DataObjects;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Carbon;

readonly class SomeDataObject implements Arrayable
{
    public string $someString;

    public int $someInt;

    public Carbon $someDate;

    public function __construct()
    {
        $this->someString = "Foo";
        $this->someInt = 42;
        $this->someDate = Carbon::now();
    }

    public function toArray()
    {
        return [
            "someString" => $this->someString,
            "someInt" => $this->someInt,
            "someDate" => $this->someDate
        ];
    }
}
