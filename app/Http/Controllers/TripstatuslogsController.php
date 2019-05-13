<?php namespace App\Http\Controllers;
use App\Models\Tripstatuslogs;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Validator, Input, Redirect;
class TripstatuslogsController extends Controller {
    protected $layout = "layouts.main";
    protected $data = array();
    public $module = 'tripstatuslogs';
    static $per_page = '10';
    public function __construct() {
        parent::__construct();
        $this->model = new Tripstatuslogs();
        $this->info = $this->model->makeInfo($this->module);
        $this->access = array();
        $this->data = array_merge(array('pageTitle' => $this->info['title'], 'pageNote' => $this->info['note'], 'pageModule' => 'tripstatuslogs', 'return' => self::returnUrl()), $this->data);
    }
    public function index(Request $request) {
        // Make Sure users Logged
        if (!\Auth::check()) return redirect('user/login')->with('status', 'error')->with('message', 'You are no Logged in');
        $this->grab($request);
        if ($this->access['is_view'] == 0) return redirect('dashboard')->with('message', __('core.note_restric'))->with('status', 'error');
        // Render into template
        return view($this->module . '.index', $this->data);
    }
    function show(Request $request, $id) {
        /* Handle import , export and view */
        $task = $id;
        switch ($task) {
            case 'export':
                return $this->getExport($request);
            break;
        }
    }
}

