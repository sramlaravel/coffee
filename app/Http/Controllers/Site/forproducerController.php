<?php

namespace App\Http\Controllers\Site;

use App\Models\Abouts;

use App\Http\Controllers\Controller;
use App\Models\ForProducer;
use App\Models\Page;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class forproducerController extends Controller
 {
//    public function forproducer()
//    {
//        $forproducer = ForProducer::select('id', 'title_' . LaravelLocalization::getCurrentLocale() . ' as title', 'description_' . LaravelLocalization::getCurrentLocale() . ' as  description', 'image', 'created_at')->get();
//
//        return view('front.forproducers', compact('forproducer'));
//    }

    public function __construct(){
        $this->activeTemplate = activeTemplate();
    }

    public function forproducer()
    {
        $count = Page::where('tempname',$this->activeTemplate)->where('slug','forproducers')->count();

        if($count == 0){
            $page = new Page();
            $page->tempname = $this->activeTemplate;
            $page->name = 'forproducers';
            $page->slug = 'forproducers';
            $page->save();
        }

        $reference = @$_GET['reference'];
        if ($reference) {
            session()->put('reference', $reference);
        }

        $pageTitle = 'Home';
        $sections = Page::where('tempname',$this->activeTemplate)->where('slug','forproducers')->first();

        return view($this->activeTemplate . 'forproducers', compact('pageTitle','sections'));

    }



    public function placeholderImage($size = null){
        $imgWidth = explode('x',$size)[0];
        $imgHeight = explode('x',$size)[1];
        $text = $imgWidth . '×' . $imgHeight;
        $fontFile = realpath('assets/font') . DIRECTORY_SEPARATOR . 'RobotoMono-Regular.ttf';
        $fontSize = round(($imgWidth - 50) / 8);
        if ($fontSize <= 9) {
            $fontSize = 9;
        }
        if($imgHeight < 100 && $fontSize > 30){
            $fontSize = 30;
        }

        $image     = imagecreatetruecolor($imgWidth, $imgHeight);
        $colorFill = imagecolorallocate($image, 100, 100, 100);
        $bgFill    = imagecolorallocate($image, 175, 175, 175);
        imagefill($image, 0, 0, $bgFill);
        $textBox = imagettfbbox($fontSize, 0, $fontFile, $text);
        $textWidth  = abs($textBox[4] - $textBox[0]);
        $textHeight = abs($textBox[5] - $textBox[1]);
        $textX      = ($imgWidth - $textWidth) / 2;
        $textY      = ($imgHeight + $textHeight) / 2;
        header('Content-Type: image/jpeg');
        imagettftext($image, $fontSize, 0, $textX, $textY, $colorFill, $fontFile, $text);
        imagejpeg($image);
        imagedestroy($image);
    }
}
