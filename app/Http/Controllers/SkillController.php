<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Validator;


class SkillController extends Controller
{
    public function save(Request $request){
        $skillRecordId = isset($request->id) ? $request->id : 0;

		$rules = array();
        $rules['name'] = 'required';

		$validator = Validator::make($request->all(), $rules);

		if ($validator->fails()) {
			$response = errorRes("Please fill the blanks");
			$response['data'] = $validator->errors();
		}else{

            if($skillRecordId == 0){
                $SkillRecord = new Skill();
            }else{
                $SkillRecord = Skill::find($skillRecordId);
            }

            $SkillRecord->name = $request->name;
            $SkillRecord->save();

            $SkillRecord = Skill::select('id', 'name')->where('id', '=', $SkillRecord->id)->first();

            $response = successRes("Skill successfully saved");
            $response['data'] = $SkillRecord;
        }
        return response()->json($response)->header('Content-Type', 'application/json');
    }

    public function records(Request $request){

        $searchColumns = array(
			'skills.name',
		);

        $sortingColumns = array(
			0 => 'skills.name',
			1 => 'skills.id',
		);

        $selectColumns = array(
			'skills.id',
			'skills.name',
		);

		$query = Skill::query();
		$query->where('is_deleted', 0);
		$recordsTotal = $query->count();

		$query = Skill::query();
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
			$viewData[$key]['name']=$value['name'];

            $uiAction = '<ul class="list-inline font-size-20 contact-links mb-0">';
			$uiAction .= '<li class="list-inline-item px-2"><a onclick="editView(' . $value['id'] .')" href="javascript: void(0);" title="Edit"><i class="bx bx-edit-alt"></i></a></li>';
            $uiAction .= '<li class="list-inline-item px-2 pos-middle"><a href="javascript:void(0);" title="Delete" onclick="deleteSkill(' . $value['id'] . ')"><i class="bx bx-trash"></i></a></li>';
			$uiAction .= '</ul>';
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

        $record = Skill::find($request->id);

        $return = array();
        $response = successRes("Skill deleted successfully");
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
			$manageRecord = Skill::find($request->id);
			if($manageRecord){
				$manageRecord->is_deleted = 1;
				$manageRecord->save();

				$response = successRes("Skill deleted successfully");
			}else{
				$response = errorRes("Record not found");
			}
		}
		return response()->json($response)->header('Content-Type', 'application/json');
	}

    public function lists(Request $request){

		$searchKeyword = isset($request->search_value) ? $request->search_value : "";
		$id = isset($request->id) ? $request->id : 0;

		$SkillList = array();
		if ($id != 0) {
			$SkillList = Skill::query();
			$SkillList->where('id', $id);
			$SkillList = $SkillList->first();
		} else {
			$SkillList = Skill::select('id', 'name as text');
			if ($searchKeyword != '') {
				$SkillList->where('name', 'like', "%" . $searchKeyword . "%");
			}
			$SkillList->where('is_deleted', 0)->orderBy('name', 'asc');
			$SkillList->limit(50);
			$SkillList = $SkillList->get();
		}

		$response = successRes("Search Data!!");
		$response['results'] = $SkillList;
		$response['pagination']['more'] = false;
		return response()->json($response)->header('Content-Type', 'application/json');
    }
}
