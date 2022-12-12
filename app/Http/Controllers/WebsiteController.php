<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Notifications\MessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class WebsiteController extends Controller
{
    /**
     * showing homepage
     */
    public function index()
    {
        return view('website.index');
    }

    /**
     * showing about us page
     */
    public function about()
    {
        return view('website.about');
    }

    /**
     * showing contact us page
     */
    public function contact()
    {
        return view('website.contact');
    }

    /**
     * send message notification
     */
    public function sendMessage(MessageRequest $request)
    {
        try {
            Notification::route('mail', config('services.to_mail'))->notify(new MessageNotification($request->validated()));
        } catch (\Throwable $ex) {
            return response([
                'success' => false,
                'message' => $ex->getMessage()
            ]);
        }

        return response([
            'success' => true,
            'message' => 'Message has been send. We will shortly contact you back.'
        ]);
    }

    /**
     * showing consultancy service page
     */
    public function consultancy()
    {
        return view('website.services.consultancy');
    }

    /**
     * showing web service page
     */
    public function web()
    {
        return view('website.services.web');
    }

    /**
     * showing user experince design service page
     */
    public function design()
    {
        return view('website.services.design');
    }

    /**
     * showing planning service page
     */
    public function planning()
    {
        return view('website.services.planning');
    }
}
