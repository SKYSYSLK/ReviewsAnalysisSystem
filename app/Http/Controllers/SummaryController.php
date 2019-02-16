<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use PhpScience\TextRank\Tool\StopWords\English;
use PhpScience\TextRank\TextRankFacade;


class SummaryController extends BaseController
{
    public function summarizeText($text){

        // initialize the summarizing API
        $api = new TextRankFacade();

        // English implementation for stopwords/junk words:
        $stopWords = new English();
        $api->setStopWords($stopWords);

        // Array of the most important sentences from the text:
        $result = $api->summarizeTextBasic($text);

        // return the summarized text
        return $result;
    }
}
