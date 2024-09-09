<?php
namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Hash;
use DateTime;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class apiController extends Controller
{
    public function getTasks($e){
    
            DB::connection()->getPdo();
            $userid=DB::table('users')->where('email',$e)->value('id');
            $data=DB::select("select title,description,user_id,status from tasks where user_id = $userid");
            return response()->json($data);
    

    }
 
    public function index($email)
    {
      
            $userid=DB::table('users')->where('email',$email)->value('id');
            $daily=DB::table('daily')->where('user_id',$userid)->get();
            $weekly=DB::table('weekly')->where('user_id',$userid)->get();
            $data=$daily->concat($weekly);
            return response()->json($data);
    
        }
        
   



    public function register(Request $request){
     
            DB::connection()->getPdo();
          
            // return response()->json('sdklfjlk');
            
            
            $userid=DB::table('users')->where('email',$request->email)->value('id');
            $r=Hash::make($request->password);
            if ($userid==null) {
                if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/', $request->email)) {
                   
                  
                       
                        $data= DB::select("INSERT INTO `users`( `name`, `email`,`password`) VALUES  ('$request->username','$request->email','$r')");
                        return response(1);
                   
                }else{
                    return response('invalid email');
                }
            }else {
                return response(0);
                
            }
    
            
    }



// login funtion
public function login(Request $request){
        $useremail=DB::table('users')->where('email',$request->email)->value('email');
        if ($useremail!==null) {
            $password =$request->password;
            $userpassword=DB::table('users')->where('email',$request->email)->value('password');
            if(Hash::check($password , $userpassword)) {
                return true;
            }else{
                return  false;
            }
        }else {return false;}}
public function  changeusername(Request $request){
        DB::connection()->getPdo();
        $newname =$request->name;
        // update user name
        DB::table('users')->where('email', $request->email)->update([
            'name' => $newname]);
        return response()->json('username_updated');}
public function  changepassword(Request $request){
        DB::connection()->getPdo();
        $password =$request->old;
        $userpassword=DB::table('users')->where('email',$request->email)->value('password'); 
        if(Hash::check($password , $userpassword)) {
            // check new passsword match with confirm password
            if ($request->new==$request->conf) {
            // update password
            DB::table('users')->where('email', $request->email)->update([
                'password' =>  Hash::make($request->new)]);
            return response()->json('password_updated');
        } else {
            return response()->json('unmatch_pass'); 
        }}else{
            return response()->json('your password is not correct');
        }}
public function  changeemail(Request $request){
        DB::connection()->getPdo();
        if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/', $request->newemail)) {
    $useremail=DB::table('users')->where('email',$request->newemail)->value('email');

    if ($useremail=='') {
        $password =$request->password;
        $userpassword=DB::table('users')->where('email',$request->email)->value('password'); 
        if(Hash::check($password , $userpassword)) {
            // update email
           
            DB::table('users')->where('email', $request->email)->update([
                'email' =>  $request->newemail]);
                return response()->json('email_updated');
            }else{
                return response()->json('your password is not correct');
            }
            
        }
        else{
            return response()->json('this email already registerd!');
        }
    }else{
        return response()->json('incorrect_email_type');
    }

}
public function  changephoneNum(Request $request){
  
        // return response()->json('sdklfjlk');
        DB::table('users')->where('email', $request->email)->update([
            'phone' => $request->new_num]);
            return response()->json('number_updated');
    

}
public function  changebio(Request $request){
  
        // return response()->json('sdklfjlk');
        DB::table('users')->where('email', $request->email)->update([
            'bio' => $request->bio]);
            return response()->json('bio_updated');
    

}
public function  changeimg(Request $request,$e){
  
        DB::connection()->getPdo();
      
        
        
        
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images');


        
        $id=DB::table('users')->where("email",$e)->value("id");
        
        $file=$request->file('image');
        $fileName = $file->getClientOriginalName();
        
        $file->move(public_path('/images/user'), $fileName);
        
    DB::table('users')->where('id', $id)->update([
        'img' => $fileName]);
        
        return response()->json($fileName);
    }
    
    return response()->json(['error' => 'No image uploaded'], 400);

}
public function showimg($e){ 
      
    DB::connection()->getPdo();
  
    // return response()->json('sdklfjlk');
    $img=  DB::table('users')->where('email', $e)->value('img');
    $path = public_path('/images/user/' . $img);
    if (!file_exists($path)) {
        return response()->json(['message' => 'Image not found.'], Response::HTTP_NOT_FOUND);
    }
    
    return response()->file($path);


}

public function  mobileAPI($e){
  
            DB::connection()->getPdo();
          
            // return response()->json('sdklfjlk');
            // برای ارسال حدیث ... وغیره
            $data=DB::select("select text,author from motivational_text");
            return response()->json($data);
      


}
public function  getdata($e){



   
   
        // return response()->json('sdklfjlk');
        $userid=DB::table('users')->where('email',$e)->value('id');
        $data=DB::select("select title,description,user_id,status,time from tasks where user_id = $userid");
        return response()->json($data);
    
    

}
public function  savedatatodatabase(Request $request){

}
public function  addToDoList(Request $request){

    // save new task to database
 
      
        $email=$request->email;
        $userid=DB::table('users')->where('email',$email)->value('id');
        $titles = $request->title;
        $descriptions=$request->description;
        $times=$request->time;
        
        
        DB::table('tasks')->insert([
            
            'title' => $titles ,
            'time' => $times ,
            'description' => $descriptions ,
            'user_id' =>$userid,
        ]);
        return  response()->json('saved');
        
        
        
        
        
        
        
  

}
public function completedTasks(Request $request){//this method use for remove task

        DB::connection()->getPdo();
      
        // return response()->json('sdklfjlk');
        $title=$request->title;
        $email=$request->email;
        $userid=DB::table('users')->where('email',$request->email)->value('id');
        DB::select("UPDATE `tasks` SET `status`=1 WHERE user_id='$userid' and title='$title'");
        return response()->json('data changed');
 

}

    public function getChartdata($e)

    {
      
            DB::connection()->getPdo();
          
            // return response()->json('sdklfjlk');
            
            $userid=DB::table('users')->where('email',$e)->value('id');
            $Daily_data=DB::select("select Saturday,Sunday,Monday,Tuesday,wednesday,Thursday,Friday from daily where user_id = $userid");
            $weekly_data=DB::select("select week1,week2,week3,week4 from weekly where user_id = $userid");
            $data=[$Daily_data,$weekly_data];
            
            return response()->json($data);
      
    }
    public function fetchUserDate($e)
    
    {

            $userid=DB::table('users')->where('email',$e)->value('id');
            $user=DB::select("select name,email,img,bio,phone,rate,today_rating,completed_session,today_completed_session,total_hours_study,average_working_hours from users where id=$userid");
            
            
            
            return response()->json($user);
            // return response()->json('sdklfjlk');
    

    }

public function updateDatabse(Request $request){
  
        
        
        $email=$request->input('email');
        $userid=DB::table('users')->where('email',$email)->value('id');
        $titles = $request->input('title');
        $descriptions=$request->input('description');
        $times=$request->input('time');
        
        $data=DB::select("select title,description from tasks where user_id = $userid");
        $dbtitle=[];  
        $dbdescr=[];
        for ($i=0; $i <count($data); $i++) { 
            array_push($dbtitle,$data[$i]->title);
            array_push($dbdescr,$data[$i]->description);
        }  
        $flag='';
        $titleString=implode("   ", $titles);
        $descString=implode("   ", $descriptions);
        $finalTitle=[];
        return response()->json($email);
$finaldesc=[];
$finaltime=[];
$counter=1;
for ($i=0; $i  < count($dbtitle); $i++) { 
    if ($counter<=count($titles)) {
        
        if (!str_contains($titleString,$dbtitle[$i])) {
            
            array_push($finalTitle,$titles[$i]);
            array_push($finaldesc,$descriptions[$i]);
            array_push($finaltime,$times[$i]);
        }
    }
    else{
        $counter=1;
    }
    $counter++;
}


if (count($finalTitle)!=0 ) {
        # save data to data base
        for ($i=0; $i < count($finalTitle) ; $i++) { 
                DB::table('tasks')->insert([
  
            'title' => $finalTitle[$i] ,
            'time' => $finaltime[$i],
            'description' => $finaldesc[$i] ,
            'user_id' =>$userid,
        ]);
    }
    return response()->json('data updated');
}else {
        return response()->json('data not saved');
    
    }


}








public function updatetaskstatus(Request $request){
    $title=$request->title;
    $description=$request->description;
    if ($request->type=='update_time') {

        $time=DB::table('tasks')->where('title',$title)->value('time');
       
        DB::table('tasks')->where('title', $title)->where('description',$description)->update([
            'time' => ($time-$request->time)]);
    
        return response()->json($time);
    }else if($request->type=='offline'){
        // if some tasks completed in offline mode, these section save it to database





        return response()->json('offline mode');

    }
}



public function completedtask(Request $request){
   
   return response()->json('it works');
//     $title=$request->input('titles');
//     $description=$request->input('descriptions');
//     $time=$request->input('time');
//     $email=$request->input('email');
//     $userid=DB::table('users')->where('email',$email)->value('id');    
    
//     //   DB::table('tasks')->where('title', $title)->where('description',$description)->update([
//     //         'status' => 1]);

      
        
        
// //    save daily progess
   
//     $progress_data=$time/60;
//     date_default_timezone_set('Asia/Kabul');
//     $specificDate=new DateTime('Saturday last week');
// $currentDate = new DateTime('now');
// $interval = $specificDate->diff($currentDate);
// $daysPassed = $interval->days;
// $currentdayname=Date('l');

// return response()->json('result');

// if ($daysPassed<=6) {
//     // update row
//     $d=DB::table('daily')->where('created_at',$currentDate->format("Y-m-d"))->where('user_id',$userid)->value($currentdayname) ;
//     // $dd=json_decode($d);
// //   $r=$dd==" ";
//       if ($d==null) {
//         DB::table('daily')->insert([
            
//             $currentdayname=>$progress_data,
//             'created_at'=>Date('Y-m-d'),
//             'user_id'=>$userid,]);

            
//         }else{
//             $p=DB::table('daily')->where('created_at',$currentDate->format("Y-m-d"))->where('user_id',$userid)->value($currentdayname);
  
//             DB::table('daily')->where('user_id',$userid)->update([
//                 $currentdayname=>$progress_data+$p,
//             ]);

//         }
// }else {
//                 DB::table('daily')->insert([
                    
//                     $currentdayname=>$progress_data,
//                     'created_at'=>Date('Y-m-d'),
//                     'user_id'=>$userid,
                    
//                 ]);
                
//             }
//         // save to weekly progess
//         $_14_days_ago=date('Y-m-d',strtotime('-14 days'));
//         $_7_days_ago=date('Y-m-d',strtotime('-7 days'));
//         $pastweek=DB::table('daily')->where('created_at','>=',$_14_days_ago)
//         ->where('created_at','<=',$_7_days_ago)->get();
        
//         $currentweek=DB::table('daily')->where('created_at','>=',$_7_days_ago)
//         ->where('created_at','<=',$currentDate)->get();
        
//         // retur $_14_days_ago;
//         // echo $_7_days_ago;
//         $totalpr=0;
//         $counterp=0;
//         foreach ($currentweek as $key => $value) {

//             if (($counterp>=1 && $counterp<=7)&& $value!=null ) {
//                 $totalpr+=$value;
//             }
//             $counterp++;

//            
//         }
        
//         // echo $pastweek;

// // for ($i=1; $i < 8; $i++) { 
    
// // }
        




// $md=Date('d');
// if ($md<=7) {
//     DB::table('weekly')->insert([
                    
//         'week1'=>$progress_data,
//         'created_at'=>Date('Y-m-d'),
//         'user_id'=>$userid,
        
//     ]);
// }else if($md >=7 && $md <=14 ){

// }else if($md >=14 && $md <= 21){

// }else{

// }
// //         // return response()->json($md);



}














    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getProfileimg($e){
    
            //code...
            DB::connection()->getPdo();
            $profileImg=DB::table('users')->where('email',$e)->value('img');
            if ($profileImg!=null) {
                # user has profile image
            }else{
                // user does not have profile image
            }
    
    }
}
