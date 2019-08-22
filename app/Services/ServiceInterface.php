<?php

namespace App\Service;
interface ServiceInterface
{
    public function getAll();
    public function findOrFail($id);
    public function create($request);
    public function update($request, $id);
    public function destroy($id);
}
