<?php

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */

    private array $result=[];

    private string $current="";

    function generateParenthesis($n) {
        $this->generateParentheses($n,0);
        return $this->result;
    }

    function generateParentheses($to_open,$to_close){
        if($to_open===0 && $to_close===0){
            return $this->result[]=$this->current;             
        }

        if($to_open>0){
            $this->current.="(";
            $this->generateParentheses($to_open-1,$to_close+1);
            $this->current=substr($this->current,0,-1);
        }

        if($to_close>0){
            $this->current.=")";
            $this->generateParentheses($to_open,$to_close-1);
            $this->current=substr($this->current,0,-1);
        }
    }
}