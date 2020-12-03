<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Mail;

class SaveController extends Controller
{

    public function save_contact(Request $request)
    {


        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => '6Lc7nr4ZAAAAAI-8XAUzfRFEzCd6flI45Qhf4ZSG',
            'response' => request('recaptcha'),
        ];

        $options = [
            'http' => [
                'header' => 'Content-type: application/x-www-form-urlencoded\r\n',
                'method' => 'POST',
                'content' => http_build_query($data),
            ],
        ];
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $resultJson = json_decode($result);
//dd($resultJson);
        if ($resultJson->success != true &&  $response['score'] <= 0.5) {
            return back()->with('message', 'Captcha Error');
        }

        $random_i = Str::random();

        $ip = $_SERVER['REMOTE_ADDR'];
        $i = $request->accept_marketing;
        $text = "";
        if ($i = "1") {
            $text = "I accept receiving marketing information about Rolex from NGG TIMEPIECES CO. LTD.";
        }
        DB::table('contact')
            ->insert(
                [
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'message' => $request->message,
                    'from_country' => $request->from_country,
                    'key_set' => $random_i,
                    'ip' => $ip,
                    'market' => $i,
                    'created_at' => Carbon::now(),

                ]
            );

        $mailid = $request->email;
        $subject = 'News Contace us.';
        $subject_s = "NGGTimepiece.com";
        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message_x' => $request->message,
            'from_country' => $request->from_country,
            'market' => $text,
            'time' => date('H:i:s'),
            'day' => date('d/m/Y'),
            'subject_s' => $subject_s,
            'subject' => $subject,
            'random_i' => $random_i,

        );

    /*     Mail::send('emails.contact', $data, function ($message_send) use ($data) {
            $message_send->from('noreply@nggtimepieces.com', 'Rolex - NGGTimepiece.com');
            $message_send->to('info@nggtimepieces.com');
            $message_send->subject($data['subject']);
        });
 */
        Mail::send('emails.contact', $data, function ($message_send) use ($data) {
            $message_send->from('noreply@nggtimepieces.com', 'Rolex - NGGTimepiece.com');
            $message_send->to('narathorn@nioachievers.com');
            $message_send->subject($data['subject']);
        });
        Mail::send('emails.reply', $data, function ($message_send) use ($data) {
            $message_send->from('noreply@nggtimepieces.com', 'Rolex - NGGTimepiece.com');
            $message_send->to($data['email']);
            $message_send->subject($data['subject_s']);
        });

        return redirect('contact')->with('success', 'YOU HAVE SUCCESSFULLY RECORDED THE DATA. WE WILL CONTACT YOU SHORTLY. THANK YOU.');
    }

}
