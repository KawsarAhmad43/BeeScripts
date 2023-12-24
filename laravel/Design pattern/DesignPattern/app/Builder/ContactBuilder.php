<?php

namespace App\Builder;

use App\Models\Contact;

class ContactBuilder
{
    protected $contact;

    public function __construct()
    {
        $this->contact = new Contact();
    }

    public function setName($name)
    {
        $this->contact->name = $name;
        return $this;
    }

    public function setEmail($email)
    {
        $this->contact->email = $email;
        return $this;
    }

    public function setAge($age)
    {
        $this->contact->age = $age;
        return $this;
    }

    public function setNumber($number)
    {
        $this->contact->number = $number;
        return $this;
    }

    public function build()
    {
        return $this->contact;
    }
}
