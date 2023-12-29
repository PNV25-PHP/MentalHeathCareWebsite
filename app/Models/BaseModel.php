<?php

namespace App\Models;

use DateTime;
use DateTimeZone;

abstract class BaseModel
{
    public string $id;
    public DateTime $createdAt;

    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $this->id = date('Y-m-d H:i:s');
        $this->createdAt = new DateTime('now', new DateTimeZone('Europe/London'));
    }


   
    public function getId(): string
    {
        return $this->id;
    }
}
