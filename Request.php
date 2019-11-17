<?php
include_once 'IRequest.php';
/**
 * Request
 * 
 * @author Thomas Watson <twatson071@gmail.com>
 * 
 */

class Request implements IRequest
{

    function __construct()
    {
        $this->bootstrapSelf();
    }

    /**
     * Sets all keys in the server array as properties of the Request Class
     * and assigns their value
     *
     * @return void
     */
    private function bootstrapSelf()
    {
        foreach ($_SERVER as $key => $value) {
            $this->{$this->_toCamelCase($key)} = $value;
        }
    }

    /**
     * Helper function to convert snake case to camel case
     *
     * @param [String] $string - string to be changed to camel case
     * 
     * @return void
     */
    private function _toCamelCase($string)
    {
        $result = strtolower($string);

        preg_match_all('/_[a-z]/', $result, $matches);
        foreach ($matches[0] as $match) {
            $c = str_replace('_', '', strtoupper($match));
            $result = str_replace($match, $c, $result);
        }
        return $result;
    }

    /**
     * Retrieves the data from the request body
     *
     * @return [Array]
     */
    public function getBody()
    {
        if ($this->requestMethod === "GET") {
            return;
        }
        if ($this->requestMethod == "POST" || $this->requestMethod == "PATCH") {
            $body = array();
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
            return $body;
        }
    }
}
