<?php

namespace Eduframe\Resources;

use Eduframe\Resource;

class Meeting extends Resource
{

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'planned_course_id',
        'description',
        'start_date',
        'start_date_time',
        'end_date_time',
        'updated_at',
        'created_at'
    ];

    /**
     * @var string
     */
    protected $endpoint = 'meetings';

    /**
     * @var string
     */
    protected $namespace = 'meeting';
}
