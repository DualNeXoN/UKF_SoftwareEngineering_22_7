<?php
namespace App\Http\Controllers;
use App\Models\Person;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Models\StudentPractice;

class UserController extends Controller
{
    public function storeUserData($user){
                $result = $this->findUser($user);
                return $result;
    }
    public function getAllUsers(){
        $data = User::join('person','person.general_user_id' , '=', 'general_user.id')
            ->join('role','role.id','=','general_user.role_id')
            ->select('general_user.*','person.*','role.name as role',)
            ->get();
        return $data;
    }
    public function findUser($id){
         $result = User::where('id',$id)->first()->person();
         return $result;
    }
    function userProfile($id){
        $user = Person::where('id',$id)->first();
        $permisonController = new PermissionController();
        $persmision = $permisonController->checkPermision(array(2,3,4,5));
        if($persmision){
            return view('students')->with('user',$user);
        }
        return "U have not permision";//
    }
    public function update(Request $request){
        $user = User::where('uid',$request['uid'])->first()->update([]);
    }
    public function practiceReport(){
            $permisonController = new PermissionController();
            $permisonController->checkPermision(array(4));
            if($permisonController == true){
                if(count(StudentPractice::where('student_id',Session::get('user')->id)->get()) == 0){
                    return "U have not assigned practice";
                }

                $state = StudentPractice::where('student_id',Session::get('user')->id)->get()->first();
                $state = $state->practice_state_id;
                return view('practicereport')->with('state',$state);
            }else return "U have not permission";

    }
}

