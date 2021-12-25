<?php

namespace CascadeMedia\Utilities;


/**
 * Reusable complex Regular Expression
 */
class RegExFilters
{

    /**
     * @property RFC5322_validEmailAddress
     * Escaped RFC5322 Email validation regular expression
     * @link: https://emailregex.com/
     */
    private $validEmailAddress = '/^(([^<>()\\[\\]\.,;:\\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}])|(([a-zA-Z\\-0-9]+\\.)+[a-zA-Z]{2,}))$/';

    /**
     * @method escapeExpression
     * Escapes the request expression.
     */
    private function escapeExpression($expression = null) : object|string {
        return addslashes($this->$expression);
    }

    /**
     * @method escapeExpression
     * Strips the slashes within the request expression.
     */
    private function unescapeExpression($expression = null) : object|string {
        return stripslashes($this->$expression);
    }

    /**
     * @method expression
     * Returns the expression stored as a proprty by property name passed by a string parameter.
     * @param String $expression;
     */
    public function expression($expression = null) : string {
        return $this->$expression;
    }

}
