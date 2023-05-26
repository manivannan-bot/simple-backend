<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Vanguard\Http\Controllers\Controller;
use Vanguard\Repositories\Country\CountryRepository;
use Vanguard\Repositories\Role\RoleRepository;
use Vanguard\Repositories\User\UserRepository;
use Vanguard\Support\Enum\UserStatus;
use Illuminate\Support\Facades\Storage;
use Vanguard\Report;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __construct(
        private UserRepository $users,
        private RoleRepository $roles,
        private CountryRepository $countries
    )
    {
    }

    /**
     * Display user's profile page.
     *
     * @return Factory|View
     */
    public function show()
    {
        $roles = $this->roles->all()->filter(function ($role) {
            return $role->id == auth()->user()->role_id;
        })->pluck('name', 'id');

        return view('website.reports.create-report', [
            'user' => auth()->user(),
            'edit' => true,
            'roles' => $roles,
            'countries' => [0 => __('Select a Country')] + $this->countries->lists()->toArray(),
            'socialLogins' => $this->users->getUserSocialLogins(auth()->id()),
            'statuses' => UserStatus::lists()
        ]);

    }

    public function create()
    {

        // print_r($_POST);
        // print_r($_FILES);
        // print_r($_REQUEST);
        // exit;

        $report = Report::create([
            'title' => $_POST['title'],
            'type' => $_POST['type'],
            'description' => $_POST['description'],
        ]);
        
        if (isset($_FILES['banner']) && $_FILES['banner']['error'] === UPLOAD_ERR_OK) {
            $bannerExtension = pathinfo($_FILES['banner']['name'], PATHINFO_EXTENSION);
            $bannerDirectory = 'upload/banners/';
            $bannerPath = $bannerDirectory . $report->id . '_banner.' . $bannerExtension;
        
            if (!is_dir($bannerDirectory)) {
                mkdir($bannerDirectory, 0777, true);
            }
        
            move_uploaded_file($_FILES['banner']['tmp_name'], $bannerPath);
            $report->banner = $bannerPath;
        }
        
        if (isset($_FILES['customFile']) && $_FILES['customFile']['error'] === UPLOAD_ERR_OK) {
            $customFileExtension = pathinfo($_FILES['customFile']['name'], PATHINFO_EXTENSION);
            $customFileDirectory = 'upload/custom_files/';
            $customFilePath = $customFileDirectory . $report->id . '_custom.' . $customFileExtension;
        
            if (!is_dir($customFileDirectory)) {
                mkdir($customFileDirectory, 0777, true);
            }
        
            move_uploaded_file($_FILES['customFile']['tmp_name'], $customFilePath);
            $report->custom_file = $customFilePath;
        }
        
        $report->save();
        
        $roles = $this->roles->all()->filter(function ($role) {
            return $role->id == auth()->user()->role_id;
        })->pluck('name', 'id');

        return view('website.reports.create-report', [
            'user' => auth()->user(),
            'edit' => true,
            'roles' => $roles,
            'countries' => [0 => __('Select a Country')] + $this->countries->lists()->toArray(),
            'socialLogins' => $this->users->getUserSocialLogins(auth()->id()),
            'statuses' => UserStatus::lists()
        ]);
    }

    
    public function get_report()
    {
        
                $reports = DB::table('reports')->get();
                foreach ($reports as $report) {
                    $bannerPath = $report->banner;
                    $customFilePath = $report->custom_file;
                   // print_r($bannerPath);
                
                    // Use the storage paths as needed
                }
                //print_r($reports);exit;
                return view('website.gallery', compact('reports'));
    }
    public function get_content_id()
    {
        
                $reports = DB::table('reports')->latest()->first();
                
               
                //print_r($reports);exit;
                return view('website.others.content_page', compact('reports'));
    }

    public function get_events()
    {
        
                $reports = DB::table('reports')->where('type','Event')->get();
                
               
                //print_r($reports);exit;
                return view('website.events', compact('reports'));
    }
   
}
