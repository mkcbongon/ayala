<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
use App\Models\ChatModel;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('{message}', function($botman, $message) {
            $response = $this->searchInDatabase($message);

            if ($response) {
                $botman->reply($response);
            } else {
                $botman->reply("I'm sorry, I don't have the information you're looking for at the moment. However, I can help you with other inquiries or connect you with a real estate agent who may be able to assist you further. What else can I assist you with");
            }
        });

        $botman->listen();
    }

    /**
     * Search for matching response in the database.
     *
     * @param string $message
     * @return string|null
     */
    /**
     * Search for matching response in the database.
     *
     * @param string $message
     * @return string|null
     */
    private function searchInDatabase($message)
    {
        $words = explode(' ', $message);
        $matchingResponses = [];

        // Fetch responses from the database
        $responses = ChatModel::all();

        // Convert user input to lowercase
        $lowerMessage = strtolower($message);

        // Check for exact matches first
        foreach ($responses as $response) {
            // Convert database entry to lowercase
            $lowerResponseMatch = strtolower(trim($response->match));
            if ($lowerResponseMatch === $lowerMessage) {
                return $response->response;
            }
        }

        // Check for high matches (at least 98% of words matching)
        foreach ($responses as $response) {
            $responseWords = explode(' ', $response->match);
            $commonWords = array_intersect($words, $responseWords);
            $matchPercentage = count($commonWords) / count($words);

            if ($matchPercentage >= 0.98) {
                $matchingResponses[] = $response->response;
            }
        }

        // Check for high matches (all words matching)
        foreach ($responses as $response) {
            $responseWords = explode(' ', $response->match);
            $commonWords = array_intersect($words, $responseWords);

            // Check if all words from the user input are found in the response
            if (count($commonWords) === count($words)) {
                $matchingResponses[] = $response->response;
            }
        }

        // If matching responses found, return the first one
        if (!empty($matchingResponses)) {
            return $matchingResponses[0];
        }

        // If no matches found, return null
        return null;
    }



}
