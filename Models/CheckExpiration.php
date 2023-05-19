<?php

/**
 * Trait CheckExpiration
 */
trait CheckExpiration
{
    public function checkExpiration()
    {
        $current_date = date('Y-m-d');
        if ($this->expiration < $current_date) {
            throw new Exception("This article is expired");
        }
        return $this->expiration;
    }
}
