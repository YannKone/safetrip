<?php

namespace App\Http\Controllers;

use App\Models\temoignages;
use App\Models\demopagemodel;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index()
    {
        $temoignages =  temoignages::all();
        
        return view('templates.index', compact('temoignages'));
    } //

    public function about()
    {
        return view('templates.about');
    } //
    public function team()
    {
        return view('templates.team');
    } //
    public function testimonials()
    {

        $temoignages =  temoignages::all();
        return view('templates.testimonials', compact('temoignages'));
    } //
    public function contact()
    {
        return view('templates.contact');
    } //
    public function demo()
    {
        return view('templates.demo');
    } //
    public function portfolio()
    {
        return view('templates.portfolio');
    } //
    public function pricing()
    {
        return view('templates.pricing');
    } //
    public function services()
    {
        return view('templates.services');
    } //
    public function blog_single()
    {
        return view('templates.blog-single');
    } //
    public function layout()
    {
        return view('layout');
    }
    public function testpage()
    {
        return view('templates.testpage');
    } 
    public function TPE()
    {
        return view('templates.TPE');
    } 
    public function consent()
    {
        return view('consent');
    } 
    public function confidentialite()
    {
        return view('templates.confidentialite');
    } 
    public function demorequestlist()
    {
        return view('templates.admin.demorequestlist');
    } 
    public function newlettersrequestlist()
    {
        return view('templates.admin.newlettersrequestlist');
    } 
    public function contactrequestlist()
    {
        return view('templates.admin.contactrequestlist');
    } 
    public function admin()
    {
        return view('pages.admin');
    } 
    public function calendar()
    {
        //   $utilisateur =  demopagemodel::all();
        
        return view('calendar');
    } 
    public function advanced()
    {
        return view('advanced');
    } 
    public function blank()
    {
        return view('blank');
    }  public function boxed()
    {
        return view('boxed');
    }  public function buttons()
    {
        return view('buttons');
    }  public function chartjs()
    {
        return view('chartjs');
    }  public function collapsed_sidebar()
    {
        return view('collapsed_sidebar');
    }  public function compose()
    {
        return view('compose');
    }  public function contact_us()
    {
        return view('contact_us');
    }  public function contacts_us()
    {
        return view('contacts');
    }  public function contacts()
    {
        return view('data');
    }  public function e_commerce()
    {
        return view('e_commerce');
    }  public function editors()
    {
        return view('editors');
    }  public function enhanced_results()
    {
        return view('enhanced_results');
    }  public function enhanced()
    {
        return view('enhanced');
    }  public function faq()
    {
        return view('faq');
    }  public function fixed_footer()
    {
        return view('fixed_footer');
    }  public function fixed_sidebar_custom()
    {
        return view('fixed_sidebar_custom');
    }  public function fixed_sidebar()
    {
        return view('fixed_sidebar');
    }  public function fixed_topnav()
    {
        return view('fixed_topnav');
    }  public function flot()
    {
        return view('flot');
    }  public function forgot_password()
    {
        return view('forgot_password');
    } 
    public function forgot_password_v2()
    {
        return view('forgot_password_v2');
    } 
    public function gallery()
    {
        return view('gallery');
    } 
    public function general()
    {
        return view('general');
    } 
    public function icons()
    {
        return view('icons');
    } 
    public function inline()
    {
        return view('inline');
    } 
    public function invoice_print()
    {
        return view('invoice_print');
    } 
    public function invoice()
    {
        return view('invoice');
    } 
    public function jsgrid()
    {
        return view('jsgrid');
    } 
    public function kanban()
    {
        return view('kanban');
    } 
    public function language_menu()
    {
        return view('language_menu');
    } 
    public function legacy_user_menu()
    {
        return view('legacy_user_menu');
    } 
    public function lockscreen()
    {
        return view('lockscreen');
    } 
    public function login()
    {
        return view('auth.login');
    } 
    public function login_v2()
    {
        return view('login_v2');
    } 
    public function mailbox()
    {
        return view('mailbox');
    } 
    public function modals()
    {
        return view('modals');
    } 
    public function navbar()
    {
        return view('navbar');
    } 
    public function pace()
    {
        return view('pace');
    } 
    public function page404()
    {
        return view('page404');
    } 
    public function page500()
    {
        return view('page500');
    } 
    public function profile()
    {
        return view('profile');
    } 
    public function projects()
    {
        return view('projects');
    } 
    public function project_add()
    {
        return view('project_add');
    } 
    public function project_detail()
    {
        return view('project_detail');
    } 
    public function projects_edit()
    {
        return view('projects_edit');
    } 
    public function read_mail()
    {
        return view('read_mail');
    } 
    public function register()
    {
        return view('register');
    } 
    public function register_v2()
    {
        return view('register_v2');
    } 
    public function recover_password()
    {
        return view('recover_password');
    } 
    public function recover_password_v2()
    {
        return view('recover_password_v2');
    } 
    public function ribbons()
    {
        return view('ribbons');
    } 
    public function simple_results()
    {
        return view('simple_results');
    } 
    public function simple()
    {
        return view('simple');
    } 
    public function sliders()
    {
        return view('sliders');
    } 
    public function timeline()
    {
        return view('timeline');
    } 
    public function top_nav_slidebar()
    {
        return view('top_nav_slidebar');
    } 
    public function top_nav()
    {
        return view('top_nav');
    } 
    public function uplot()
    {
        return view('uplot');
    } 
    public function validation()
    {
        return view('validation');
    } 
    public function widgets()
    {
        return view('widgets');
    } 
    public function index2()
    {
        return view('index2');
    } 
    public function index3()
    {
        return view('index3');
    } 
}
