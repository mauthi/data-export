<?php

namespace LaravelEnso\DataExport\Contracts;

interface Notifies
{
    public function emailSubject(): string;
}