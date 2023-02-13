<?php

namespace App\Domain\Services;

class TreeService
{

    public function buildTree(array &$data, $parentId = 0)
    {
        $tree = array();
        foreach ($data as $element) {
            if ($element['parent_id'] == $parentId) {
                unset($element['parent_id']);
                $childs = $this->buildTree($data, $element['id']);
                if ($childs) {
                    $element['childs'] = $childs;
                }
                $tree[$element['id']] = $element;
                unset($data[$element['id']]);
            }
        }
        return $tree;
    }

    public function reIndexTree(array $tree)
    {
        $cleared = array();
        foreach($tree as $key => $element)
        {
            if(isset($element["childs"]))
            {
                $element["childs"] = $this->reIndexTree($element["childs"]);
            }
            $cleared[] = $element;
        }
        return $cleared;
    }
}
