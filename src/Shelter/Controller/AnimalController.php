<?php

namespace Shelter\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AnimalController
{
    public function cgetAll(Request $request)
    {
        return new JsonResponse(array(
            array(
                'id' => 1,
                'name' => 'Laki',
                'specie' => 'Cat',
                'color' => ['black', 'white'],
                'birthMonth' => 10,
                'birthYear' => 2014,
                'vaccined' => true,
                'childrenFriendly' => true,
                'otherSpeciesFriendly' => true
            )
        ));
    }

    public function getSingle(Request $request, $id)
    {
        return new JsonResponse(array(
            array(
                'id' => intval($id),
                'name' => 'Laki',
                'specie' => 'Cat',
                'color' => ['black', 'white'],
                'birthMonth' => 10,
                'birthYear' => 2014,
                'vaccined' => true,
                'childrenFriendly' => true,
                'otherSpeciesFriendly' => true
            )
        ));
    }
}
