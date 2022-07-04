<?php

namespace App\Jobs;

use App\Models\SearchLetter;
use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use phpDocumentor\Reflection\Types\Void_;

class SearchByLetterJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private const EnglishLetters = [
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'g',
        'h',
        'i',
        'j',
        'k',
        'l',
        'm',
        'n',
        'o',
        'p',
        'q',
        'r',
        's',
        't',
        'u',
        'v',
        'w',
        'x',
        'y',
        'z'
    ];

    private const PersianLetters = [
         'آ',
         'ا',
         'ب',
         'پ',
         'ت',
         'ث',
         'ج',
         'چ',
         'ح',
         'خ',
         'د',
         'ذ',
         'ر',
         'ز',
         'ژ',
         'س',
         'ش',
         'ص',
         'ض',
         'ط',
         'ظ',
         'ع',
         'غ',
         'ف',
         'ق',
         'ک',
         'گ',
         'ل',
         'م',
         'ن',
         'و',
         'ه',
         'ی',
   ];

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(12); // delay for apple api limmit.



        $language = Setting::Where('key','random_fetch_by')->first()->value;

        // check if database have data
        if(is_null(SearchLetter::where('language','=',$language)->first()->current_letter)){
            $this->fail('language is not available1');
        }

        $data = SearchLetter::where('language','=',$language)->first();

        if ($data->language == 'English_letters') {

            $currentLetter = $data->current_letter;
            $currentPage = $data->current_page;
            
            $mainRequest = Http::get('https://itunes.apple.com/search?',[
                'term'=>$data->current_letter,
                'media'=>'podcast',
                'limit'=>200,
                'offset' => $data->current_page
            ]);

            $resultData = json_decode($mainRequest->body(),true);
            // $this->fail(print_r($resultData));
                    // check if data has any issue
            if (is_null($resultData)) {
                $this->fail('response is null' . $mainRequest->status() . $mainRequest);
            }

            if (!$resultData['resultCount'] >= 1) {
                
                $letterKey = array_search($data->current_letter,self::EnglishLetters);
                if ($letterKey == array_key_last(self::EnglishLetters)) {
                    $currentLetter = self::EnglishLetters[0];
                }else{
                    $currentLetter = self::EnglishLetters[$letterKey += 1];
                }
                

                SearchLetter::where('language','=',$language)->first()->update([
                    'current_letter' => $currentLetter,
                    'current_page' => 0
                ]);

                $this->fail('next letter');
                exit;
            }

            foreach ($resultData['results'] as $result) {
                RequestCreateData::dispatch($result['collectionId']);
            }

            SearchLetter::where('language','=',$language)->first()->update([
                'current_page' => $currentPage += 1
            ]);


        }
        elseif($data->language == 'Persian_letters') {

            $currentLetter = $data->current_letter;
            $currentPage = $data->current_page;
            
            $mainRequest = Http::get('https://itunes.apple.com/search?',[
                'term'=>$data->current_letter,
                'media'=>'podcast',
                'limit'=>200,
                'offset' => $data->current_page
            ]);

            $resultData = json_decode($mainRequest,true);

                    // check if data has any issue
            if (is_null($resultData)) {
                $this->fail('response is null' . $mainRequest->status() . $mainRequest);
            }

            if (!$resultData['resultCount'] >= 1) {
                
                $letterKey = array_search($data->current_letter,self::PersianLetters);
                if ($letterKey == array_key_last(self::PersianLetters)) {
                    $currentLetter = self::PersianLetters[0];
                }else{
                    $currentLetter = self::PersianLetters[$letterKey += 1];
                }
                

                SearchLetter::where('language','=',$language)->first()->update([
                    'current_letter' => $currentLetter,
                    'current_page' => 0
                ]);

                $this->fail('next letter');
                exit;
            }

            foreach ($resultData['results'] as $result) {
                RequestCreateData::dispatch($result['collectionId']);
            }

            SearchLetter::where('language','=',$language)->first()->update([
                'current_page' => $currentPage += 1
            ]);
        }else{
            $this->fail('language is no avaiable2');
        }

    }
}
