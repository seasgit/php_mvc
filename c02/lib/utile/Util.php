<?php

/**
 * Class de type Service d'où le nom
 */
class Util
{

    /**
     * Permet de débugger
     *
     * @param [type] $data
     * @param boolean $continue
     * @return void
     */
    public function dd($data, $continue = false)
    {
        echo '<pre>';
        print_r($data);
        if (!$continue) exit;
    }
}
