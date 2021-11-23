<?php
/**
 * Created by PhpStorm.
 * User: mbbag
 * Date: 1/15/2018
 * Time: 4:50 AM
 */

namespace App\Http\Controllers;

use App\Feedback;
use App\qresult;
use App\Questionnaire;
use Illuminate\Http\Request;




class FrontController extends Controller
{
    public function socialshare($id)
    {
        $newsdet=\App\Content::find($id);
        Share::page('http://jorenvanhocht.be')->facebook();
        // Share::load(url('detailc').'/'. $id.'/'.$newsdet->title, $newsdet->title)->twitter();
        //Share::facebook(route('detailc',[$id,$title]), $title, url('upload').'/'.$thumb);
        return redirect('/detailc/' . $id.'/'.$newsdet->title);
    }
//    public function socialshare($id,$title,$thumb)
//    {
//      //  Share::load('http://www.example.com', $title)->twitter();
//        //Share::facebook(route('detailc',[$id,$title]), $title, url('upload').'/'.$thumb);
//        return redirect('/detailc/' . $id.'/'.$title);
//    }

    public function search(Request $request)
    {
        $q = $request->get('s') ? $request->get('s') : 1;
        $search = \App\Content::where('title', 'like', '%' . $q . '%')->orwhere('headline', 'like', '%' . $q . '%')->orwhere('body', 'like', '%' . $q . '%')->paginate(20);

//        dd($search);
//        die();

        return view('front.views.search', compact('search'));
    }

    public function storequizresult(Request $request)
    {
        $res = new qresult();
        $res->parent_id = $request->parent_id;
        $res->age = $request->age;
        $res->email = $request->email;
        $res->gender = $request->gender;

        $res->save();

        return redirect('/quizproceed/' . $res->id);
    }


    public function quizproceed($idres)
    {
        $res = qresult::find($idres);
        $quiz = Questionnaire::find($res->parent_id);
        return view('front.views.quizproceed', compact('res', 'quiz'));
    }

    public function storequizresultajax(Request $request)
    {
        $res = qresult::find($request->_resid);
        $res->point = $request->_total;
        $res->result = serialize($request->_data);

        $res->save();

        return $request;
    }

    public function qlistexcel($id)
    {
        return (new QuizExport($id))->download('quizresult.xlsx');
    }

    public function commentexcel()
    {
        return (new CoomentitExport())->download('commentresult.xlsx');
    }

    public function storefeedback(Request $request)
    {
        $feedback = new Feedback();
        $feedback->name = $request->form_name;
        $feedback->email = $request->form_email;
        $feedback->subject = $request->form_subject;
        $feedback->phone = $request->form_phone;
        $feedback->body = $request->form_message;

        $feedback->save();

        return redirect('contact');
    }

    public function detailpage($id, $name)
    {
        $pagenews = \App\Group::find($id)->contentchilds()->where('language', __('front.lang'))->orderby('id', 'desc')->paginate(10);

        $relatedmenu = \App\Group::find($id)->parent()->first()->childs()->where('language', __('front.lang'))->Orderby('orderby')->get();//->get()->childs();//->where('language',__('front.lang'))->Orderby('orderby')->get();

        return view('front.views.detail', compact('name', 'pagenews', 'relatedmenu'));
    }

    public function detailpagecontent($id, $name)
    {
        $pagenews = \App\Content::find($id);

        $relatedmenu = $pagenews->parent()->first()->contentchilds()->where('language', 'монгол')->Orderby('created_at', 'desc')->get()->take(10);//->get()->childs();//->where('language',__('front.lang'))->Orderby('orderby')->get();

        return view('front.views.detailcontent', compact('name', 'pagenews', 'relatedmenu'));
    }

    public function job()
    {
        return view('front.views.job');
    }

    public function jobdetail($id)
    {
        $job = \App\Job::find($id);
        return view('front.views.jobdet', compact('job'));
    }

    public function news()
    {
        $news = \App\Group::find(61)->contentchilds()->where('language', 'монгол')->Orderby('created_at', 'desc')->paginate(18);
        return view('front.views.news', compact('news'));
    }

    public function suggest()
    {
        $news = \App\Group::find(62)->contentchilds()->where('language', 'монгол')->Orderby('created_at', 'desc')->paginate(18);
        return view('front.views.suggest', compact('news'));
    }
}
