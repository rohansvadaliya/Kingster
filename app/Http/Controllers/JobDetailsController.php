<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobDetails;
use App\Models\Skill;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JobDetailsController extends Controller
{
    public function save(Request $request){
        $jobRecordId = isset($request->id) ? $request->id : 0;

        $rules = [
            'job_title' => 'required',
            'description' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'location' => 'required',
            'extra_information' => 'required',
            'company_name' => 'required',
            'skill' => 'required|array|min:1',
            'company_logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $response = errorRes("Please fill the blanks");
            $response['data'] = $validator->errors();
        } else {

            $jobExists = JobDetails::where('title', $request->job_title)->exists();

            if(!$jobExists) {
                DB::beginTransaction();

                try {
                    if($jobRecordId == 0){
                        $jobManage = new JobDetails();
                    } else {
                        $jobManage = JobDetails::find($jobRecordId);
                    }

                    if (isset($request->company_logo)) {
                        $file = $request->company_logo;
                        $companyImg = date("YmdHis") . rand(1000, 9000) . "." . $file->getClientOriginalExtension();
                        $destination_path = public_path() . "/company_logo/";

                        if (!is_dir($destination_path)) {
                            mkdir($destination_path, 0777, true);
                        }

                        if ($file->move($destination_path, $companyImg)) {
                            $jobManage->logo = $companyImg;
                        }
                    }

                    $jobManage->title = $request->job_title;
                    $jobManage->description = $request->description;
                    $jobManage->experience = $request->experience;
                    $jobManage->salary = $request->salary;
                    $jobManage->location = $request->location;
                    $jobManage->extra_info = $request->extra_information;
                    $jobManage->company_name = $request->company_name;
                    $jobManage->skills = implode(',', $request->skill);
                    $jobManage->save();

                    DB::commit();

                    $response = successRes("Job successfully saved");
                    $response['data'] = JobDetails::find($jobManage->id);

                } catch (\Exception $e) {
                    DB::rollBack();
                    $response = errorRes("An error occurred while saving the job: " . $e->getMessage());
                }
            } else {
                $response = errorRes("Job already exists");
            }
        }
    }

    public function records(Request $request){

        $searchColumns = array(
			'job_details.title',
			'job_details.description',
			'job_details.company_name',
			'job_details.experience',
			'job_details.salary',
			'job_details.location',
			'job_details.extra_info',
			'job_details.skills',
		);

        // title	description	experience	salary	location	extra_info	company_name	logo	skills

        $sortingColumns = array(
			0 => 'job_details.title',
			1 => 'job_details.description',
			2 => 'job_details.company_name',
			3 => 'job_details.experience',
			4 => 'job_details.salary',
			5 => 'job_details.location',
			6 => 'job_details.skills',
			7 => 'job_details.extra_info',
		);

        $selectColumns = array(
			'job_details.id',
			'job_details.title',
			'job_details.description',
			'job_details.experience',
			'job_details.salary',
			'job_details.location',
			'job_details.extra_info',
			'job_details.company_name',
			'job_details.logo',
			'job_details.skills',
		);

		$query = JobDetails::query();
		$query->where('is_deleted', 0);
		$recordsTotal = $query->count();

		$query = JobDetails::query();
		$query->select($selectColumns);
		$query->where('is_deleted', 0);
		$query->orderBy($sortingColumns[$request['order'][0]['column']], $request['order'][0]['dir']);
		if (isset($request['search']['value'])) {
			$search_value = $request['search']['value'];
			$query->where(function ($query) use ($search_value, $searchColumns) {
				for ($i = 0; $i < count($searchColumns); $i++) {
					if ($i == 0) {
						$query->where($searchColumns[$i], 'like', "%" . $search_value . "%");
					} else {
						$query->orWhere($searchColumns[$i], 'like', "%" . $search_value . "%");
					}
				}
			});
		}
		$recordsFiltered =  $query->count();

		if ($request->length != -1){
			$query->limit($request->length);
		}else{
			$query->limit($recordsTotal);
		}

		$query->offset($request->start);
		$data = $query->get();

		$data = json_decode(json_encode($data), true);

		$viewData=array();

		foreach ($data as $key => $value) {
            $viewData[$key]=array();
            $viewData[$key]['id']=$value['id'];
            $viewData[$key]['title']=$value['title'];
            $viewData[$key]['description'] = Str::words($value['description'], 5, '...');
            $viewData[$key]['company_name']=$value['company_name'];
            $viewData[$key]['experience']=$value['experience'];
            $viewData[$key]['salary']=$value['salary'];
            $viewData[$key]['location']=$value['location'];

            $image_link = asset('company_logo/' . $value['logo']);

            $viewData[$key]['logo'] = '<div class="avatar-xs"><span class="avatar-title rounded-circle"><img class="rounded-circle avatar-xs" src="' . $image_link . '" ></img></span></div>';


            $skillIds = explode(',', $value['skills']);
            $skills = Skill::whereIn('id', $skillIds)->pluck('name')->toArray();

            $skillHtml = '';
            foreach ($skills as $skill) {
                $skillHtml .= '<span class="inline-block bg-amber-100 rounded-full px-2 py-0.5 text-xs font-medium text-amber-800"style="background-color: #e0e0e0;color: #5b5959;margin-right: 4px; padding: 2px 1pc;">' . e($skill) . '</span>';
            }

            $viewData[$key]['skill'] = $skillHtml;


            $extra_infos = explode(',', $value['extra_info']);
            $html = '';
            foreach ($extra_infos as $extra_info) {
                $cleanTag = trim($extra_info);
                $html .= '<span class="inline-block bg-amber-100 rounded-full px-2 py-0.5 text-xs font-medium text-amber-800 mr-1"style="background-color: #ffeaab;color: #926100;margin-right: 4px; padding: 2px 1pc;">' . $cleanTag . '</span>';
            }
            $viewData[$key]['extra']= $html;

            $uiAction = '<ul class="list-inline font-size-20 contact-links mb-0"><li class="list-inline-item px-2 pos-middle"><a href="javascript:void(0);" title="Delete" onclick="deleteJob(' . $value['id'] . ')"><i class="bx bx-trash"></i></a></li></ul>';
			$viewData[$key]['action'] = $uiAction;
		}

		$jsonData = array(
			"draw" => intval($request['draw']),
			"recordsTotal" => intval($recordsTotal),
			"recordsFiltered" => intval($recordsFiltered),
			"data" => $viewData,
		);
		return $jsonData;
    }

    public function singleRecords(Request $request){

        $record = JobDetails::find($request->id);

        $return = array();
        $response = successRes("Job Details deleted successfully");
        $response['data'] = $record;
		return $response;
    }

	public function delete(Request $request){
		$rules = array();
		$response = array();
        $rules['id'] = 'required';

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			$response = errorRes("Please fill the blanks");
			$response['data'] = $validator->errors();

		}else{
			$manageRecord = JobDetails::find($request->id);
			if($manageRecord){
				$manageRecord->is_deleted = 1;
				$manageRecord->save();

				$response = successRes("Job Details deleted successfully");
			}else{
				$response = errorRes("Record not found");
			}
		}
		return response()->json($response)->header('Content-Type', 'application/json');
	}

    public function jobDetails(Request $request){

        $selectColumns = array(
			'job_details.id',
			'job_details.title',
			'job_details.description',
			'job_details.experience',
			'job_details.salary',
			'job_details.location',
			'job_details.extra_info',
			'job_details.company_name',
			'job_details.logo',
			'job_details.skills',
			'job_details.created_at',
		);

		$query = JobDetails::query();
		$query->where('is_deleted', 0);
		$data = $query->get();

		$data = json_decode(json_encode($data), true);

		$viewData=array();

		foreach ($data as $key => $value) {
            $viewData[$key]=array();
            $viewData[$key]['id']=$value['id'];
            $viewData[$key]['title']=$value['title'];
            $viewData[$key]['description'] = Str::words($value['description'], 18, '...');
            $viewData[$key]['company_name']=$value['company_name'];
            $viewData[$key]['experience']=$value['experience'];
            $viewData[$key]['salary']=$value['salary'];
            $viewData[$key]['location']= array_map('trim', explode('/', $value['location']));
            $viewData[$key]['locations']= $value['location'];
            $viewData[$key]['created']= Carbon::parse($value['created_at'])->diffForHumans();

            $viewData[$key]['logo']= asset('company_logo/' . $value['logo']);


            $skillIds = explode(',', $value['skills']);
            $skills = Skill::whereIn('id', $skillIds)->pluck('name')->toArray();
            $viewData[$key]['skill'] = $skills;


            $extra_infos = explode(',', $value['extra_info']);
            $viewData[$key]['extra']= $extra_infos;

            $uiAction = '<ul class="list-inline font-size-20 contact-links mb-0"><li class="list-inline-item px-2 pos-middle"><a href="javascript:void(0);" title="Delete" onclick="deleteJob(' . $value['id'] . ')"><i class="bx bx-trash"></i></a></li></ul>';
			$viewData[$key]['action'] = $uiAction;
		}

		return $viewData;
    }
}
