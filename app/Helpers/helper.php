<?php


function convert_school_names($school_details, $title): string
{
    $list = [];
    $types_to_remove = [];
    if (is_array($title)) {
        foreach ($school_details as $detail) {
            if (isset($detail->school_type)) {
                $types_to_remove[] = $detail->school_type->title;
            }
        }
        $types_to_remove[] = 'School';
        $types_to_remove = collect($types_to_remove);
        $title_array = collect($title);
        foreach ($title_array as $arr) {
            if (!$types_to_remove->contains($arr))
                $list[] = $arr;
        }
    }
    $filtered = implode(" ", $list);
    if ($filtered) {
        $types_to_remove = (array)$types_to_remove->all();
        array_pop($types_to_remove);
        $count = count($types_to_remove);
        if ($count == 1) {
            $filtered .= ' ' . $types_to_remove[0];
        } elseif ($count > 1) {
            foreach ($types_to_remove as $k => $insert) {
                $check_last = ($count - 1);// last word in the loop
                if ($k === $check_last) {
                    $filtered .= ' and ' . $insert;
                } elseif ($k < $count) {
                    $filtered .= ' ' . $insert . ', ';
                }
            }
        }

    }
    return $filtered;
}

function remove_spaces($value): string
{
    return implode("", explode(" ", $value));
}
