<?php

namespace Devio\Pipedrive\Resources;

use Devio\Pipedrive\Http\Response;
use Devio\Pipedrive\Resources\Basics\Entity;
use Devio\Pipedrive\Resources\Traits\Searches;
use Devio\Pipedrive\Resources\Traits\ListsDeals;
use Devio\Pipedrive\Resources\Traits\ListsAttachedFiles;

class Organizations extends Entity
{
    use Searches,
        ListsDeals,
        ListsAttachedFiles;

    /**
     * List the persons of a resource.
     *
     * @param       $id      The resource id
     * @param array $options Extra parameters
     * @return Response
     */
    public function persons($id, $options = [])
    {
        array_set($options, 'id', $id);

        return $this->request->get(':id/persons', $options);
    }
}
