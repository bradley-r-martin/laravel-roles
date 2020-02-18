<?php

namespace BRM\Roles\app\Services;

class Roles
{
    use \BRM\Vivid\app\Traits\Vivid;
    public function __construct()
    {
        $this->model = \BRM\Roles\app\Models\Role::class;
        $this->fields = [
          'name',
          'description',
          'invisible'
        ];
        $this->filters = [];
        $this->includes = [];
        $this->sanitise = [
          'name' => ['string','max:255'],
          'name' => ['string','max:255'],
        ];
    }

}
